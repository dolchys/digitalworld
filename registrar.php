 <html>
<head>
<title>DIGITAL WORLD- User Register </title>

<link rel=stylesheet href="css/estilo3.css" type="text/css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
<link rel="stylesheet" href="jquery-ui-1.12.1.custom/jquery-ui.css"/>
<script src="jquery/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="jquery-ui-1.12.1.custom/jquery-ui.js" type="text/javascript"></script>

<script>
$(function() {
   $( "#datepicker" ).datepicker();
});
</script>


</head>
<body>
		<?php include ("header.php"); ?>
	<div class="principal">

				<div class="cliente">

				<h1>Registro de Usuario</h1>


				<form name="register" action="registrar-usuario.php" method="POST">
				<div>
				<label for="nombre">Nombre Completo: </label><br>
				<input type="text" name="name" id="name" placeholder="Nombre del Completo" required=""/>
				</div>
				<div>
				<label for="username">Nombre del Usuario: </label> <br>
				<input type="text" name="username" id="username" placeholder="Nombre del Usuario" required=""/>
				</div>

				<div>
				<label for="password">Password: </label> <br>
				<input type="password" name="password" id="password" placeholder="Escribe tu Contrasena" required=""/>
				</div>
				<div>
				<label for="Email">Correo electronico: </label><br>
				<input type="email" name="email" id="email" placeholder="email@dw.mx" required=""/>
				</div>
				<div>
				<label for="email2">Repite tu Correo Electronico: </label> <br>
				<input type="email" name="email2" id="email2" placeholder="email@dx.mx" required=""/>
				</div>
				<div>
				<label for="Fecha">Fecha de Registro: </label> <br>
				<input type="text" name="fecha" id="datepicker" placeholder="mm/dd/aaaa" required=""/>
				</div>
				<div>
				<button type="reset">Reset</button>
				<button type="submit">Registrar</button>
				</div>
				</form>
				</div>
	</div>
	<?php include("footer.php"); ?>
</body>
</html>