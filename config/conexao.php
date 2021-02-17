<?php

$servername="localhost";
$username="root";
$password="123456";
$dbname="cadastro";
$con=mysqli_connect($servername, $username, $password, $dbname);

/*Contador de linhas de USUARIOS */
$sql="SELECT count(id) AS total FROM usuarios";
$result=mysqli_query($con,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows_users=$values['total'];

/*Contador de linhas de PRODUTOS */
$sql="SELECT count(id) AS total FROM produtos";
$result=mysqli_query($con,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows_produtos=$values['total'];

/*Contador de linhas de CATEGORIAS */
$sql="SELECT count(id) AS total FROM categorias_produtos";
$result=mysqli_query($con,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows_catprod=$values['total'];

?>