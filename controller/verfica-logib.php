<?php
require("../conexion/conexion.php");
$usu=$_POST['txtusu'];
$pass=$_POST['txtpass'];
$query=$cn->query("select * from usuario where id='$usu' and pass='$pass'");
if ($query->num_rows>0) {
	session_start();
	header("location:../inicio.php");
}else{
	echo "<script>
	alert('Usuario Incorrecto')
	window.location.href='../index.php'
	</script>";
}
?>