<?php 
  // esse arquivo vai ser reponsavel pela administração das rotas 


  //importação de recursos
  namespace App;
  use MF\Init\Bootstrap;




  class Route extends Bootstrap{
 
  
  	protected function initRoutes(){

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

          $this->setRoutes($routes);


  	  }


  }



  ?>
