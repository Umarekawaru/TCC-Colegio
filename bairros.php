<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<base href="https://<?php echo $_SERVER['HTTP_HOST'] ?>/">
	<title></title>
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" type="text/css" href="css/image.css">
  	<link rel="stylesheet" type="text/css" href="css/responsivr.css">
	<?php include_once("css/header.php") ?>
	<style type="text/css" media="screen">
		.card img{
			max-height: 200px;
		}
	</style>
</head>
<?php include_once("navbar.php") ?>
<?php 
	include_once("conec/connect.php");
	$id = $_GET['bairro']??"none";

	if ($id == "forte") {
	$stmt = $conn->prepare("SELECT * FROM local WHERE local = :ID LIMIT 0,9");
	$stmt->execute(array('ID' => $id));
	$results = $stmt->fetchALL(PDO::FETCH_ASSOC);?>
	<style type="text/css">
		#image{
			background-image: url(image/forte.jpg) !important;
		}
	</style>
	<?php }elseif ($id == "museo"){
		$stmt = $conn->prepare("SELECT * FROM local WHERE local = :ID LIMIT 0,9");
	$stmt->execute(array('ID' => $id));
	$results = $stmt->fetchALL(PDO::FETCH_ASSOC);?>
	<style type="text/css">
		#image{
			background-image: url(image/museu.jpg) !important;
		}
	</style>
	<?php
	}else{
		header("Location:/index.php");
	};
?>
<body>

	<section id="image" class="flex-center">
				<div id="text-image">
					<h2 class="titlemid">Bem-vindo aos <?php if ($id == 'forte') {echo "Fortes"; }else{echo "Museus";}?></h2>
				</div>
		</section>
	<section class="green-b">
	<div class="container" style="margin-top: 15px;">
		<div class="row row-cols-1 row-cols-md-3 g-5">
			<?php foreach ($results as $baixa):  ?>
		  <div class="col">
		    <div class="card h-100">
		      <img src="<?=$baixa['image']?>" class="card-img-top" alt="<?=$baixa['image']?>">
		      <div class="card-body text-center just">
		        <h5 class="card-title"><?=$baixa['nome']?></h5>
		        <p class="card-text lh-1 text-break"><?=$baixa['description']?></p>
		      </div>
		      <div class="card-footer">
		        <small class="text-muted"><a href="<?=$baixa['link']?>" title="como chegar" target="_BLANK">Click aqui para GPS!</a></small>
		        <small class="text-muted" style="float: right;">Click aqui para ver em<a href="inserido.php" title="realidade virtual"> Realidade virtual</a> ou <a href="inserido.php" title="realidade aumentanda" > Realidade Aumentada</a></small>
		      </div>
		    </div>
		  </div>
		  <?php endforeach; ?>
		</div>
	</div>
	</section>

<?php include("footer.php") ?> 