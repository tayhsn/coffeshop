<<<<<<< HEAD
<?php 

  require_once 'model/venda.php';
  $objVenda = new Venda();
?>

=======
<?php
  @session_start();
  require_once 'model/cliente.php';
  $objcli = new cliente();
  if(@$_SESSION['validar'] == true){
    $objcli  -> redirect('cliente.php');
  }

?>


>>>>>>> 214f381567d4fe15aa0b4b7421c98463df193c82
<!DOCTYPE html>
<html lang="en">
<head>
       <!--RESPONSIVE-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
      <!-- BOOTSTRAP 5.0 -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
      <!--BOOTSTRAP 4.0-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <!--FAVICON FONT TITLE-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/coffe.png" type="image/x-icon">
    
    <title> <BR> CAFÉ ZIN</title>
</head>
<body>
      <!-- NAVEGAÇÃO -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
        <a class="navbar-brand" href="#home"><img src="images/logos/header.gif" class="logoHeader"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link " href="#home">Página Inicial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sobre">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contato">Contatos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="" data-toggle="modal" data-target="#myModalPROD">Nossas Criações</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="" data-toggle="modal" data-target="#myModalADM">ADM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="" data-toggle="modal" data-target="#myModalLogin">Login</a>
            </li>
          </ul>
        </div>
      </nav>

