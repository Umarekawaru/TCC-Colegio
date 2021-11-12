	
	<?php include_once('header.php'); ?>

	<?php include_once('navbar.php'); ?>

<?php
$stmt = $conn->prepare("SELECT * FROM cidade");
$stmt->execute();

$re = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
	<!-- <editar postagens> -->
		<main class="col-md-9 col-lg-10">
			<h1 id="main-title">Cidade</h1>
			<table class="table" id="contacts-table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nome</th>
							<th scope="col">Local</th>
							<th scope="col">Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($re as $post): ?>
							<tr>
							  <td scope="row"><?=$post["id"]?></td>
							  <td scope="row" class="text-capitalize"><?=$post["nome"]?></td>
							  <td scope="row" class="text-capitalize"><?=$post['local']?></td>
							  <td scope="action">
							  	<a href="cidade-update.php?id=<?=$post['id']?>" title="">Editar</a>
							  	<a href="../config/cidades/delete-cidadealta.php?id=<?=$post['id']?>">Excluir</a>
							  </td>
							</tr>
					   	<?php endforeach;?>
					</tbody>
			</table>
		</main>
		<!-- </editar postagens> -->
	<?php // include_once('footer.php?'); ?>