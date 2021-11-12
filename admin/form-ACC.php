<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Formuario de cadrastro</title>
	<link rel="stylesheet" href="../body/admin/header-admin.php">
</head>
<?php
session_start();
if ($_SESSION['logado'] != true) {
	session_destroy();
	header("Location: index.php");
}
?>
<body>
		<div class="input-group">
		<form action="../config/Creat-ACC.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
			<input type="text" name="nome" class="input-group" placeholder="Nome">
			<input type="text" name="login" class="input-group" placeholder="Login">
			<input type="text" name="password" class="input-group" placeholder="password">
			<button type="submit" value="ENVIAR"class="btn btn-primary mb-3">ENVIAR</button>
		</form>
	</div>
</body>
</html>