<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/miestilo.css">
</head>
<body>
<div class="cuerpo"> 
	<form method="post" action="controller/verfica-logib.php">
		<div class="div-login"><img src="imagenes/login.png" width="70"></div>
		<div class="div-login">
			<label class="txtletras">Usuario:
		<input class="txtcajas" type="text" name="txtusu">
		</label>
		</div>
		<div class="div-login">
			<label  class="txtletras">Contraseña
			<input  class="txtcajas" type="password" name="txtpass">
			</label>
		</div>
		<div class="div-login">
			<input class="button" type="submit" name="btnenviar" value="Ingresar">
		</div>

	</form>
</div>
</body>
</html>