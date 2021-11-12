<?php
include_once('../conec/connect.php');

   $name = $_POST['nome'];
   $login = $_POST['login'];
   $password = md5($_POST['password']);

   $stmt = $conn->prepare("INSERT INTO users (nome, login, senha) VALUES(:NAME, :LOGIN, :PASSWORD)");

   $stmt->bindParam(":NAME", $name);
   $stmt->bindParam(":LOGIN", $login);
   $stmt->bindParam(":PASSWORD", $password);
   $stmt->execute();

header("Location: ../admin/")
?>