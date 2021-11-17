<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Desencriptador</title> <link rel="stylesheet" href="login.css">
</head>
<table>
<tr><th><a href="pag_desen.php">Regresar</a></tr></th>
<tr><th colspan="3"><h1>Archivo Desencritado</h1></th></tr>
</table>
<?php
 define('FILE_ENCRYPTION_BLOCKS', 10000);

function decryptFile($source, $key, $dest)
{
    $key = substr(sha1($key, true), 0, 16);

    $error = false;
    if ($fpOut = fopen($dest, 'w')) {
        if ($fpIn = fopen($source, 'rb')) {
  
            $iv = fread($fpIn, 16);
            while (!feof($fpIn)) {
                $ciphertext = fread($fpIn, 16 * (FILE_ENCRYPTION_BLOCKS + 1)); 
                $plaintext = openssl_decrypt($ciphertext, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $iv);
             
                $iv = substr($ciphertext, 0, 16);
                fwrite($fpOut, $plaintext);
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
decryptFile($fileName . '.enc', $key, $fileName . '.dec');

?>

</body>
</html>