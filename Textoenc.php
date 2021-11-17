<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <title>Encriptador</title> <link rel="stylesheet" href="login.css">
</head>
<table>
<tr><th><a href="pag_encri.php">Regresar</a></tr></th>
<tr><th colspan="3"><h3>Encritar un texto por favor de escribirlo en el recuadro en blanco</h3></th></tr>
<tr><th colspan="3">
<form id="formulario" method="POST" action="salidatextenc.php">
<div class="col text-center">    
<div class="d-flex justify-content-center text-danger mb-5"><h3>Algoritmo</h3></div>
<div class="form-group row">
                        <label for="cboi" class="col-sm-2 col-form-label">Metodo :</label>
                        <div class="col-sm-10">
                            <select class="custom-select" name="cboi">
                                <option value="1">--- MD5 ---</option>
                                <option value="2">--- SHA1 ----</option>
                            </select>
                        </div>
</th></tr>
<tr><th colspan="3"><a href="archivoenc.php" style="float:central">Archivo</a></th></tr>
<tr><th> 
<div class="container">
        <div class="row mt-3">
            <div class="col"> 
	 <div class="form-group row">
                        <label for="txto" class="col-sm-2 col-form-label">Palabra :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txto" name="txto" placeholder="Ingrese palabra">
                        </div></th></tr>
<tr><th>

	<div class="form-group row">
                        <div class="col text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Convetir</button>
							<div class="form-group row" id="mostrar" style="display:none;">
                        <label name="traduccion" id="traduccion" class="col-sm-10 col-form-label"></label>
                    </div>
						</div>
                    </div></tr></th>
					
</table>
<script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            var form = $("#formulario");
            var cadena = "";
            form.submit(function () {
                $.ajax({
                    url: "salidatextenc.php",
                    method: "POST",
                    data: form.serialize(),
                    success: function (r) {
                        cadena = "Su clave ahora es : " + r;
                        $("#mostrar").show();
                        $("#traduccion").text(cadena);
                    },
                    dataType: "html",
                });
                return false;
            })
        })
    </script>
</body>
</html>