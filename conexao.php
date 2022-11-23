<?php
$conn = "";
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "loja";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha,$dbname);

//if (mysqli_connect_errno()){

    //echo "Erro ao conectar com a base de dados: ".
    //mysqli_connect_error();
    
    //}else{
    
    //echo "Conexão Aberta";
    
    //}
?>