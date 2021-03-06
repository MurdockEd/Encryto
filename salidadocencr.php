<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Encriptador</title> <link rel="stylesheet" href="login.css">
</head>
<table>
<tr><th><a href="pag_encri.php">Regresar</a></tr></th>
<tr><th colspan="3"><h1>Archivo Encritado</h1></th></tr>
    
</table>

<?php
 define('FILE_ENCRYPTION_BLOCKS', 10000);


function encryptFile($source, $key, $dest)
{
    $key = substr(sha1($key, true), 0, 16);
    $iv = openssl_random_pseudo_bytes(16);

    $error = false;
    if ($fpOut = fopen($dest, 'w')) {

        fwrite($fpOut, $iv);
        if ($fpIn = fopen($source, 'rb')) {
            while (!feof($fpIn)) {
                $plaintext = fread($fpIn, 16 * FILE_ENCRYPTION_BLOCKS);
                $ciphertext = openssl_encrypt($plaintext, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $iv);

                $iv = substr($ciphertext, 0, 16);
                fwrite($fpOut, $ciphertext);
            }
            fclose($fpIn);
        } else {
            $error = true;
        }
        fclose($fpOut);
    } else {
        $error = true;
    }

    return $error ? false : $dest;
}


$fileName = __DIR__.'/testfile.txt';
$key = 'my secret key';
encryptFile($fileName, $key, $fileName . '.enc');

?>

</body>
</html>