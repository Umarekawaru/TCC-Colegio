<?php
include('../../conec/connect.php');

$id = $_POST['id'];
$name = $_POST['nome'];
$link = $_POST['link'];
$local = $_POST['local'];
$description = $_POST['description'];

$arquivo = $_FILES['image'];

$stmt = $conn->prepare('UPDATE local SET id = :ID, nome = :NAME, link = :LINK, image = :IMAGE, local = :LOCAL, description = :DESCRIPTION WHERE id = :ID');

$arquivoNovo = explode('.', $arquivo['name']);
move_uploaded_file($arquivo['tmp_name'], '../../image/muse/'.$arquivo['name']);

$image = '/image/muse/'.$arquivo['name'];

echo"$id $name $local $description $image";

$stmt->bindParam(':ID', $id);
$stmt->bindParam(':LINK', $link);
$stmt->bindParam(':NAME', $name);
$stmt->bindParam(':LOCAL', $local);
$stmt->bindParam(':IMAGE', $image);
$stmt->bindParam(':DESCRIPTION', $description);
$stmt->execute();

//	header('Location: ../../admin/view-cast.php?tipo=local');

?>
