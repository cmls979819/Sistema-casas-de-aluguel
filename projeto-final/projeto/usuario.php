<?php
include("conexao.php");
   $nome=$_POST['nome'];
   $email=$_POST['email'];
   $senha=$_POST['senha'];

   $adm="INSERT INTO usuario (nome, email, senha) 
   values('$nome','$email','$senha')";

 if (mysqli_query($conexao,$adm)) {
     echo "Usuário cadastrado com sucesso";
 }
 else{
     echo "ERRO".mysqli_connect_error($conexao);
 }
 header("Location: pagina.html");
 die();
 mysqli_close($conexao);

 ?>