<!-- The Login Modal -->
<div class="modal fade" id="myModalLogin">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Login</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <form action="control/ctr-cliente.php" method="POST">
                <input type="hidden" name="validar">
                <div class="d-flex flex-column p-2 bd-highlight justify-content-around align-items-center" >
                    <div>
                        <img src="images/logos/logotipo.png" alt="logo Cafézin" class="logocli">
                    </div> <br>
                    <div class="form-floating mb-3 d-flex">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Login" name="txtLogin">
                        <label for="floatingInput">Login</label>
                    </div>
                    <div class="form-floating d-flex">
                      <input type="password" class="form-control" id="floatingPassword" placeholder="Senha" name="txtSenha">
                      <label for="floatingPassword">Senha</label>
                    </div> <br>
                    <button type="submit" class="btn btn-dark">Enviar</button>
                </div>
              </form>
              <button class="btn btn-dark" class="close" data-dismiss="modal" class="nav-link" href="" data-toggle="modal" data-target="#myModalCreat">Criar conta</button>
            </div>
          </div>
        </div>
      </div>
      
             <!-- The Criar Conta Modal -->
             <div class="modal" id="myModalCreat">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Criar Conta</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <form action="control/ctr-cliente.php" method="POST">
                    <input type="hidden" name="insert">
                    <div class="form-group">
                      <label for="">Nome:</label>
                      <input type="text" class="form-control" name="txtNome" required>
                    </div>
                    <div class="form-group">
                      <label for="">Idade:</label>
                      <input type="text" class="form-control" name="txtidade" required>
                    </div>
                    <div class="form-group">
                      <label for="">Sexo:</label>
                      <input type="text" class="form-control" name="sexo" required>
                    </div>
                    <div class="form-group">
                      <label for="">dataNascimento:</label>
                      <input type="text" class="form-control" name="txtdataNascimento" required>
                    </div>
                    <div class="form-group">
                      <label for="">CPF:</label>
                      <input type="text" class="form-control" name="txtCPF" required>
                    </div>
                    <div class="form-group">
                      <label for="">Login:</label>
                      <input type="text" class="form-control" name="txtLogin" required>
                    </div>
                    <div class="form-group">
                      <label for="">Senha:</label>
                      <input type="password" class="form-control" name="txtSenha" required>
                    </div>
                    <button type="submit" class="btn btn-success">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- The ADM Modal -->
      <div class="modal fade" id="myModalADM">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">ACESSO ADMINISTRATIVO</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <form action="control/ctr-funcionario.php" method="POST">
                <input type="hidden" name="validate">
                <div class="d-flex flex-column p-2 bd-highlight justify-content-around align-items-center" >
                    <div>
                        <img src="images/logos/logotipo.png" alt="logo Cafézin" class="logoADM">
                    </div> <br>
                    <div class="form-floating mb-3 d-flex">
                        <input type="text" class="form-control" id="floatingInput" placeholder="login" name="txtlogin">
                        <label for="floatingInput">Login</label>
                    </div>
                    <div class="form-floating d-flex">
                      <input type="password" class="form-control" id="floatingPassword" placeholder="senha" name="txtsenha">
                      <label for="floatingPassword">Senha</label>
                    </div> <br>
                    <button type="submit" class="btn btn-dark">Enviar</button>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>

            <!-- The PRODUCTS Modal -->
      <div class="modal" id="myModalPROD">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">CONHEÇA NOSSOS CAFÉS</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <forms action="control/ctr-venda.php" method="POST">
                    <input type="hidden" name="insert">
                    <div class="bebidas cafe-preto">
                        <img src="./images/localpic/cafe-preto.jpg" alt="Café Preto">
                      <div class="infos">
                          <input type="hidden" name="txtID">
                          <strong>Cafézin Preto</strong>
                          <select class="form-select">
                            <option>Tamanho</option>
                            <option name="txt200">200ml</option>
                            <option name="txt300">300ml</option>
                            <option name="txt500">500ml</option>
                          </select>
                          <div>
                             <input class="qtd" type="number" class="form-control" placeholder="Quantidade" name="txtQtd" required>
                          </div>
                          <button id="submit" class="btn btn-dark"
                                  
                                  >Escolher</button>
                      </div>
                    </div>
                    <div class="bebidas cafe-expresso">
                       <img src="./images/localpic/cafe-expresso.jpg" alt="Café Preto">
                      <div class="infos">
                          <input type="hidden" name="txtID">
                          <strong>Cafézin Expresso</strong>
                          <select class="form-select">
                            <option>Tamanho</option>
                            <option value="P">200ml</option>
                            <option value="M">300ml</option>
                            <option value="G">500ml</option>
                          </select>
                          <div>
                             <input class="qtd" type="number" class="form-control" placeholder="Quantidade" name="txtQtd" required>
                          </div>
                          <button id="submit" class="btn btn-dark">Escolher</button>
                      </div>
                    </div>
                    <div class="bebidas cappucino">
                          <img src="./images/localpic/cappucino.jpg" alt="Café Preto">
                        <div class="infos">
                            <input type="hidden" name="txtID">
                            <strong>Cafézin Gourmet</strong>
                            <select class="form-select">
                              <option>Tamanho</option>
                              <option value="P">200ml</option>
                              <option value="M">300ml</option>
                              <option value="G">500ml</option>
                            </select>
                            <div>
                             <input class="qtd" type="number" class="form-control" placeholder="Quantidade" name="txtQtd" required>
                            </div>
                            <button id="submit" class="btn btn-dark">Escolher</button>
                        </div>
                    </div>
              <div>
                <button id="submit" class="btn btn-success" 
                        data-toggle="modal" data-target="#myModalCLIENTE" data-dismiss="modal"
                        
                        > FINALIZAR PEDIDO </button>
              </div>

            </forms>
          </div>

          </div>
        </div>
      </div>

      <!-- The CLIENTE Modal -->
      <div class="modal fade" id="myModalCLIENTE">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Informe seus dados</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <form action="control/ctr-venda.php" method="POST">
                <input type="hidden" name="cliente">
                <div class="d-flex flex-column p-2 bd-highlight justify-content-around align-items-center" >
                    <div class="form-floating mb-3 d-flex">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Seu Nome" name="txtNome">
                        <label for="floatingInput">NOME</label>
                    </div>
                    <div class="form-floating d-flex">
                      <input type="password" class="form-control" id="floatingPassword" placeholder="Senha" name="txtCPF">
                      <label for="floatingPassword">CPF</label>
                    </div> <br>
                    <button type="submit" class="btn btn-success"
                    data-toggle="modal" data-target="#myModalPEDIDO" data-dismiss="modal"
                    >FINALIZAR</button>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
        
       
       <!-- The PEDIDO Modal -->
       <div class="modal" id="myModalPEDIDO">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header bg-dark">
              <h4 class="modal-title" style="color:white;">SEU PEDIDO:</h4>
              <button style="color:white;" type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <form action="control/ctr-venda.php" method="POST">
                    <input type="hidden" name="showTotal">
                    <div class="form-group">
                      <label for="">Valor total a pagar:</label>
                      <input type="text" class="form-control" name="txtTotal" id="recebe-total" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Código para retirada:</label>
                      <input type="text" class="form-control" name="txtID" id="recebe-id" readonly>
                    </div>
                </form>
            </div>

          </div>
        </div>
      </div>
      
      <!-- IMAGENS MAIN -->
     <main id="home">
      <img src="images/localpic/photo-1.jpg" alt="Welcome">
      <img src="images/localpic/photo-2.jpg" alt="Have a Break">
      <img src="images/localpic/photo-3.jpg" alt="Preços dos produtos">
      <img src="images/localpic/photo-4.jpg" alt="Coffe">
      <img src="images/localpic/photo-5.jpg" alt="Mapa Mundi">
      <img src="images/localpic/photo-6.jpg" alt="Love is Action">
     </main>

      <!-- SECTION SOBRE -->
     <section>
      <div class="d-flex pag-inicial" id="sobre">
        <div class="row flex-wrap-reverse">
        <div class="col-sm-6 lead">
              CaféZin™ está presente em 27 países em todos os continentes. <br> <br>
              Com a primeira loja inaugurada em 1970, por Edvan Carvalho & Tayanne Novais, dois amigos visionários que tinham a missão de unir pessoas. <br><br>
              Com 50 anos no mercado Nacional & 42 anos Internacional, seguimos nos reinventando e inovando através de propostas baseadas no bem-estar das pessoas e do planeta. <br>
              Orgulhosamente, todas as nossas franquias exercem políticas de compensação de resíduos e logística reversa para reciclagem de materias. <br> <br>
              Em 2021 alcançamos a marca de 75% de franquias que disponibilizam gratuitamente refeições para a comunidade vulnerável. Nossa meta é até 2024 atingir 100%. <br> <br>
              Somos feitos para todos. <br> <b>Feitos por vocês.</b>
        </div>
        <div class="col-sm-6">
          <img src="images/co-worker.png" alt="trabalho em dupla" >
        </div>
      </div>
      </div>
     </section>

      <!-- RODAPÉ -->
     <footer>
      <div class="d-flex flex-row p-2 bd-highlight justify-content-around align-items-center flex-wrap" id="contato">
          <div class="p-2 bd-highlight">
            <h6>REDES SOCIAIS</h6>
            <a href="/"><img src="images/instagram.png" alt="Instagram"> Instagram</a><br>
            <a href="/"><img src="images/facebook.png" alt="Facebook"> Facebook</a><br>
            <a href="/"><img src="images/youtube.png" alt="Youtube"> Youtube</a>
          </div> 

          <div class="p-2 bd-highlight">
              <img src="images/logos/footer.png" id="logo"/>
              <h6>
                Todos os Direitos Fictícios. <br>
                Programação WEB 2021.1
              </h6>
          </div>

          <div class="p-2 bd-highlight">
            <h6>FALE COM A GENTE</h6>
            <a href="/"> <img src="images/whatsapp.png" alt="contato whatsapp"> Clique aqui e envie um whatsapp</a> <br> <br>
            <a href="/"> <img src="images/email.png" alt="contato e-mail">Clique aqui e envie um e-mail</a>
          </div>
      </div>
     </footer>

   

    <script>
      $('#myModalPEDIDO').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var recebeID = button.data('id');
        var recebeTotal = button.data('total');
      

        var modal = $(this);
        modal.find('#recebe-id').val(recebeID);
        modal.find('#recebe-total').val(recebeTotal);

        $("#myModalPROD").modal('hide');
      })
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>