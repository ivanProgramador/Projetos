<?php

  //chamada de classes ou recursos necessarios
  
   namespace App\Controllers;
   use MF\Controller\Action;
   use App\Models\Produto;
   use App\Models\Info;
   use MF\Model\Container;

  



    Class IndexController extends Action {

        

         
          public function index(){

              
            //usando o metodo container que espera o modelo como parametro 

            $produto = Container:: getModel('Produto');

           

            //executando um metodo para recuperar os produtos

             $produtos = $produto->getProdutos();

            //colocando a lista de produtos na view 

             $this->view->dados = $produtos;

            

          	$this->render('index','layout1');

          }

          public function sobreNos(){

           //$this->view->dados = array('notebook','mouse','teclado');


           $info = Container:: getModel('Info');

            $informacoes = $info->getInfo();

            $this->view->dados = $informacoes;




           $this->render('sobreNos','layout2');
          	

          }

         

   }


?>