<?php
include("conexao.php");
   $nome=$_POST['nome'];
   $cod=$_POST['cod'];
   $email=$_POST['email'];

   $clm="INSERT INTO reservas (nome,cod,email) 
   values('$nome','$cod','$email')";
 
 if (mysqli_query($conexao,$clm)) {
     echo "Usuário cadastrado com sucesso";
 }
 else{
     echo "ERRO".mysqli_connect_error($conexao);
 }
 header("Location: index.html");
 die();
 mysqli_close($conexao);

 ?>