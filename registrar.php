<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href="login.css">
	
  </head>
  <body>
<div>
<form method="post" action="registrar.php" name="vaidrollteam">

<table>

<tr><td style="background-color:#33A8DB;"><label>Registrar</label></td></tr>
<tr><td><img src="portal.png"/></td></tr>
<tr><td>
<label for="btsa" class="col-sm-2 col-form-label">Metodo para la base de datos:</label>
<div class="col-sm-10">
    <select class="custom-select" name="cboi">
        <option value="1">--- MD5 ---</option>
        <option value="2">--- SHA1 ----</option></td></tr>
<tr><td><input type="text" name="txtusuario" placeholder="&#128273; Ingresar usuario" required /></td></tr>
<tr><td><input type="password" name="txtpassword" placeholder="&#128274; Ingresar Contraseña" required /> </td></tr>
<tr><td><input type="password" name="repetir" placeholder="&#128274; Repita Contraseña" required /> </td></tr>
<tr><td><select type ="rol" name="rol">
<option value="0" style="display:none;" placeholder="&#128274;"><label>Roll</label></option>
<option value="Encriptado">Encriptado</option>
<option value="Desen">Desencriptado</option>
</select></td></tr>

<tr><td><input type="submit" value="Registrar" name="btnregistrar"/> </td></tr>
<br>
<tr><td><a href="index.html" style="float:right">Iniciar sesión</a></td></tr>
</table>



</form>
</div>
</body>
</html>

<?php
include('conexion.php');

session_start();
	if(isset($_POST["btnregistrar"]))

	{
		$clave  = 'Una cadena, muy, muy larga para mejorar la encriptacion';

		$method = 'aes-256-cbc';
		
		$iv = base64_decode("C9fBxl1EWtYTL1/M8jfstw==");
		
		 $encriptar = function ($valor) use ($method, $clave, $iv) {
			 return openssl_encrypt ($valor, $method, $clave, false, $iv);
		 };
		
		 $getIV = function () use ($method) {
			return base64_encode(openssl_pseudo_bytes(openssl_cipher_iv_length($method)));
		 };

		$dato = $_POST["txtpassword"];
		$usr = $encriptar($dato);
	
	$usuario = $_POST["txtusuario"];
	$pass = $usr;
	$rol = $_POST["rol"];
	
		$sqlgrabar = "INSERT INTO login(usuario,pass,rol) values ('$usuario','$pass','$rol')";
		
		if(mysqli_query($conn,$sqlgrabar))
		{
			echo "<script> alert('Usuario registrado con exito: $usuario'); window.location='index.html' </script>";
		}else 
		{
			echo "Error: ".$sql."<br>".mysql_error($conn);
		}
	}	
?>