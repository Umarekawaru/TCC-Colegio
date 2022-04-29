<?php
function LogAcesso($status, $login, $ip, $flag, $conn2) {

    $status = $status? "Sucesso!": ($flag ? "Bloqueado": "Falha!");
    $sql = "INSERT INTO log_acesso (ip, user, status) VALUES (?,?,?)";
    $stmt = mysqli_prepare($conn2, $sql);
    mysqli_stmt_bind_param($stmt,"sss", $ip, $login, $status);
    mysqli_stmt_execute($stmt);
}

function checkIps($ip, $conn2) {
    $sql = "SELECT ip, status FROM log_acesso WHERE ip = ? AND status = 'Falha!' AND acesso > (NOW() - INTERVAL 60 MINUTE)";
    $stmt = mysqli_prepare($conn2, $sql);
    mysqli_stmt_bind_param($stmt,"s", $ip);
    mysqli_stmt_execute($stmt);
    $checar = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($checar) < 3){
        return false;
    };
    return true;

}

session_start();
if(isset($_POST['login']) && isset($_POST['senha'])) {

    require('../conec/connect2.php');
    $ip = $_SERVER["REMOTE_ADDR"];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $status = false;
    $flag = checkIps($ip, $conn2);
    if(!$flag){
        $sql = "SELECT nome, login, senha FROM users WHERE login = ?";
        $stmt = mysqli_prepare($conn2, $sql);
        mysqli_stmt_bind_param($stmt, 's', $login);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($resultado) > 0) {
            $info = mysqli_fetch_assoc($resultado);
            $hash = $info['senha'];
            if(password_verify($senha ,$hash)) {
                $status = true;
                $_SESSION['logado'] = true;
                $_SESSION['nome'] = $info['nome'];
                $_SESSION['login'] = $info['login'];
                $_SESSION['senha'] = $info['senha'];
  		header("Location:/admin/view-cast.php?tipo=cidade");

            }
        }
    }else{
        header("location:/");
    }
LogAcesso($status,$login, $ip, $flag, $conn2);



};
