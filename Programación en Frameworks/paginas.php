<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AppAdmin | Pages</title>
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
            <li><a href="index1.php">Panel de Control</a></li>
            <li class="active"><a href="paginas.php">Libros</a></li>
            <li><a href="entradas.php">Entradas</a></li>
            <li><a href="usuarios.php">Usuarios</a></li>
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
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Libros<small> Administrar las Libros</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Crear Contenido
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addPage">Agregar Libros</a></li>
                <li><a href="#">Agregar Entrada</a></li>
                <li><a href="#">Agregar Usuario</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index1.php">Panel de Control</a></li>
          <li class="active">Páginas</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index1.php" class="list-group-item active color-principal">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Panel de Control
              </a>
              <a href="paginas.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Libros <span class="badge">39</span></a>
              <a href="entradas.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Entradas <span class="badge">45</span></a>
              <a href="usuarios.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuarios <span class="badge">112</span></a>
            </div>

            <div class="well">
              <h4>Espacio en Disco</h4>
              <div class="progress">
                  <div class="barra-progreso" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                      40%
              </div>
            </div>
            <h4>Ancho de Banda </h4>
            <div class="progress">
                <div class="barra-progreso" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                    75%
            </div>
          </div>
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Libros</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filtrar páginas...">
                      </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
                      <tr>
                        <th>Título</th>
                        <th>Publicado</th>
                        <th>Creado</th>
                        <th></th>
                      </tr>
                      <tr>
                        <td>Inicio a la Programacion</td>
                        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                        <td>Mayo 22, 2016</td>
                        <td><a class="btn btn-default" href="editar.php">Editar</a> <a class="btn btn-danger" href="#">Borrar</a></td>
                      </tr>
                      <tr>
                        <td>El principito</td>
                        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                        <td>Mayo 22, 2016</td>
                        <td><a class="btn btn-default" href="editar.php">Editar</a> <a class="btn btn-danger" href="#">Borrar</a></td>
                      </tr>
                      <tr>
                        <td>Soy Leyenda</td>
                        <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
                        <td>Mayo 22, 2016</td>
                        <td><a class="btn btn-default" href="editar.php">Editar</a> <a class="btn btn-danger" href="#">Borrar</a></td>
                      </tr>
                      <tr>
                        <td>Matematicas basicas</td>
                        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                        <td>Mayo 22, 2016</td>
                        <td><a class="btn btn-default" href="editar.php">Editar</a> <a class="btn btn-danger" href="#">Borrar</a></td>
                      </tr>
                    </table>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright AppAdmin, &copy; 2017</p>
    </footer>

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
          <input type="text" class="form-control" placeholder="Título de la Libro">
        </div>
        <div class="form-group">
          <label>Mensaje de Libro</label>
          <textarea name="editor1" class="form-control" placeholder="Información de la Libro"></textarea>
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
