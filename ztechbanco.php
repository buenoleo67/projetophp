<?php 
$banco = new mysqli("localhost", "root","", "loja",3310);
if($banco->connect_errno){
    echo"Erro ao conectar no banco de dados";
   
}
?>
