<?php
$clave  = 'Una cadena, muy, muy larga para mejorar la encriptacion';

$method = 'aes-256-cbc';

$iv = base64_decode("C9fBxl1EWtYTL1/M8jfstw==");

 $encriptar = function ($valor) use ($method, $clave, $iv) {
     return openssl_encrypt ($valor, $method, $clave, false, $iv);
 };

 $getIV = function () use ($method) {
    return base64_encode(openssl_pseudo_bytes(openssl_cipher_iv_length($method)));
 };
$unid = 'Usuario encriptador "$usuario"';
$dato = $_POST['txto'];
$inf = $encriptar($unid);
$dato_encriptado = $encriptar($dato);


$clave1  = 'Una cadena, lo suficientemente larga para que funcione de mejor manera el codigo';

$method1 = 'aes-256-cbc';

$iv1 = base64_decode("A9DBxl1EWtYTL1/M8rfstw==");

 $encriptar1 = function ($valor1) use ($method1, $clave1, $iv1) {
     return openssl_encrypt ($valor1, $method1, $clave1, false, $iv1);
 };

 $getIV1 = function () use ($method1) {
    return base64_encode(openssl_pseudo_bytes(openssl_cipher_iv_length($method)));
 };

$dato1 = $_POST['txto'];

$dato_encriptado1 = $encriptar1($dato1);

if($_POST['cboi']=="1") {
            echo ($dato_encriptado);
            include('conexion.php');

            $usuario = $inf;
            $tipo = "MD5";
            $texto = $dato;
            $cadena = $dato_encriptado;
            
                $sqlgrabar = "INSERT INTO registro(usuario,tipo,texto,cadena) values ('$usuario','$tipo','$texto','$cadena')";
                
                if(mysqli_query($conn,$sqlgrabar))
                {
         
                }else 
                {
                    echo "Error: ".$sql."<br>".mysql_error($conn);
                }
            }	

else {
            echo ($dato_encriptado1);
            include('conexion.php');

            $usuario = $inf;
            $tipo = "SHA1";
            $texto = $dato1;
            $cadena = $dato_encriptado1;
            
                $sqlgrabar = "INSERT INTO registro(usuario,tipo,texto,cadena) values ('$usuario','$tipo','$texto','$cadena')";
                
                if(mysqli_query($conn,$sqlgrabar))
                {
         
                }else 
                {
                    echo "Error: ".$sql."<br>".mysql_error($conn);
                }
            }	         
?>