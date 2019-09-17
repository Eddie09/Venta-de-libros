<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AppAdmin | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body> 

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AppAdmin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index2.php"></a></li>
            <li><a href="index2.php">Libros</a></li>
            <li><a href="index2.php">Categorias</a></li>
            <li><a href="index2.php">Nuevos</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Bienvenido</a></li>
            <li><a href="index.php">Salir</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Inicio <small></small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown crear">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Crear Contenido
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addPage" >Agregar Libro</a></li>
                <li><a href="#">Agregar Entrada</a></li>
                <li><a href="#">Agregar Usuario</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

  

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.php" class="list-group-item active color-principal">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Panel de Control
              </a>
              <a href="index2.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Libros <span class="badge">39</span></a>
              <a href="index2.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Categorías <span class="badge">45</span></a>
              <a href="index2.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nuevos <span class="badge">112</span></a>
            </div>
            <form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
    <input id="buscar" name="buscar" type="search" placeholder="Buscar libro..." autofocus >
    <input type="submit" name="buscador" class="boton peque aceptar" value="buscar">
</form>
            </div>
              </div>
              </div>
              </div>   
            </div>
  
                              
      <div id="dg">
		<div class="container">

				<br>
				<div class="col-lg-4">
					<div class="tilt">
					<a href=></a><img src="assets/img/portada 1.jpg" alt="">
					</div>
				</div>

				<div class="col-lg-4">
					<div class="tilt">
					<a href=></a><img src="assets/img/portada 2.jpg" alt="">
					</div>
				</div>

				<div class="col-lg-4">
					<div class="tilt">
					<a href=></a><img src="assets/img/portada 3.jpg" alt="">
					</div>
        </div>
        <div class="col-lg-4">
					<div class="tilt">
					<a href=></a><img src="assets/img/portada 4.jpg" alt="">
					</div>
        </div>
        <div class="col-lg-4">
					<div class="tilt">
					<a href=></a><img src="assets/img/portada 5.jpg" alt="">
					</div>
        </div>
        <div class="col-lg-4">
					<div class="tilt">
					<a href=></a><img src="assets/img/portada 6.jpg" alt="">
					</div>
        </div>
        <div class="col-lg-4">
					<div class="tilt">
					<a href=></a><img src="assets/img/portada 7.jpg" alt="">
					</div>
        </div>
        <div class="col-lg-4">
					<div class="tilt">
					<a href=></a><img src="assets/img/portada 8.jpg" alt="">
					</div>
        </div>
        <div class="col-lg-4">
					<div class="tilt">
					<a href=></a><img src="assets/img/portada 9.jpg" alt="">
					</div>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- DG -->

               
        
          </div>
        </div>
      </div>
    </section>

   
    <!-- Modals -->

    <!-- Agregar página -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Libro</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Título de Libro</label>
          <input type="text" class="form-control" placeholder="Título de la página">
        </div>
        <div class="form-group">
          <label>Mensaje de Libro</label>
          <textarea name="editor1" class="form-control" placeholder="Información de la página"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Publicado
          </label>
        </div>
        <div class="form-group">
          <label>Palabras Clave</label>
          <input type="text" class="form-control" placeholder="Agregar algunas palabras...">
        </div>
        <div class="form-group">
          <label>Meta Descripción</label>
          <input type="text" class="form-control" placeholder="Agregar una metadescripción...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </form>
    </div>
  </div>
</div>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
