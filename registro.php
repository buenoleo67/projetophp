<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <title>registro</title>
</head>
<body bgcolor="black">
   <h1> Bem vindo! o seu registro foi recebido com sucesso! </h1>
   <div id="card">
    <?php
    $nome = $_POST['nome'];
    echo " <h2>$nome, é otimo ter você conosco!</h2> <br>";
        foreach($_POST as $cliente  => $dados){
            echo "
            $cliente : $dados<br> ";
        }
    ?>
    </div>
    <h3>Retornaremos o contato o mais breve possível!</h3>
    <b><h3>Ou acesse nosso whatsapp </b> <a href="https://l.instagram.com/?u=http%3A%2F%2Fwa.me%2F5543991327778%2F&e=ATOwDL1PHlSDAhamZhUbq1pXqF99Ra0z9ndEgocuhl_Nlpdgt0ct0E4wzqEp_yapCtc-loIWV4xqJDz9Rp9bTKSTgHcy1g3vm8QeEYM&s=1" target = "blank">Whatsapp</a></h3>  
    
   <h3>Deseja retornar a tela incial? <a href="index.php"> Home</a><br> </h3>
</body>
</html>
