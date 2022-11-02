<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Bem vindo</title>
</head>
<body bgcolor="black">
    <div>
    <h1>Bem vindo a área de login</h1>
    <form action="status.php" method = "post" class="login">
   <h4>Email: <input type="email" name= "email" minlength="10" maxlength="50" required></h4> 
   <h4>Senha: <input type="password" name= "senha" minlength="8" maxlength="16"></h4>
    <input  class="botao" type="submit" name= "entrar" value = "Entrar"><br><br><br>
    </form>
    Ainda não tem cadastro? <a href="cadastro.php">Acesse Aqui</a> <br>
   Deseja retornar a tela incial?<a href="index.php"> Home</a><br>
   </div>
   
   
   <img src="logo2.jpg" alt="logomarca">

</body>
</html>
