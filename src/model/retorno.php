<?php


 $nome = $_REQUEST['nome'];
 $animal =$_REQUEST['animal'];


 if(empty($nome)){
     $dados = array(
         "tipo" => 'error',
         "mensagem" => 'Existem campos obrigatorios a serem preenchidos'
     )else{
        switch($animal){
            case '1': $dados = array(
                "tipo" => 'cachorro.jpg',
                "mensagem" -> 'Olá '. $nome. ' , sabemos que seu animal preferido e o cachorro'
            );
            break;
            case '2': $dados = array(
               "tipo" => 'gato.jpg',
               "mensagem" -> 'Olá '. $nome. ' , sabemos que seu animal preferido e o gato'
           );
           break;
           case '3': $dados = array(
               "tipo" => 'peixe.jpg',
               "mensagem" -> 'Olá '. $nome. ' , sabemos que seu animal preferido e o peixe'
           );
           break;  
     }

     echo json_encode($dados);


