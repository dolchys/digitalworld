<!DOCTYPE HTML>
<html>
	<head>	<title>DW Access </title> 
		<link rel="stylesheet" href="css/inicio2.css" type="text/css" />
		    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
	</head>
	<body>
			<header>  
			<img src="images/dw.png">
			
			</header>
						
		<div class="primario">

			<h2> Iniciar Sesion </h2>
			<br>
			<br>

				<div class="formulario">


					<form class="session" action="checkinglogin.php" method="post" name="session">
						
						<div>
							<label for="username">Usuario:</label><br>
			                <input type="text" name="username" class="campo" placeholder="Nombre de usuario" required=""/>
						</div>
						<div>
							<label for="password">contrasena: </label><br>
			                <input type="password" name="password" class="campo" placeholder="contrasena" required=""/>
							
						</div>
						<div>
			                    
			                    <button type="submit"><i class="fa fa-chevron-right"></i> Login</button>
		                  </div>
					</form>
					
				</div>
		</div>

</body>
</html>



