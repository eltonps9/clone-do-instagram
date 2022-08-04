<?php
session_start();


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram-clone</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/images/instagram.png" type="image/x-icon">

</head>

<body>

    <div class="formulario">

        <div class="form">
            <div class="rede_social">
                <strong>
                       CLONE INSTAGRAM
                </strong>
                
                <?php
                    if(isset($_SESSION['aviso'])):
                ?>
                    <p>
                        <?=$_SESSION['aviso'];
                        $_SESSION['aviso']= " ";
                        ?>
                    </p>
                <?php
                    endif;  
                ?>
               
            </div>
            <form action="./action/login_action.php" method="post">
                <label for="infor"></label>
                <input type="text" name="infor" id="infor" autofocus required placeholder="Telefone ou email">

                <br>
                <label for="senha"></label>
                <input type="password" name="senha" id="senha" required placeholder="senha">

                <br>
                <input id="input" type="submit" value="Entrar" id="button">
            </form>
            <br>
            <div id="button">
                <div class="efect">
                    <div class="linha"></div>
                    <p>ou</p>
                    <div class="linha"></div>
                </div>

                <br>
                <strong>
                    <img src="./assets/images/facebook.jpg" alt="facebook ">
                    <a href="./pages/cad_aut.php ">Entrar com o facebook</a>
                </strong>
                <br>
                <p>
                    <a href="./pages/senha_aut.php">Esqueceu a senha?</a>
                </p>
            </div>
        </div>
        <div class="cad">
            <strong>Não tem uma conta? <a href="./pages/cadastro.php">Cadastre-se</a></strong>
        </div>
    </div>



</body>

</html>