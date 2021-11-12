<?php
include('../conec/connect.php');

$id = $_POST['id'];
$name = $_POST['nome'];
$link = $_POST['link'];
$description = $_POST['description'];
$local = $_POST['local'];

$arquivo = $_FILES['image'];

$stmt = $conn->prepare('UPDATE cidade SET id = :ID, name = :NAME, link = :LINK, image = :IMAGE, description = :DESCRIPTION, local = :LOCAL WHERE id = :ID');

$arquivoNovo = explode('.', $arquivo['name']);
move_uploaded_file($arquivo['tmp_name'], '../../image/cidade'.$arquivo['name']);

$image = '/image/cidade/'.$arquivo['name'];

$stmt->bindParam(":NAME", $name);
$stmt->bindParam(":LINK", $link);
$stmt->bindParam(":DESCRIPTION", $description);
$stmt->bindParam(":IMAGE", $image);
$stmt->bindParam(":LOCAL", $local);
$stmt->execute();

	header('Location: ../admin/view-cast.php');

?>
