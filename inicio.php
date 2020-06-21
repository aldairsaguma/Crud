<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/miestilo.css">
</head>
<body>
<div class="cuerpo-inicio">
	<form method="post" action="controller/verficar-registro.php">
	<div class="registro-inicio">
	<div><h3 class="titulo-inicio">Registro de usuarios</h3></div>
</div>
<div class="registro-inicio">
	<label>Nombre:
		<input  class="txt-caja-inicio" type="text" name="txtnombre">
	</label>
</div>

<div class="registro-inicio">
	<label>Apellidos:
		<input  class="txt-caja-inicio" type="text" name="txtapellido">
	</label>
</div>

<div class="registro-inicio">
	<label>ID:
		<input  class="txt-caja-inicio" type="number" name="txtid">
	</label>
</div>

<div class="registro-inicio">
	<label>Correo:
		<input  class="txt-caja-inicio" type="text" name="txtcorreo">
	</label>
</div>

<div class="registro-inicio">
	<label>Contraseña:
		<input  class="txt-caja-inicio" type="number" name="txtpass">
	</label>
</div>

<div class="registro-inicio">
	<label>N° celular:
		<input  class="txt-caja-inicio" type="number" name="txtnumero">
	</label>
</div>
<div class="registro-inicio">
	<input class="button2" type="submit" name="btnregistro" value="registrar">
</div>	
</form>
		
</div>
</body>
</html>