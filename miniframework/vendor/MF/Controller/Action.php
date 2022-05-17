<?php

     namespace MF\Controller;

     abstract class Action {


     	  protected $view;

          public function __construct(){

          	 //stdClass() é uma classe dinamica do php que da´pra adicionar atributos

          	  $this->view = new \stdClass();
          }


           //rederizando as views de forma dinamica

          protected function render($view){

          	     $classeAtual = get_class($this);

          	     $classeAtual = str_replace('App\\Controllers\\','',$classeAtual);

          	     $classeAtual = strtolower(str_replace('Controller','',$classeAtual));

           	  	 require_once '../App/Views/'.$classeAtual.'/'.$view.'.phtml';

          }


    }



?>