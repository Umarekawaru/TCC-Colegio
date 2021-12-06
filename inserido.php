<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lamento</title>
	 <link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" type="text/css" href="image.css">
  	<link rel="stylesheet" type="text/css" href="css/responsivr.css">
	<?php include_once("css/header.php") ?>
</head>
<style type="text/css" media="screen">
	.limit{
		width: 80%;
		background-color: rgba(129, 129, 129, 0.8);
	}
	body{
		background-image: url(image/felipe.jpg);
	}
@media screen and (max-width: 1280px) {
	.limit{
		width: 95%;
	}
}
</style>
<body>
	<div class="d-flex justify-content-center position-absolute top-50 start-50 translate-middle">
		<div class="card text-center limit">
		  <div class="card-header text-light">
		    EM BREVE
		  </div>
		  <div class="card-body">
		    <h5 class="card-title text-light">Desculpe-nos o transtorno!</h5>
		    <p class="card-text text-light">Essa função ainda não está dsiponível, devido a limitações financeiras.</p>
		    <p onclick="goBack()"class="btn btn-primary">Retorne aqui!</a>
		  </div>
		  <div class="card-footer text-light">
		    Foto por <a href="https://unsplash.com/@felipediascreator?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" class="link-light">Felipe Dias</a> via <a href="https://unsplash.com/s/photos/salvador-bahia?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" class="link-light">Unsplash</a>
		  </div>
		</div>
	</div>

<script>
function goBack() {
  window.history.go(-1);
}
</script>
</body>
</html>