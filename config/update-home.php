<?php
include_once("../conec/connect.php");

$title = $_POST['title'];
$description = $_POST['description'];
$id = $_POST['id'];

$arquivo = $_FILES['image'];

$stmt = $conn->prepare('UPDATE home SET id =:ID, title = :TITLE, description = :DESCRIPTION, image = :IMAGE WHERE id =:ID');

$arquivoNovo = explode('.', $arquivo['name']);
move_uploaded_file($arquivo['tmp_name'], '../images/sobre-mim/'.$arquivo['name']);

$image = 'images/sobre-mim/'.$arquivo['name'];

$stmt->bindParam(':ID', $id);
$stmt->bindParam(':TITLE', $title);
$stmt->bindParam(':DESCRIPTION', $description);
$stmt->bindParam(':IMAGE', $image);
$stmt->execute();

header('Location: ../admin/view-cast.php');

?>
