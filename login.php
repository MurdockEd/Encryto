<?php

 include('conexion.php');

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

$usu= $_POST["txtusuario"];
$pass = $usr;
$rol = $_POST["rol"];



$queryusuario = mysqli_query($conn,"SELECT * FROM login WHERE usuario ='$usu' and pass = '$pass' and rol = '$rol'");
$nr 		= mysqli_num_rows($queryusuario);  
	
if ($nr == 1 )  
	{ 
		if($rol=="Encriptado")
			{	
				header("Location: pag_encri.php");
			}
		else if ($rol=="Desen")
			{
				header("Location: pag_desen.php");
			}
	}
else
	{
	echo "<script> alert('Usuario, contraseña o rol incorrecto.');window.location= 'index.html' </script>";
	}

?>
