<?php
  require_once("../verificarLogin.php");
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link href="../bootstrap-4.4.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
 </head>
  <body>
 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">NOME DO SISTEMA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav mr-auto">

              <li class="nav-item active">
                <a class="nav-link" href="../index.php">Home <span class="sr-only">(Página atual)</span></a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Usuário</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="formUsuario.php">Cadastro</a>
                  <a class="dropdown-item" href="relatorioTelaUsuario.php">Relatório Geral</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Produto</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="formProduto.php">Cadastro</a>
                  <a class="dropdown-item" href="relatorioTelaProduto.php">Relatório Geral</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Compras</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="formCompra.php">Realizar Compra</a>
                  <a class="dropdown-item" href="relatorioCompra.php">Relatório Geral</a>
                </div>
              </li>

              
              <li class="nav-item">
                <a class="nav-link" href="../deslogar.php">Sair</a>
              </li>
                  
          </ul>
          <?php
          if($_SESSION["id"]){
              echo "<a href=alterarPerfil.php?id=$_SESSION[id]>";
          ?>
              <button type="submit" class="btn btn-primary">Perfil</button></a>";
<?php
          }
        ?>

        <!--<form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search">
        </form>-->
        </div>
      </nav>  

<!-- <div class="container-fluid"> utilizado para largura total-->
    <div class="container">
      <!-- Conteúdo aqui -->
      <h1>Formulário de Cadastro Produto</h1>
      <div class="row">
        <div class="col">
          <?php
          if ( !isset( $_GET ) || empty( $_GET ) ) {
        	   //$erro = 'Nada foi postado.';
          }else{
            if($_GET["mensagem"]=="sucesso"){
              ?>
              <div class="alert alert-success" role="alert">
                Produto Cadastrado com sucesso!!!
              </div>
              <?php
            }else {
              ?>
              <div class="alert alert-danger" role="alert">
                Ocorreu um erro ao gravar o Produto!!!
              </div>
              <?php
            }
          }
          ?>
        </div>
      </div>
      <form action="../controller/cadProduto.php" method="post">
        
      <div class="row">
          <div class="col-4">
            <label for="nomeProduto">Nome do produto:</label>
            <input type="text" id="nomeProduto" name="nomeProduto" class="form-control" placeholder="Nome do produto">
          </div>
          <div class="col-4">
            <label for="qtd">Quantidade:</label>
            <input type="number" id="qtd" name="qtd" class="form-control" placeholder="Quantidade">
          </div>
        </div>
        <div class="row">
          <div class="col">
            &nbsp;
          </div>
        </div>
        
        <div class="row">
          <div class="col-3">
            <label for="precoCompra">Preço de compra (ex: 21.00):</label>
            <input type="floatval" id="precoCompra" name="precoCompra" class="form-control" placeholder="Preço de compra">
          </div>
          <div class="col-3">
            <label for="precoVenda">Preço de venda (ex: 10.50):</label>
            <input type="floatval" id="precoVenda" name="precoVenda" class="form-control" placeholder="Preço de venda">
          </div>
        </div>

        <div class="row">
          <div class="col">
            &nbsp;
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-primary">Limpar</button>
          </div>
        </div>
      </form>
    </div>
    
  <footer class="bd-footer text-muted">
  <a class="navbar-brand" href="#"><br>Usuário Autenticado: <?=$_SESSION["nomeUsuario"];?>
    <br>E-mail: <?=$_SESSION["emailUsuario"];?>
  </a>
    <p>&copy; Company 2017-2019</p>
  </footer>
  
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
          <script>window.jQuery || document.write('<script src=" /site/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="../bootstrap-4.4.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

    <!--<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
 </body>
</html>