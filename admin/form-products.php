	<?php include_once('header.php'); ?>

	<?php include_once('navbar.php'); ?>
	<main class="col-md-9 col-lg-10 p-4">
		<h1 id="main-title" class="text-center">Cadastrar Produtos</h1>
		<div class="input-group justify-content-center">
		<form action="../config/create-cast.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
			<input type="text" name="nome" class="input-group form-control" placeholder="Título">
			<select class="form-select" aria-label="Default select example" name="category" id="category">
			  	<option selected>Tipo de comida</option>
			  	<option value="almoco">Almoços</option>
			  	<option value="bolos">Bolos</option>
			  	<option value="especial">Especias</option>
			</select>
			<div class="input-group">
			  <input type="file" name="image" class="input-group form-control" id="inputGroupFile02">
			</div>
			<input type="text" name="description" class="input-group form-control" placeholder="Descrição">
			<button type="submit" value="ENVIAR"class="btn btn-primary mt-3">Enviar</button>
		</form>
	</div>
	</main>
	<?php include_once('footer.php'); ?>