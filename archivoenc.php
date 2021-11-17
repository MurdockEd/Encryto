<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Encriptador</title> <link rel="stylesheet" href="login.css">
</head>
<table>
<tr><th><a href="pag_encri.php">Regresar</a></tr></th>
<tr><th colspan="3"><h1>Encritar un archivo</h1></th></tr>
<tr><th colspan="3">
<div class="ub1">Algoritmo</div>
<select name="algor">
<option value="0" style="display:none;"><label>Seleccionar</label></option>
<option value="Encriptado">MD5</option>
<option value="Desen">SHA1</option>
</th></tr>
<tr><th colspan="3">
<a href="textoenc.php" style="float:central">Texto</a></th></tr>
<tr><th colspan="3">
  
<div>
      <span>Cargar el archivo:</span>
      <input type="file" name="uploadedFile" />
    </div>
    <tr><th><a href="salidadocencr.php" type="submit">Encriptar</a></tr></th>
    </th></tr>
</table>
</body>
</html>