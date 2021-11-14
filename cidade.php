<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
	$id = $_GET['cidade']??"none";

	if ($id == "alta") {
	$stmt = $conn->prepare("SELECT * FROM cidade WHERE local = :ID LIMIT 0,9");
	$stmt->execute(array('ID' => $id));
	$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
	}elseif ($id == "baixa"){
		$stmt = $conn->prepare("SELECT * FROM cidade WHERE local = :ID LIMIT 0,9");
	$stmt->execute(array('ID' => $id));
	$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
	}else {
		header('Location: index.php');
	};
?>
<body>

	<section id="image" class="flex-center">
				<div id="text-image">
					<h2 class="titlemid">Bem vindo a Cidade <?php if ($id == 'alta') {echo "Alta"; }else{echo "Baixa";}?></h2>
				</div>
		</section>
	<section class="blue-b">
	<div class="container">
		<div class="row row-cols-1 row-cols-md-3 g-4">
			<?php foreach ($results as $baixa):  ?>
		  <div class="col">
		    <div class="card h-100">
		      <img src="<?=$baixa['image']?>" class="card-img-top" alt="...">
		      <div class="card-body text-center just">
		        <h5 class="card-title"><?=$baixa['nome']?></h5>
		        <p class="card-text lh-1 text-break"><?=$baixa['description']?></p>
		      </div>
		      <div class="card-footer">
		        <small class="text-muted"><a href="<?=$baixa['link']?>" title="como chegar" target="_BLANK">Click aqui para GPS!</a></small>
		        <small class="text-muted" style="float: right;">Click aqui para ver em<a href="<?=$baixa['link']?>" title="como chegar" target="_BLANK"> Realidade virtual</a> ou <a href="<?=$baixa['link']?>" title="como chegar" target="_BLANK"> Realidade Aumentada</a></small>
		      </div>
		    </div>
		  </div>
		  <?php endforeach; ?>
		</div>
	</div>
	</section>

<?php include("footer.php") ?>