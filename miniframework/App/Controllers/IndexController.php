<?php
  
   namespace App\Controllers;

   //Embora a exbição aconteça no index da pasta public 
   // as views requisitadas tem que ser na pasta views 
   //porque lá na pasta public o autoload ja puxa tudo
   //então esses requires tem que ser feitos dentro da propria aplicação



    Class IndexController{

          private $view;

          public function __construct(){

          	 //stdClass() é uma classe dinamica do php que da´pra adicionar atributos

          	  $this->view = new \stdClass();
          }

         
          public function index(){

          	// é possivel inserir uma varivel dentro do escopo da função 
          	// que esta chamando a view e exibir o valor dela simulando a camada de modelo
          	// no caso eu coloquei um array e vou usar um foreach pra exbir o conteudo lá  

            $this->view->dados = array('sofa','cadeira','cama');

          	$this->render('index');

          }

          public function sobreNos(){

           $this->view->dados = array('notebook','mouse','teclado');

           $this->render('sobreNos');
          	

          }

          //rederizando as views de forma dinamica

          public function render($view){

          	     $classeAtual = get_class($this);

          	     $classeAtual = str_replace('App\\Controllers\\','',$classeAtual);

          	     $classeAtual = strtolower(str_replace('Controller','',$classeAtual));

           	  	 require_once '../App/Views/'.$classeAtual.'/'.$view.'.phtml';

          }

   }


?>