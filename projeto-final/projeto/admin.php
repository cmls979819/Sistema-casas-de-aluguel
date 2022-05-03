<?php
include("conexao.php");
   $nome=$_POST['nome'];
   $senha=$_POST['senha'];

   $edm="INSERT INTO admin (nome,senha) 
   values('$nome','$senha')";

 if (mysqli_query($conexao,$edm)) {
     echo "Cadastrado com sucesso!";
 }
 else{
     echo "ERRO".mysqli_connect_error($conexao);
 }
 header("Location: pagina.html");
 die();
 mysqli_close($conexao);

 ?>