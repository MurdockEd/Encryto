<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Desencriptador</title> <link rel="stylesheet" href="login.css">
</head>
<table>
<tr><th><a href="pag_desen.php">Regresar</a></tr></th>
<tr><th colspan="3"><h1>Desencritar un 1 archivo</h1></th></tr>
<tr><th colspan="3">
<div class="ub1">Algoritmo</div>
<select name="algor">
<option value="0" style="display:none;"><label>Seleccionar</label></option>
<option value="Encriptado">MD5</option>
<option value="Desen">SHA1</option>
</th></tr>
<tr><th colspan="3">
<a href="textodes.php" style="float:central">Texto</a></th></tr>
<tr><th colspan="3">

    <div>
      <span>Cargar el archivo:</span>
      <input type="file" name="uploadedFile" />
    </div>
    <tr><th><a href="salidadocdesc.php" type="submit">Desencriptar</a></tr></th>
    </th></tr>
</table>
</body>
</html>