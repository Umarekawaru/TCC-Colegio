<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/admin/style-index.css">
	<?php include('../css/admim/header.php');?>
</head>
<body class="text-center">
	<!--<form id="form-login align-middle" action="../config/logar.php" method="POST">
		<div class="mb-3 align-middle">-->
			<!--<a href="../index.php" style="text-decoration: none !important;"><p>Clique para voltar ao site.</p></a>-->
			<!--<img src="../images/favicon.png" class="mb-4 mt-3" width="80px" alt="login">
			<h3>Login Painel Administrativo</h3>
				</div>
		  		<div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Login</label>
				    <input type="text" class="form-control" placeholder="Digite seu usuário" name="login" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="mb-3">
				    <label for="exampleInputPassword1" class="form-label">Senha</label>
				    <input type="password" class="form-control" placeholder="Digite sua senha" name="senha" id="exampleInputPassword1">
				</div>
				  <button type="submit" value="ENVIAR" class="btn btn-primary">Entrar</button>
				   <div id="emailHelp" class="form-text">Fotografado por <a href="https://unsplash.com/@leoroza?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Léo Roza</a> de <a href="https://unsplash.com/s/photos/comida?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
				   	</div>
		<?php require('../config/logar.php');?>		  
		</form>-->
		<div class="login-page">
			<div class="form">
				<form class="register-form" action="../config/logar.php" method="POST">
				<input type="text" placeholder="Insira o Nome" name="login"/>
				<input type="password" placeholder="Insira a Senha" name="senha"/>
				<input type="text" placeholder="email address"/>
				<button>create</button>
				<p class="message">Already registered? <a href="#">Sign In</a></p>
				</form>
				<form class="login-form" method="POST">
				<input type="text" placeholder="Insira o Nome"name="login"/>
				<input type="password" placeholder="Insira a Senha"name="senha"/>
				<?php
					if(isset($status)){
                                		echo '<p class="alert-danger text-center">Usuário ou senha Inválido!</a>';
                                	};
                                ?>
				<button value="ENVIAR">login</button>
				<p class="message">Not registered? <a href="#">Create an account</a> <br>(NÃO É POSSIVEL CADRASTRAR!)</p>
				</form>
			</div>
		</div>
</body>
<script>
$(".message a").click(function () {
  $("form").animate({ height: "toggle", opacity: "toggle" }, "slow");
});
</script>
<style>
	@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
	</style>
</html>
  
