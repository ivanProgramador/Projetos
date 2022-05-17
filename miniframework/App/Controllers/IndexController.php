<?php
  
   namespace App\Controllers;
   use MF\Controller\Action;

  



    Class IndexController extends Action {

        

         
          public function index(){

          	// é possivel inserir uma varivel dentro do escopo da função 
          	// que esta chamando a view e exibir o valor dela simulando a camada de modelo
          	// no caso eu coloquei um array e vou usar um foreach pra exbir o conteudo lá  

            $this->view->dados = array('sofa','cadeira','cama');

          	$this->render('index','layout1');

          }

          public function sobreNos(){

           $this->view->dados = array('notebook','mouse','teclado');

           $this->render('sobreNos','layout2');
          	

          }

         

   }


?>