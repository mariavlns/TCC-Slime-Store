<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="teste.css">
	<link rel="icon" type="image/x-icon" href="imagens/logoo.png">

        <title>Login</title>

    </head>

    <body>

        <div id="login">
        <form action="testlogin.php" method="POST" >
            <form class="card">

                <div class="card-header">

                    <h2>Login</h2>

                </div>

                <div class="card-content">

                    <div class="card-content-area">

                        <label for="email">Usuário</label>

                        <input type="text" name="email" placeholder="email" autocomplete="off">

                    </div>

                    <div class="card-content-area">

                        <label for="password">Senha</label>

                        <input type="password" name="senha" placeholder="senha" autocomplete="off">

                    </div>

                </div>

                <div class="card-footer">

                    <input type="submit" value="LOGIN" class="submit">



                </div>
                   <div class="card-footer">

                    
              <a href="cadastre-se.php" class="nav-button"> Não tem usuario cadastrar-se aqui</a>
            </form>

        </div>

    </body>

</html>