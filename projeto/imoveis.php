<?php
include("conexao.php");
   $end=$_POST['end'];
   $cod=$_POST['cod'];
   $nome=$_POST['nome'];
   

   $sql="INSERT INTO imoveis (end,cod,nome) 
   values('$end','$cod','$nome')";

 if (mysqli_query($conexao,$sql)) {
     echo "Usuário cadastrado com sucesso";
 }
 else{
     echo "ERRO".mysqli_connect_error($conexao);
 }
 mysqli_close($conexao);

 ?>