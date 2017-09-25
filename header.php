<header>
            <nav>
                <ul>
                    <li><a href="panel.php"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#">Mayorista</a></li>
                    <li><a href="#">Usuarios</a></li>
                    <li><a href="#">Catalogo</a></li>
                </ul>
            </nav>
            <img src="images/d.PNG" class="d"/>
            <div class="logout">
                <a href="logout.php"> <i class="fa fa-power-off " ></i> Salir </a>
            </div>
            <div class="usuario">

              <?php
              session_start();
              if( ! isset($_SESSION['usuario']) ){
              header("location:index.php");
              }
              else{
               echo '<i class="fa fa-user-o" aria-hidden="true"></i> '.$_SESSION['usuario'];
              }
              ?>
            </div>
</header>