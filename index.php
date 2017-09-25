<!DOCTYPE HTML>
<html>
	<head>	<title>DW Access </title> 
		<link rel="stylesheet" href="css/inicio.css" type="text/css" />
		    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
		    <style>
body{
     background: url(images/2252.jpg)no-repeat;
     background-size: cover;
}
</style>
	</head>
	<body>
			<!--<header>  
			<img src="images/dw.png">
			
			</header-->
			<center><img src="images/dw.png" class="inicio"></center>
		<div class="primario">
			
			<h2> Iniciar Sesion </h2>
					

				<div class="formulario">

					<form class="session" action="checkinglogin.php" method="post" name="session">
						
						<div>
							
			               <i class="fa fa-user-o"></i>  <input type="text" name="username" placeholder="Usuario" required="">
						</div>
						<div>
							
			                <i class="fa fa-key"></i>  <input type="password" name="password"  placeholder="password" required=""/>
							
						</div>
						<div>
			                    
			                    <button type="submit"><i class="fa fa-chevron-right"></i> Login</button>
		                  </div>
					</form>
					
				</div>
		</div>

</body>
</html>



