<?php
  // esse arquivo vai ser reponsavel pela administração das rotas 

  namespace App;

  class Route{

  	 public function initRoutes(){

  	 	$routes['home'] = array(
  	 		'route' => '/' ,
  	 		'controller' => 'indexController',
  	 		'action' => 'index'
  	 	);
  	 	

  	 	$routes['sobre_nos'] = array(
  	 		'route' => '/sobre_nos',
  	 		'controller' => 'indexController',
  	 		'action' => 'sobreNos'
  	 	);


  	  }
     





     //esse metodo captura as iunformações da url solicitada pelo cliente
     public function getUrl(){

     	return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH); 
     }

  }

?>