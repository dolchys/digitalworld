<!DOCTYPE HTML>
<html>
<head>	<title>DW Access </title> 

		<style type="text/css">
		</style>
		<link rel=stylesheet href="css/estilo.css" type="text/css">
		


</head>
<body>
	<header>  
		<nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Mayorista</a></li>
                    <li><a href="option.php">Usuarios</a></li>
                    <li><a href="#">Catalogo</a></li>
                                          
                </ul>
            </nav>
            <div class="logout">
                <a href="logout.php"> Cerrar Sesion </a>

            </div>
	</header>
<div id="secundario">

		<form action="checkinglogin.php" method="post" name="session">
			<object
			data="dw1.svg"
			type="image/svg+xml">
			</object>
			<div>
				<label for="username">Nombre de Usuario: </label>
                <input type="text" name="username" id="username" placeholder="Nombre de usuario" required=""/>
			</div>
				<div><label for="password">contrasena: </label>
                <input type="password" name="password" id="password" placeholder="password" required=""/>
				
			</div>
			<div>
                    <button type="reset">Reset</button>
                    <button type="submit">login</button>
                  </div>

		</form>
			

			 <footer>
                    <div class="vcard">
                      <div> <span clase="name"> DIGITAL WORLD </span> - <span class="locality"> TABASCO </span> - <span class="region"> MEXICO</span> - <span class="postal-code">86000</span> - <span class="country-name">MX</span></div>
                    
                    </div>
                  <h6>(c) 2014 DIGITAL WORLD </h6>
                  
        </footer>
	</div>

</body>
</html>



