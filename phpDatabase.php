<!DOCTYPE html>
<html lang="en">
<head>
<?php
include_once("Backmysql.php");
?>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- arquivos CSS  -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/tooplate-style.css">
    <link rel="stylesheet" href="assets/css/general_style.css">
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
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
          
              <h2>Cadastre-se no site</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="container">
      <div class="py-5 text-center">
      <div class="text-center"><i class="fa fa-4x fa-user"></i></div>
        <h2></h2>
        <p class="lead">Preenxa todos os campos com dados validos.</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Pacotes disponíveis</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                
                <h6 class="my-0">Pacote básico</h6>
                <small class="text-muted"> 30 dias sem bonús</small>
              </div>
              <span class="text-muted">20.000 Kzs</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Pacote profisional</h6>
                <small class="text-muted">30 dias com chance de 10% em bonús</small>
              </div>
              <span class="text-muted">50.000 Kzs</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Pacote primium</h6>
                <small class="text-muted">60 dias com bonús</small>
              </div>
              <span class="text-muted">80.000 Kzs</span>
            </li>
           
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (KZs)</span>
              <strong>80.000 Kzs</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Escolher pacote</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Dados pessoais</h4>
        <form class="needs-validation" method="POST" action="phpDatabase.php"  enctype="multipart/form-data" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nome Completo</label>
                <input type="text" class="form-control" name="name" placeholder="" required>
                <div class="invalid-feedback">
                  Nome inválido.
                </div>
              </div>
              <div class=" mb-3">
                <label for="username">Nome de usuário</label>
                
                <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                   <input type="text" class="form-control" name="username" placeholder="@lukenny" required> 
                </div>
                <div class="invalid-feedback">
                    Nome de usuário  inválido.
                </div>
              </div>
              
            </div>
            <div class=" mb-3">
                <label for="username">Password</label>
                
                <div class="input-group">
                   <input type="password" class="form-control" name="password" required> 
                </div>
               
                <div class="invalid-feedback">
                    Password inválida
                </div>
              </div>
              <div class=" mb-3">
                <label for="username">Digite a password novamente</label>
                
                <div class="input-group">
                   <input type="password" class="form-control" name="password2" required> 
                </div>
                <div class="invalid-feedback">
                    Passwords diferentes
                </div>
              </div>
            
              <div class="input-group">
                  <input type="file" name="foto">
                </div>

            <div class="mb-3">
              <label for="username">Data De Nascimento</label>
                <input type="date" name="dataNasc" class="form-control" id="data" placeholder="Data De Nascimento" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Data inválida.
                </div>
              
            </div>
            
                <legend>Sexo</legend>
              <div class="col-md-6 mb-3">
                
                <label for="masc"> Masculino</label>
                <input type="radio" name="sexo" value="M" id="masc">

                <label for="fem"> Femenino</label>
                <input type="radio" name="sexo" value="F" id="fem">
                <div class="invalid-feedback">
                    Sexo
                </div>
                </div>
              
              
            

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Opcional)</span></label>
              <input type="email" class="form-control" name="email" placeholder="nome@exemplo.com">
              <div class="invalid-feedback">
                Por favor, forneça um email válido para poder receber as últimas actualizações.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Endereço</label>
              <input type="text" class="form-control" name="endereço" placeholder="34/28 Vila Kiaxe" required>
              <div class="invalid-feedback">
                por favor, forneça o seu indereço.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">endereço 2 <span class="text-muted">(Opcional)</span></label>
              <input type="text" class="form-control" id="endereço2" placeholder="Opcional">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">País</label>
                <select class="custom-select d-block w-100" name="pais" required>
                  <option value="">Escolha...</option>
                  <option>Angola</option>
                </select>
                <div class="invalid-feedback">
                  Escolha um país disponível.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">Província</label>
                <select class="custom-select d-block w-100" name="provincia" name="provincia" required>
                  <option value="">Escolha...</option>
                  <option>Luanda</option>
                </select>
                <div class="invalid-feedback">
                Escolha uma província disponível.
                </div>
              </div>
             
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Receber as actualizações a partir do email fornecido</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Salvar dados para uma próxima vez</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Pagamento</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Cartão de crédito</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Por referênçia</label>
              </div>
              
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">nome da conta</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Nome da conta</small>
                <div class="invalid-feedback">
                  forneça o nome da conta
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Número do Cartão de crédito</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  forneça o Número do cartão de crédito
                </div>
              </div>
            </div>
            
            <hr class="mb-4">
            <div class="form-group tm-form-element tm-form-element-2">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="cadastrar">Cadastar no site</button>
            
            </div>
            
          </form>
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
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>


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



</div>

</body>
</html>