
<?php 
include('../conec/connect.php');
	$id = $_GET['id'];

	$st = $conn->prepare("SELECT id, nome, link, image, description,local FROM local WHERE id = :ID");

	$st->execute(array('ID' => $id));
	
	$resu = $st->fetchALL(PDO::FETCH_ASSOC);
	
?>

<?php include_once('header.php'); ?>

<?php include_once('navbar.php'); ?>
<main class="col-md-9 col-lg-10 p-4">
	<h1 id="main-title" class="text-center">Atualizar Museo ou Forte</h1>
	<div class="input-group justify-content-center">	
	<form action="../config/ilha/update-muse.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
		<?php foreach ($resu  as $muse):?>
		<input type="text" name="nome" class="input-group form-control" placeholder="<?=$muse["nome"]?>">
		<select class="form-select text-capitalize" aria-label="Default select example" name="local" id="local">
		  	<option selected value="<?=$muse["local"]?>"><?=$muse["local"]?></option>
		  	<option value="museo">Museo</option>
		  	<option value="forte">Forte</option>
		</select>
		<input type="text" name="link" class="input-group form-control" placeholder="Insira aqui o Novo Link do local via google maps"><br>
		<div class="input-group">
		  <input type="file" name="image" class="input-group form-control" id="inputGroupFile02">
		</div>
		<div class="input-group">
		  <span class="input-group-text">Descrição</span>
		  <textarea class="form-control" name="description" aria-label="Descrição do local"><?=$muse['description']?></textarea>
		</div>
		<button type="submit" value="ENVIAR"class="btn btn-primary px-3">Enviar</button>
		<img src="../<?=$muse["image"]?>" class="img-thumbnail rounded float-end" alt="Imagem Existente" width="200px">
		<input type="text" name="id" value="<?=$_GET['id']?>" placeholder="<?=$_GET['id']?>">
		<?php 	endforeach;	 ?>
		</form>
	</div>
	</main>
</main>

<?php include_once('footer.php'); ?>