<?php
include("conexao.php");
  
   $nome=$_POST['nome'];
   $email=$_POST['email'];

   

   $ads="INSERT INTO interessado (nome, email) 
   values('$nome','$email')";
   header("Location: pagina.html");
   die();

 if (mysqli_query($conexao,$ads)) {
     echo "Usuário cadastrado com sucesso!";
 }
 else{
     echo "ERRO".mysqli_connect_error($conexao);
 }
 mysqli_close($conexao);

 ?>