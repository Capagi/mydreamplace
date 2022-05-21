<!DOCTYPE html>
<html lang="en">
<head>
<?php
include_once("Backmysql.php");
include_once("conexao.php");


?>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- arquivos CSS  -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/tooplate-style.css">
    <link rel="stylesheet" href="general_style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

<link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

<link rel="stylesheet" href="assets/css/owl-carousel.css">

<link rel="stylesheet" href="assets/css/lightbox.css">
    <title>Document</title>
</head>
<body>
<div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Compre <em>Agora</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.php">imóveis</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="about.php">acerca de nós</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Fale conosco</a>
              </li>
              <li class="nav-item">
              <button type="button" class="btn btn-primary btn-lg fa fa-user" data-toggle="modal" data-target="#myModal">
              &nbsp; sign-up
              </button>
              </li>
              <li class="nav-item">
                <div class="userdata"></div>
                
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Melhor Oferta</h4>
            <h2>Novos imóveis a venda</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Negócios rápidos</h4>
            <h2>Consiga o melhor imóvel para si</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Deadline</h4>
            <h2>AGORA ou NUNCA</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Apartamentos Bonitos &amp; de qualidade <em>a bom</em> preço</h4>
                </div>
                <div class="col-md-4">
                  <a href="products.php" class="filled-button">Comprar agora</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--corpo-->
<?php
        $imovel= $_GET["id"];
        
        $sqlSelectQuery="SELECT * FROM imoveis WHERE id_imovel=$imovel";
        $operation=$conection->prepare($sqlSelectQuery);
        $operation->execute();
        $arrayImovel=$operation->fetch();
    ?>
<section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <div class="left-images">
                    <img name="img" src="imoveis/<?= $arrayImovel['foto'] ?>" alt=""  >
                    
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <h4><?= $arrayImovel['descImovel']?></h4>
                    <span class="price"><?= $arrayImovel['preco_imovel']?></span>
                    <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span><?= $arrayImovel['descImovel']?></span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i><p>Imovel Disponivel para <?= $arrayImovel['VA']?></p>
                    </div>
                    <div class="quantity-content">
                        <div class="left-content">
                            <h6>Negociar preço com proprietário</h6>
                        </div>
                        <div class="total">
                            
                            <div class="main-border-button" ><a href="#">Negociar</a></div>
                           
                        </div>
                    </div>
                    <div class="total">
                        <h4>Total: <?= $arrayImovel['preco_imovel'] ." Kzs"?></h4>
                        <div class="main-border-button"><button class="btn btn-primary " type="submit" ><?= $arrayImovel['VA']?></button></div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>



    




    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="/Imobiliária/imgp/Nova pasta/transferir.png" >
                        </div>
                        <ul>
                            <li><a href="#">Vila kiaxe, Luanda , Angola</a></li>
                            <li><a href="#">maurocapagi2015@gmail.com</a></li>
                            <li><a href="#">949-987-744</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Casas &amp; Terrenos</h4>
                    <ul>
                        <li><a href="#">Apartamentos t3</a></li>
                        <li><a href="#">Vivendas</a></li>
                        <li><a href="#">Duplex</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Menu</h4>
                    <ul>
                        <li><a href="#">Página Inicial</a></li>
                        <li><a href="#">Imoveis</a></li>
                        <li><a href="#">Sobre nós</a></li>
                        <li><a href="#">Contactos</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Ajuda &amp; informação</h4>
                    <ul>
                        <li><a href="#">ajuda</a></li>
                        <li><a href="#">####</a></li>
                        <li><a href="#">####</a></li>
                        <li><a href="#">####</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 Imobiliária, Ltd. Todos direitos reservados . 
                        
                        
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
    














    
</body>
</html>