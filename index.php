<!DOCTYPE html>
<html>
  <head>
      <title>Modelo de Site com Produtos</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/bootstrap.css">
      <script type="text/javascript" src="js/bootstrap.js"></script>
  </head>
  <body>
    <div class="container">
      <!-- area do menu do site -->
      <div class="row">
          <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a href="?pg=home" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="?pg=produtos" class="nav-link">Produtos</a>
                  </li>
                  <li class="nav-item">
                    <a href="?pg=sobre" class="nav-link">Sobre</a>
                  </li>
                </ul>
            </nav>
          </div>
      </div>
      <!-- area de publicidade -->
      <div class="row">
          <div class="col-md-12">
              <div class="jumbotron">
                <h2>Modelo de Site com Produtos</h2>
                <h3>Template para fazer conexão com banco de dados e listar produtos</h3>
                <p>
                  Projeto exemplo
                </p>
                <p>
                  <a class="btn btn-primary btn-large">Saiba mais</a>
                </p>
              </div>
          </div>
      </div>
      <!-- area de conteudo -->
      <div class="row">
          <div class="col-md-12">
              <!-- Conteúdo -->
              <?php
                @$pg = $_GET["pg"];
                if(isset($pg)&&!empty($pg)) {
                  include $pg.".php";
                } else {
                  include 'home.php';
                }
              ?>
          </div>
      </div>
      <!-- area de rodape -->
      <div class="row">
          <div class="col-md-12">
              <address>
                  <strong>Academia Jedi's</strong><br>
                  Estrada da Madeira, 3000, Barragem<br>
                  Rio do Sul / Santa Catarina<br>
                  Contato: (47) 3531-2400
              </address>
          </div>
      </div>
    </div>
  </body>
</html>
