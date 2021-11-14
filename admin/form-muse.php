	<?php include_once('header.php'); ?>

	<?php include_once('navbar.php'); ?>
	<main class="col-md-9 col-lg-10 p-4">
		<h1 id="main-title" class="text-center">Cadastrar Ilha/Museu/Forte</h1>
		<div class="input-group justify-content-center">
		<form action="../config/ilha/create-muse.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
			<input type="text" name="nome" class="input-group form-control" placeholder="Nome do Local">
			<select class="form-select" aria-label="Default select example" name="local" id="local">
			  	<option selected>Selecione o Tipo</option>
			  	<option value="museo">Museo</option>
			  	<option value="forte">Forte</option>
			</select>
			<input type="text" name="link" class="input-group form-control" placeholder="Insira aqui o link do local via google maps"><br>
			<div class="input-group">	
			  <input type="file" name="image" class="input-group form-control" id="inputGroupFile02"><span>Recomendado recorta a imagem para o formato 416x300</span>
			</div>
			<div class="input-group">
			  <span class="input-group-text">Descrição</span>
			  <textarea class="form-control" name="description" maxlength="400" aria-label="Descrição do local"></textarea>
			</div>
			<button type="submit" value="ENVIAR"class="btn btn-primary px-3">Enviar</button>
		</form>
	</div>
	</main>
	<?php include_once('footer.php'); ?>