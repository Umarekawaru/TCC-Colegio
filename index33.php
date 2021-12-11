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
<section id="carousel" class="ciano-b" >
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
<section class="ciano-b" >
  <div>
    <h2 class="text-center fs-1" style="margin-bottom: 30px;">Pontos da Cidade</h2>
  </div>
  <div class="container flex-center">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card h-100">
            <a href="cidade.php?cidade=baixa" title="">
            <img src="image/card-fixos/cidade-baixa.jpg" class="card-img-top" alt="cidade-alta">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center">Cidade Baixa</h5>
              <p class="card-text">A cidade baixa é a parte litorânea de Salvador, onde está localizada os principais pontos turísticos da cidade. Ela emana beleza, africanidade e recursos naturais.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <a href="cidade.php?cidade=alta" id="ima-hover">
            <img src="image/card-fixos/cidade-alta.jpg" class="card-img-top" alt="cidade-baixa">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center">Cidade Alta</h5>
              <p class="card-text">A cidade alta é parte mais moderna da cidade. Tem como ligação entre a cidade baixa o elevador Lacerda e tem alta relevância histórica para cidade. Representa a organização e pureza.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <a href="bairros.php?bairro=forte" title="">
            <img src="image/card-fixos/forte.jpg" class="card-img-top" alt="Aperte aqui para ir pro forte">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center">Fortes</h5>
              <p class="card-text">A cidade de Salvador tem como pontos turísticos os fortes, que atualmente representam a história dos antepassados e fundadores da cidade.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <a href="bairros.php?bairro=museo" title="">
            <img src="image/muse/7b38bd4806253bb1d275ab48bbe38588.jpg" class="card-img-top" alt="Aperte aqui para ir pro museo">
            </a><div class="card-body">
              <h5 class="card-title text-center">Museus</h5>
              <p class="card-text">Os museus de Salvador representam a cultura musical, artística, culinária e os costumes.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <section id="about" class="blue-b">
      <div class="container flex-center responsive-wrap responsive-ali justify-content-evenly">
        <!--<img id="about-img" src="image/sobre/architecture-3323275_640.jpg" alt="">-->
        <div class="about">
        <h1 class="titulo">Sobre nós</h1>
        <p class="descr" style="Font-weight: bold;">Alunos do Ceep-Isaías Alves, desenvolveram a proposta como Trabalho de Conclusão de Curso, com objetivo de promover acessibilidade cultural de forma inovadora, visto que o Brasil tem a necessidade de intervir na problemática.</p>    
        </div>
      </div>
    </section>
    <section id="info" class="ciano-b text-dark">
        <div class="container d-flex justify-content-center flex-wrap text-center flex-column">
          <h1>Dúvidas?</h1>
           <P>Entre em contato com a gente!</P>
           <p><a href="https://forms.gle/55NYDZx2zUGPEfDTA" class="link-dark button-red" title="formu-contato">Aperte Aqui</a></p>
         </div>  
    </section>

<?php include_once('footer.php') ?>