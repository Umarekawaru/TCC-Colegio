<?php
include_once('../conec/connect.php');
$stmt = $conn->prepare("DELETE FROM users WHERE id = :ID");
$id = $_GET['id'];
$stmt->bindParam(":ID", $id);
$stmt->execute();

header("Location: ../admin/")
?>
