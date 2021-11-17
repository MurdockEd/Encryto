<?php
$clave  = 'Una cadena, muy, muy larga para mejorar la encriptacion';

$method = 'aes-256-cbc';

$iv = base64_decode("C9fBxl1EWtYTL1/M8jfstw==");

$encriptar = function ($valor) use ($method, $clave, $iv) {
    return openssl_encrypt ($valor, $method, $clave, false, $iv);
};

$desencriptar = function ($valor) use ($method, $clave, $iv) {
    $encrypted_data  = base64_decode($valor);
    return openssl_decrypt($valor, $method, $clave, false, $iv);
};

 $getIV = function () use ($method) {
    return base64_encode(openssl_pseudo_bytes(openssl_cipher_iv_length($method)));
 };
 $unid = 'Usuario desencriptador "$usuario"';
 $dato = $_POST['txto'];
 $inf = $encriptar($unid);
$dato_desencriptado = $desencriptar($dato);


$clave1  = 'Una cadena, lo suficientemente larga para que funcione de mejor manera el codigo';

$method1 = 'aes-256-cbc';

$iv1 = base64_decode("A9DBxl1EWtYTL1/M8rfstw==");

$desencriptar1 = function ($valor1) use ($method1, $clave1, $iv1) {
    $encrypted_data1  = base64_decode($valor1);
    return openssl_decrypt($valor1, $method1, $clave1, false, $iv1);
};

 $getIV1 = function () use ($method1) {
    return base64_encode(openssl_pseudo_bytes(openssl_cipher_iv_length($method1)));
 };

$dato1 = $_POST['txto'];

$dato_desencriptado1 = $desencriptar1($dato1);

if($_POST['cboi']=="1") {
            echo ($dato_desencriptado);
            include('conexion.php');

            $usuario = $inf;
            $tipo = "MD5";
            $texto = $dato;
            $cadena = $dato_desencriptado;
            
                $sqlgrabar = "INSERT INTO registro(usuario,tipo,texto,cadena) values ('$usuario','$tipo','$texto','$cadena')";
                
                if(mysqli_query($conn,$sqlgrabar))
                {
         
                }else 
                {
                    echo "Error: ".$sql."<br>".mysql_error($conn);
                }

}
else {
            echo ($dato_desencriptado1);
            include('conexion.php');
            $usuario = $inf;
            $tipo = "SHA1";
            $texto = $dato1;
            $cadena = $dato_desencriptado1;
            
            $sqlgrabar = "INSERT INTO registro(usuario,tipo,texto,cadena) values ('$usuario','$tipo','$texto','$cadena')";
                        
            if(mysqli_query($conn,$sqlgrabar))
            {
     
            }else 
            {
                echo "Error: ".$sql."<br>".mysql_error($conn);
            }     
} 

?>