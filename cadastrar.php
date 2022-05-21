<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Imobiliária</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        
        <!-- Spinner End -->


        <!-- Sign In Start -->
        
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-8">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>MyDreamPlace</h3>
                            </a>
                            <h3>cadastrar</h3>
                        </div>
                        
                <form class="needs-validation" method="POST" action="phpDatabase.php"  enctype="multipart/form-data" novalidate>
            <div class="row">
              <div class="form-floating mb-3 col-md-6 mb-3">
                <label for="firstName">Nome Completo</label>
                <input type="text" class="form-control" name="name" placeholder="" required>
                <div class="invalid-feedback">
                  Nome inválido.
                </div>
              </div>
              <div class="form-floating  col-md-4 ">
                <label for="username">Nome de usuário</label>
                
                <div class="input-group ">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div class=" col-md-6">
                   <input type="text" class="form-control" name="username" placeholder="@lukenny" required> 
                </div>
                <div class="invalid-feedback">
                    Nome de usuário  inválido.
                </div>
              </div>
              
            </div>
            <div class=" mb-3">
                <label for="username">Password</label>
                
                <div class=" col-md-4">
                   <input type="password" class="form-control" name="password" required> 
                </div>
               
                <div class="invalid-feedback">
                    Password inválida
                </div>
              </div>
              <div class=" mb-3">
                <label for="username">Digite a password novamente</label>
                
                <div class="col-md-4">
                   <input type="password" class="form-control" name="password2" required> 
                </div>
                <div class="invalid-feedback">
                    Passwords diferentes
                </div>
              </div>
            
              <div class="input-group">
                  <input type="file" name="foto">
                </div>

            <div class="col-md-4">
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
              <label for="email">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" name="email" placeholder="nome@exemplo.com">
              <div class="invalid-feedback">
                Por favor, forneça um email válido para poder receber as últimas actualizações.
              </div>
            </div>

            <div class="col-md-4">
              <label for="address">Endereço</label>
              <input type="text" class="form-control" name="endereço" placeholder="34/28 Vila Kiaxe" required>
              <div class="invalid-feedback">
                por favor, forneça o seu indereço.
              </div>
            </div>

 

            <div class="row">
              <div class="col-md-4">
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
            <button type="submit" name="cadastrar" class="btn btn-primary py-3 w-100 mb-4">cadastrar</button>
            
          </form>
                      
                        
                    
                        <p class="text-center mb-0">Já tem uma conta? <a href="signin.php">iniciar Sessão</a></p>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>