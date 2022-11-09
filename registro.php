<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <title>registro</title>
</head>
<body bgcolor="white">
   <h1>   </h1>
    <?php
    include 'ztechbanco.php';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $aparelho = $_POST['aparelho'];
    if($nome != "" and $cpf != ""){
        // Escreve o comando
        $sql = "INSERT INTO cliente (nome , email , telefone , cpf , aparelho) VALUES ('$nome', '$email', '$telefone', '$cpf', '$aparelho')";
        // Executa o comando
        $banco->query($sql);
        if($banco->affected_rows > 0){
            echo "Cliente $nome cadastrado com sucesso!";
        }else{
            echo "Erro ao cadastrar Cliente $nome";
        }
    }
?>
    <h3>Retornaremos o contato o mais breve possível!</h3>
    <b><h3>Ou acesse nosso whatsapp </b> <a href="https://l.instagram.com/?u=http%3A%2F%2Fwa.me%2F5543991327778%2F&e=ATOwDL1PHlSDAhamZhUbq1pXqF99Ra0z9ndEgocuhl_Nlpdgt0ct0E4wzqEp_yapCtc-loIWV4xqJDz9Rp9bTKSTgHcy1g3vm8QeEYM&s=1" target = "blank">Whatsapp</a></h3>  
    
   <h3>Deseja retornar a tela incial? <a href="index.php"> Home</a><br> </h3>
</body>
</html>
