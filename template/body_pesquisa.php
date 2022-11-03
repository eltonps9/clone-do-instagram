<link rel="stylesheet" href="../assets/css/pesq_style.css">
<?php
require_once "../config/connect.php";

$pesquisa=filter_input(INPUT_POST,'pesq');
$usuario_pesq=[];

if(isset($pesquisa)){
    $sql=$pdo->prepare("SELECT * FROM login WHERE nome LIKE :nome or usuario LIKE :usuario or email LIKE :email ");
    $sql->bindValue(":usuario","%$pesquisa%");
    $sql->bindValue(":nome","%$pesquisa%");
    $sql->bindValue(":email","%$pesquisa%");
    $sql->execute();
    
    if($sql->rowCount() > 0){
        $usuario_pesq=$sql->fetchAll(PDO:: FETCH_ASSOC);

        foreach($usuario_pesq as $key):?>
            
            <div class="post">
                <div class="infor">
                    <div class="img">
                        <img src="../assets/images/<?=$key['foto'];?>" alt="perfil">
                    </div>
                    <strong>
                    @<?=$key['nome'];?>
                    </strong>
                    <div class="comp">
                        <button class="pontos">+</button>
                    </div>
                </div>
            </div>    

        <?php
            endforeach;?>
            <a href="../pages/tela.php">voltar</a>
        <?php 
        exit;

        }else{
            echo '<p>Usuario(a) <strong>@'.$pesquisa.'</strong> não encontrado. </p>';
            echo '<br>';
            echo '<br>';
            echo '<a href="../pages/tela.php">voltar</a>';
            exit;
        }  
}


?>

