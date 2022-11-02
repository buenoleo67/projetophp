<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro  do Cliente</title>
</head>
<body bgcolor="black">
    <div>

    <h1>Bem vindo ao cadastro do cliente</h1>
    <form action="registro.php" method = "post">
    <h3>Digite seu nome: <input type="text" name="nome" minlength="10" maxlength="50" placeholder="Digite seu nome aqui" required></h3>
    <h3>Digite seu email: <input type="email" name="email" minlength="10" maxlength="50" required placeholder="Digite seu email aqui"></h3>
    <h3>Seu Telefone: <input type="number" name="telefone" id="tel" placeholder="Digite seu telefone aqui"  required></h3>
    <h3>Senha de acesso: <input type="password" name="senha" minlength="8" maxlength="16" placeholder="Crie sua senha aqui"></h3>
    Aparelho: <select name="aparelho" id="ap"> <br>
    <option value="celular">Celular</option>
    <option value="notebook">Notebook</option>
    <option value="impressora">Impressora</option>
    <option value="televisao">Televisão</option>
    <option value="outro">Outro</option>
   </select> <br>
    <h3>Descreva o defeito: </h3>
    <textarea name="defeito" id="def" cols="20" rows="5" placeholder="descreva o defeito aqui"></textarea>  <br><br>
    <input type="submit" value="Cadastrar" id="cadastrar">
    </form>
    <h3>Deseja retornar a tela incial? <a href="index.php"> Home</a><br> </h3>
    <h3>Ou acesse nosso whatsapp </b> <a href="https://l.instagram.com/?u=http%3A%2F%2Fwa.me%2F5543991327778%2F&e=ATOwDL1PHlSDAhamZhUbq1pXqF99Ra0z9ndEgocuhl_Nlpdgt0ct0E4wzqEp_yapCtc-loIWV4xqJDz9Rp9bTKSTgHcy1g3vm8QeEYM&s=1" target = "blank">Whatsapp</a></h3>
    </div>
    
    
  
 
</body>
</html>
