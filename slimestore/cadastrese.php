<?php

include_once('conexao.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$endereço = filter_input(INPUT_POST, 'Endereço', FILTER_SANITIZE_STRING);
$datanascimento = filter_input(INPUT_POST, 'Datadenascimento', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "Telefone: $telefone <br>";
//echo "Email: $email <br>";
//echo "Senha: $senha <br>";
//echo "Endereço: $endereço <br>";
//echo "Datanascimento: $datanascimento <br>";
//echo "Cpf: $cpf <br>";


 $result_cadastro = "INSERT INTO cadastro  (nomecliente, telefone, email, senha, endereço, datanascimento, cpf) VALUES ('$nome', '$telefone','$email', '$senha', '$endereço', '$datanascimento', '$cpf')";
 $resultado_usuario = mysqli_query ($conn, $result_cadastro);

 //if (mysqli_insert_id ($conn)) {
  //  header ("Location: cadastre-se.php");
 //} else {
   // header ("Location: cadastre-se.php");
 //}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cadastre-se</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="teste.css">
		<link rel="icon" type="image/x-icon" href="imagens/logoo.png">

	</head>   
	
   <body>
   <a href="indexadm.php" class="nav-button">voltar</a>
        <div id="cadastro">

            <form action="cadastre-se.php" method="POST" class="card">

                <div class="card-header">

                    <h2>Cadastre-se</h2>

                </div>

                <div class="card-content">

                    <div class="card-content-area">

                        <label for="Nome">Nome</label>

                        <input type="text" name="nome" placeholder="Nome Completo" required>

                    </div>
   <div class="card-content-area">

                        <label for="Telefone">Telefone </label>

                        <input type="text" type="text" name="telefone" placeholder="Telefone" required>

                    </div>

                    <div class="card-content-area">

                        <label for="email">email</label>

                        <input type="text"  type="email" name="email" placeholder="Seu e-mail" required>

                    </div>

                    <div class="card-content-area">

<label for="senha">senha</label>

<input type="text" type="senha" name="senha" placeholder="sua senha" required>

</div>

<div class="card-content-area">

                        <label for="Endereço">Endereço</label>

                        <input type="text" name="Endereço" placeholder="Endereço" required>

                    </div>
					<div class="card-content-area">

                        <label for="Data de nascimento">Data de Nascimento</label>
						
                        <input type="date" name="Datadenascimento" placeholder="Data de nascimento" required>

                    </div>
<div class="card-content-area">

                        <label for="CPF">CPF</label>

                        <input type="text" name="CPF" placeholder="xxx.xxx.xxx-xx" required>

                    </div>

                           <div class="card-footer">

                    <input type="submit" name="submit" value="CADASTRE-SE" class="submit">

                  </div>
                </div>
            </form>

        </div>

    </body>

</html>