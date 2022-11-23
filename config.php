<?php

   $dbHost = 'localhost';
   $dbUsername = 'root';
   $dbPassword = '';
   $dbName = 'loja';

   $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

   if($conexao->connect_errno)
   {
     echo "error";
   }
   else
{
      echo "Conexão efetuado com sucesso"
}

?>