<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRE-SE</title>
    <link rel="stylesheet" href="../assets/css/cad_style.css">
</head>
<body>
<div class="formulario">

<div class="form">
    <div class="rede_social">
        <strong>
               CLONE INSTAGRAM
        </strong>
            <p>
                <?php
                    if(isset($_SESSION['cad'])){
                       echo $_SESSION['cad'];
                       $_SESSION['cad']=" ";
                    }
                ?>
            </p>
    </div>
    <form action="../action/cad_action.php" method="post">
        <label for="infor"></label>
        <input type="text" name="infor" id="infor" required placeholder="Número do celular ou email">
        <br>

        <label for="nome"></label>
        <input type="text" name="nome" id="nome" required placeholder="Nome completo">
        <br>

        <label for="usuario"></label>
        <input type="text" name="usuario" id="usuario" required placeholder="Nome de usuario">
        <br>

        <label for="senha"></label>
        <input type="password" name="senha" id="senha" required placeholder="senha">
        <br>

        <p>Ao se cadastrar, você concorda com nossos Termos, Política de Privacidade e Política de Cookies.</p>

        <input id="input" type="submit" value="Cadastre-se" id="button">
    </form>
    <br>
    
</div>
<div class="cad">
    <strong>Tem uma conta? <a href="../index.php">Faça login</a></strong>
</div>
</div>
</body>
</html>

