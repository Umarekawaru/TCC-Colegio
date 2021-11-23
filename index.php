<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Salvador</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="image.css">
  <link rel="stylesheet" type="text/css" href="css/responsivr.css">
	<?php include_once("css/header.php") ?>
</head>
<body>
	<?php include_once("navbar.php") ?>
	<!--Slide-->
<section id="carousel" class="green-b">
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators ">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/image-slide/slide01.jpg" class="d-block w-60  " alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/image-slide/slide02.jpg" class="d-block w-60" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/image-slide/slide03.jpeg" class="d-block w-60" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
<section id="about" class="blue-b">
			<div class="container flex-center responsive-wrap responsive-ali justify-content-evenly">
				<img id="about-img" src="image/sobre/architecture-3323275_640.jpg" alt="">
				<div class="about">
				<h1 class="titulo">Sobre a gente.</h1>
				<p class="descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>		
				</div>
			</div>
</section>
<section class="green-b" >
  <div class="container flex-center">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <a href="cidade.php?cidade=baixa" title="">
            <img src="image/card-fixos/cidade-baixa.jpg" class="card-img-top" alt="cidade-alta">
            </a>
            <div class="card-body green-b">
              <h5 class="card-title text-center">Cidade Baixa</h5>
              <p class="card-text green-b">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <a href="cidade.php?cidade=alta" id="ima-hover">
            <img src="image/card-fixos/cidade-alta.jpg" class="card-img-top" alt="cidade-baixa">
            </a>
            <div class="card-body green-b">
              <h5 class="card-title text-center">Cidade Alta</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <a href="bairros.php?bairro=forte" title="">
            <img src="image/card-fixos/forte.jpg" class="card-img-top" alt="Aperte aqui para ir pro forte">
            </a>
            <div class="card-body green-b">
              <h5 class="card-title text-center">Forte</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <a href="bairros.php?bairro=museo" title="">
            <img src="image/card-fixos/ilha.jpg" class="card-img-top" alt="Aperte aqui para ir pro museo">
            </a><div class="card-body green-b">
              <h5 class="card-title text-center">Museus</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
<hr>
<section id="info" class="green-b text-light">
    <div class="container d-flex justify-content-center flex-wrap text-center flex-column">
      <h1>Duvidas?</h1>
       <P>Entre em contato com agente!</P>
       <p>INDISPONIVEL</p>
     </div>  
</section>
    <hr>
<?php include_once('footer.php') ?>