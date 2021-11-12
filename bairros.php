<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" type="text/css" href="css/image.css">
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
	$id = $_GET['bairro'];

	$stmt = $conn->prepare("SELECT * FROM cidade WHERE local = :ID LIMIT 0,9");
	$stmt->execute(array('ID' => $id));
	$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
	//SEPARAÇÃO O DE CIMA É DO SOBRE MIM E O DE BAIXO É DO SLIDE
?>
<body>

	<section id="image" class="flex-center">
				<div id="text-image">
					<h2 class="titlemid">Bem vindo aos <?php if ($id == 'alta') {echo "Alta"; }elseif(){ }else{echo "Baixa";}?></h2>
				</div>
		</section>
	<section class="container">
	
		<div class="row row-cols-1 row-cols-md-3 g-4">
			<?php foreach ($results as $baixa):  ?>
		  <div class="col">
		    <div class="card h-100">
		      <img src="<?=$baixa['image']?>" class="card-img-top img-thumbnail" alt="...">
		      <div class="card-body">
		        <h5 class="card-title"><?=$baixa['nome']?></h5>
		        <p class="card-text lh-1"><?=$baixa['description']?></p>
		      </div>
		      <div class="card-footer">
		        <small class="text-muted">GPS <?=$baixa['link']?></small>
		      </div>
		    </div>
		  </div>
		  <?php endforeach; ?>
		</div>
	
	</section>

<?php include("footer.php") ?>