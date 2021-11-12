<?php
include_once('../../conec/connect.php');
 $stmt = $conn->prepare("INSERT INTO cidade (nome, description, link, image, local) 
    VALUES(:NAME, :DESCRIPTION, :LINK, :IMAGE, :LOCAL )");

$name = $_POST['nome'];
$link = $_POST['link'];
$description = $_POST['description'];
$local = $_POST['local'];

$arquivo = $_FILES['image'];

$arquivoNovo = explode('.', $arquivo['name']);
move_uploaded_file($arquivo['tmp_name'], '../../image/cidade/'.$arquivo['name']);

$image = '/image/cidade/'.$arquivo['name'];

$stmt->bindParam(":NAME", $name);
$stmt->bindParam(":LINK", $link);
$stmt->bindParam(":DESCRIPTION", $description);
$stmt->bindParam(":IMAGE", $image);
$stmt->bindParam(":LOCAL", $local);
echo "$name $link $description $local $image";
$stmt->execute();

header('Location: ../../admin/view-cast.php');

?>