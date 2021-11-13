<?php
include('../conec/connect.php');
session_start();
$login = $_POST['login'];
$senha = md5($_POST['senha']);

$stmt=$conn->prepare("SELECT * FROM users WHERE login = :LOGIN AND senha = :SENHA");

$stmt->bindValue(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);
$stmt->execute();

if($stmt->rowCount()==1){
    $info = $stmt->fetch();
    // var_dump($info);
    $_SESSION['logado'] = true;
    $_SESSION['nome'] = $info['nome'];
    $_SESSION['login'] = $info['login'];
    $_SESSION['senha'] = $info['senha'];

    header("Location:../admin/view-cast.php?tipo=cidade");
}else{
    echo "Usario não encontrado";
}
?>
