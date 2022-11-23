<?php
    session_start();
   //print_r($_REQUEST);
   if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']));
   {
    include_once('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //print_r('email: ' . $email);
    //print_r('<br>');
    //print_r('senha: ' . $senha);

    $sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";

    $resultado = $conn->query($sql);

    //print_r($sql);
    //print_r($resultado);
    if(mysqli_num_rows($resultado) == 1)
    {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: indexadm.php');
    }
    else
    {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: index.php');
    }
    if(mysqli_num_rows($resultado) == 0)
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

   } 