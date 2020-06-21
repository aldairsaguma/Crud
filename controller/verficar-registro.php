<?php
require("../conexion/conexion.php");
$nombre=$_POST['txtnombre'];
$apellido=$_POST['txtapellido'];
$id=$_POST['txtid'];
$correo=$_POST['txtcorreo'];
$pass=$_POST['txtpass'];
$numero=$_POST['txtnumero'];

$query=$cn->query("insert into usuario values ('$id','$pass')");
if ($query){
$query2=$cn->query("insert into datos values ('$nombre','$apellido','$correo','$numero')");
header("location:../inicio.php");
}else{
	echo "<script>
	alert('Registro no insertado')
	window.location.href='../inicio.php'
		</script>";
}
?>