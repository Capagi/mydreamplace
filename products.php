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

    <title>Imóveis</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/tooplate-style.css">
    <link rel="stylesheet" href="assets/css/general_style.css">
    

    

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="about.php"><h2>Sobre <em>nós</em></h2></a>
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
              <li class="nav-item active">
                <a class="nav-link" href="products.php">Imóveis</a>
              </li>
              
              <li class="nav-item ">
                <a class="nav-link" href="about.php">acerca de nós</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">fale conosco</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Actualizados</h4>
              <h2>Imóveis do site</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--<div class="banner header-text">
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
-->
    
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">Ver todos</li>
                  <li data-filter=".des">Apartamentos</li>
                  <li data-filter=".dev">Vivendas</li>
                  <li data-filter=".gra">Terrenos</li>
                  <li data-filter=".gra">Escritórios</li>
                  <li>
                  
                  <a href="AddImovel.php" class="filled-button" >Adicionar imóvel</a>
                 
                  </li>
              </ul>
            </div>
          </div>

  
            

    


          <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              
              <a href="products.php">Ver todos os imóveis <i class="fa fa-angle-right"></i></a>
              
            </div>
          </div>
       
          <?php
                $pag_actual=filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
                $pagina=(!empty($pag_actual)?$pag_actual:1);
                $qt_resultPg=6;
                $inicio=($qt_resultPg*$pagina)-$qt_resultPg;
                $sqlSelectQuery="SELECT * FROM imoveis ORDER BY id_imovel DESC LIMIT $inicio, $qt_resultPg";
                $operation=$conection->prepare($sqlSelectQuery);
                $operation->execute();
                while($arrayImovel=$operation->fetch()):
                   ?>
                      <div class="product-item">
                      <a  href="http://localhost/tcc/Imobili%C3%A1ria/imovel.php?id=<?= $arrayImovel["id_imovel"]?>" ><img src="imoveis/<?= $arrayImovel['foto'] ?>" alt=""  ></a>
                          <div class="down-content">
                              <a href="#"><h4><?= $arrayImovel['VA']?></h4></a>
                              <h6><?= $arrayImovel['preco_imovel']?></h6>
                              <p><?= $arrayImovel['descImovel']?></p>
                              <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                              </ul>
                            <span>Vista (12)</span>
                          </div>
                      </div>
          <?php
          $imoveis="";
                endwhile;
                $resultPg="SELECT COUNT(id_imovel) AS num_imovel FROM imoveis ";
                $numpag=$conection->prepare($resultPg);
                $numpag->execute();
                $linhaPg=$numpag->fetch(PDO::FETCH_ASSOC);
                $qt_pag= ceil($linhaPg['num_imovel']/ $qt_resultPg);
                $maxPgLink=2;
                  $imoveis.='<div class="col-md-12"><ul class="pages">';
                  for($pagAnt=$pagina-$maxPgLink; $pagAnt<=$pagina-1; $pagAnt++):
                    if($pagAnt>=1):
                      $imoveis.="<li><a href='http://localhost/tcc/Imobili%C3%A1ria/products.php?pagina=$pagAnt' >$pagAnt</a></li>";
                    else:
                      
                    endif;
                   
                  endfor; 
                  
                  $imoveis.="<li class='active'><a href='#' >$pagina</a></li>";
                  for($pag_seg=$pagina+1; $pag_seg<=$pagina+$maxPgLink; $pag_seg++):
                    if($pag_seg<= $qt_pag):
                      $imoveis.="<li><a href='http://localhost/tcc/Imobili%C3%A1ria/products.php?pagina=$pag_seg' >$pag_seg</a></li>";
                      
                    else:  
                    endif;
                  endfor;
                  $imoveis.="<li><a href='#'><i class='fa fa-angle-double-right'></i></a></li>";
                  $imoveis.='</ul></div>';
               echo $imoveis;
                    ?>              



        </div>
      </div>
    </div>
         
        </div>
      </div>
    </div>                   

    
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
