<?php
    session_start();
	//print_r($_SESSION);
	if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
	{
		unset($_SESSION['email']);
        unset($_SESSION['senha']);
	}
	$logado = $_SESSION['email'];

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Área do Administrador</title>
		<meta charset="utf-8"> 
		<link rel="stylesheet" type="text/css" href="style.css"> 
		<link rel="stylesheet" type="text/css" href="telaadm.css">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="teste.css">
      <link rel="icon" type="image/x-icon" href="imagens/logoo.png">
	</head>
	<body>
		<nav class="nav">
		<a href="index.html">
			<img src="imagens/logoo.png" class="nav-logo">
		</a>
			<h1>Slime Store</h1>
			<div class="nav-items">
			<button class="menu"><img src="imagens/menu.png"></button>
			<a href="index.html" class="nav-button">Início</a>
            <a href="logadosair.php" class="nav-button"> logado</a>

			</div>
		</nav>
		<main class="main">

		</main>

		 <div id="cadastro">

            <form class="card">

                <div class="card-header">

                    <h2>CADASTRO DE PRODUTOS</h2>

                </div>

                <div class="card-content">


                    <div class="card-content-area">

                        <label for="Foto do Produto">Foto do Produto</label>

                        <input type="file" name="nome" placeholder="Foto do Produto" required>

                    </div>

                    <div class="card-content-area">

                        <label for="Nome">Nome/marca</label>

                        <input type="text" name="nomemarca" placeholder="nome do produto" required>

                    </div>
   <div class="card-content-area">

                        <label for="Cor">Cor </label>

                        <input type="tex"<input type="text" name="cor" placeholder="cor" required>

                    </div>
                    
   <div class="card-content-area">

                        <label for="Senha">Tamanho</label>

                        <input type="text"<input type="text" name="Tamanho" placeholder="Tamanho" required>

                    </div>

                    <div class="card-content-area">

                        <label for="idproduto">Id do Produto</label>

                        <input type="text" <input type="text" name="idproduto" placeholder="idproduto" required>

                    </div>

                

<div class="card-content-area">

                        <label for="Valor">Valor</label>

                        <input type="text" name="Valor" placeholder="Valor" required>

                    </div>


                           <div class="card-footer">

                    <input type="submit" value="CADASTRAR" class="submit">

                  </div>
                </div>
            </form>

        </div>
         

	</body>
</html>