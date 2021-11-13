<?php 
include_once('../conec/connect.php');
//Coloque aqui a sessão

$id = $_GET['id'];


$stmt= $conn->prepare("DELETE FROM loca WHERE id= :ID");
 
$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "O $id foi apagado com sucesso!";

header('Location: ../admin/view-cast.php?tipo=local');

?>