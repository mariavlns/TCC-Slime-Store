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
		<title>Slime Store</title>
		<meta charset="utf-8"> 
		<link rel="stylesheet" type="text/css" href="style.css"> 
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
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
		<a href="about.html" class="nav-button"> Slime Store</a>
       <a href="logadosair.php" class="nav-button"> logado</a>
	   </div>
	   <div class="carrinho">
      <a href="carrinho de compras.html"><img src="imagens/logo carrinho.png"></a>
			</div>
		</nav>
		<main class="main">
			<h1 class="text">Conheça nossas roupas e bonés!</h1>
			<div class="atractions">
				<div class="at "> 
				<a href="todasopcoes.html">
					<img src="imagens/SANTACRUZ.png" class="at-img cima"> 
				</div>
				<div class="atr1">
				<a href="bones.html">
					<img src="imagens/bonelogo.png" class="at-img">
				</div>

				</div>
			</div>
		</main>
		<footer class="footer"> Medianeira 2022
		<div class="instagram1">
		<a href="https://www.instagram.com/_slimestor3/">
		<img src="imagens/instagram.png">
		</a>
		</div>
		<div class="whatsapp1">
		<a href="https://wa.me/554598454986">
		<img src="imagens/whatsapp.png">
		</a>
		</div>
		</footer>
	</body>
</html>