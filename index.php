<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

require_once("configuracoes/conexao_bd.php");

if(isset($_GET["pg"])){
  $pg = $_GET["pg"];
}
else{
  $pg = "inicio";
}

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Padrão caracteres -->
    <meta charset="utf-8">
    <!-- Bootstrap Responsivo-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Titulo -->
    <title> Boteco dos "Els" </title>
    <!-- Icone proximo ao titulo -->
    <link rel="icon" href="img/icone.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- CSS na unha -->
    <link href="css/estilo.css" rel="stylesheet">
     <!-- Imporando fonte -->
    <link href="https://fonts.googleapis.com/css?family=Ultra" rel="stylesheet"> 
    <!-- JS -->
    <script src="js/validar.js"></script> 
  </head>


  <body class="bg-dark">
<!-- HEADER --> 
          <div class="row menu">
            <div class="col-2">
              <img class="img-fluid" src="img/homer.png" height="200" width="200"/>
            </div>
          
            <div class= "col-6"> 
              <h5 class="text-white-50"> Boteco do:
              <h1 class="text-center text-primary"> Rafael <br> & <br> Daniel </h1>
            </div>
            
            <div class = "col-4">
              <nav>
                  <ul class="nav nav-tabs">
                    <li class=" <?= ($pg == 'inicio')?'active':'' ?>">
                      <a class="nav-link <?= ($pg == 'inicio')?'active':'' ?>" href="./">Home</a>
                    </li>

                    <li class=" <?php 
                                  if($pg == 'cervejas'){
                                  echo 'active';}
                                ?>">

                      <a class="nav-link <?= ($pg == 'cervejas')?'active':'' ?>" href="?pg=cervejas&filtro=">Produtos</a>
                    </li>
                    
                    <li class=" <?php 
                                  if($pg == 'sobre'){
                                  echo 'active';}
                                ?>">

                      <a class="nav-link <?= ($pg == 'sobre')?'active':'' ?>" href="?pg=sobre">Sobre</a>
                    </li>

                    <li class=" <?php 
                                  if($pg == 'formulario'){
                                  echo 'active';}
                                ?>">

                      <a class="nav-link <?= ($pg == 'formulario')?'active':'' ?>" href="?pg=formulario">Contato</a>
                    </li>
                  </ul>   
              </nav>
            </div>
          </div>
     

<!-- CONTEUDO -->     
        <div class="container">
          <div class="row justify-content-md-center">
            <?php include("paginas/".$pg.".php"); ?>  
          </div>
        </div>
      
   
    
<!-- RODAPÉ --> 
      <div class="footer text-center">
        <footer class="rodape">
          <p class="text-primary">
            Projeto desenvolvido em &copy;2018 na UNINCOR<br>
            Alunos: Daniel de Paula & Rafael do Prado Ferreira <br>
            Professor: Alexandre Noberto.
            
          </p>
        </footer>
      </div>
    </div>
  </body>
</html>
