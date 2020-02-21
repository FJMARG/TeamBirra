<!--<header class="masthead mb-auto">
	<div class="inner">
		<nav class="navbar navbar-expand-lg navbar-light ">
			<div class="container">
				<a class="navbar-brand" href="./index.php"><h3 class="masthead-brand"><img style="width: 100px;" src="images/logo1.png" alt="WELCOME"></img></h3></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsExample07">
					<ul class="navbar-nav ml-auto">
							<li class="nav-item ">
								<a class="nav-link" href="./index.php">HOME <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="./catalogo.php">CATALOGO <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="register.php">REGISTRO</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="usuario.php">
										<?php
										echo (isset($_SESSION["usuario"]))? "PERFIL" : "LOGIN";
										?>
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACERCA DE</a>
								<div class="dropdown-menu" aria-labelledby="dropdown07">
									<a class="dropdown-item" href="faq.php">FAQ</a>
									<a class="dropdown-item" href="contact.php">CONTACTO</a>
								</div>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="./carrito.php"> <img style="width: 20px;" src="images/carrito.svg" alt="instagram"></img> <span class="sr-only">(current)</span></a>
							</li>

					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>
-->

<nav class="navbar navbar-expand-lg contenedor">
  <div class="container-fluid">
  <a class="navbar-brand col-2 col-md-1 col-lg-1 logo" href="#"><img  style="width: 50px;" src="images/logo1.png" alt="WELCOME"></img></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

<div class="panelCentral col-md-6 col-lg-6">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="./index.php">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./catalogo.php">CATALOGO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="faq.php">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">CONTACTO</a>
      </li>
</div>


<div class="PanelIzquierdo  col-md-4 col-lg-4">

      <div class="searchBar col-md-6 col-lg-6">
            <!--  <form class="form-inline  ">
                <button class="btn btn-outline-dark btn-sm my-2 my-sm-0 col-md-3 col-lg-3 botonSearch" type="submit"> <img style="" src="images/lupa.svg" alt="Search"></img></button>
                <input class="form-control form-control-sm mr-sm-2 col-md-8 col-lg-8 " type="search" placeholder="" aria-label="Search">
              </form>-->
        </div>

      <div class="log-reg col-md-3 col-lg-3">

              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img  style="width: 20px;" src="images/userIcon.png" alt="WELCOME"></img>  Sign In
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="register.php">REGISTRO</a>
                  <a class="dropdown-item" href="usuario.php">
                    <!--<?php
                    echo (isset($_SESSION["usuario"]))? "PERFIL" : "LOGIN";
                    ?>-->
                    LOGIN
                  </a>
                </div>
              </li>
        </div>

        <div class="carrito col-md-3 col-lg-3">
            <li class="nav-item ">
              <a class="nav-link" href="./carrito2.php"> <img style="width: 20px;" src="images/bag.png" alt="instagram"></img>bag<span class="sr-only">(current)</span></a>
            </li>
        </div>

</div>




  </div>


    </div>
</nav>
