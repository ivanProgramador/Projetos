<?php

 //linhas de requisição de recursos
  require_once '../vendor/autoload.php';

 //carregando as classes e criando objetos

  $route = new \App\Route;





 //linhas de exibição 

  echo"Isso está funcionando<br>";
  echo"<hr>";

  echo "<pre>";
  print_r($route->getUrl());
  echo "</pre>";







?>