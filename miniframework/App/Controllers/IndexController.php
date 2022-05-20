<?php

  //chamada de classes ou recursos necessarios
  
   namespace App\Controllers;
   use MF\Controller\Action;
   use App\Connection;
   use App\Models\Produto;

  



    Class IndexController extends Action {

        

         
          public function index(){

          	// é possivel inserir uma varivel dentro do escopo da função 
          	// que esta chamando a view e exibir o valor dela simulando a camada de modelo
          	// no caso eu coloquei um array e vou usar um foreach pra exbir o conteudo lá  

           // $this->view->dados = array('sofa','cadeira','cama');

            // instanciando a classe conexao da pra chamar diretemente poruqe ja tem o namespace aqui

            $conn = Connection::getDb();

            // instanciando o modelo

            $produto =  new  Produto($conn);

            //executando um metodo para recuperar os produtos

             $produtos = $produto->getProdutos();

            //colocando a lista de produtos na view 

             $this->view->dados = $produtos;

            

          	$this->render('index','layout1');

          }

          public function sobreNos(){

           //$this->view->dados = array('notebook','mouse','teclado');




           $this->render('sobreNos','layout2');
          	

          }

         

   }


?>