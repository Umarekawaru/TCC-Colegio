<?php
include_once('../conec/connect.php');
 $stmt = $conn->prepare("INSERT INTO products (title, link, image, description) VALUES(:NAME, :LINK, :IMAGE, :DESCRIPTION)");

$name = $_POST['nome'];
$link = $_POST['link'];
$description = $_POST['description'];

$arquivo = $_FILES['image'];

$arquivoNovo = explode('.', $arquivo['name']);
move_uploaded_file($arquivo['tmp_name'], '../images/image/cidade'.$arquivo['name']);

$image = 'images/images-cat/'.$arquivo['name'];

$stmt->bindParam(":NAME", $name);
$stmt->bindParam(":LINK", $link);
$stmt->bindParam(":DESCRIPTION", $description);
$stmt->bindParam(":IMAGE", $image);
$stmt->execute();

header('Location: ../admin/view-cast.php');

?>