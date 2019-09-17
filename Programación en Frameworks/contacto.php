<!DOCTYPE html>
<!—Código base para el curso de javascript desde cero de aprenderaprogramar.com -->
<html>
<head>
<title>Portal web - aprenderaprogramar.com</title>
<meta charset="utf-8">
<meta name="description" content="Portal web aprenderaprogramar.com">
<meta name="keywords" content="aprender, programar, cursos, libros">
<link rel="stylesheet" type="text/css" href="/estilosA.css">
</head>
<!-- Contenido de la página web -->
<body>
<form name ="formularioContacto" class="formularioTipo1" method="get" action="accion.html">
<div class="form-content">
<h2>Formulario de contacto</h2>
<p>Si quieres contactar con nosotros envíanos este formulario relleno:</p>
<label for="nombre"><span>Nombre:</span> <input id="nombre" type="text" name="nombre" placeholder="Tu nombre..." /></label>
<label for="apellidos"><span>Apellidos:</span> <input id="apellidos" type="text" name="apellidos" placeholder="Tus apellidos..."/></label>
<label for="direccion"><span>Dirección:</span> <input id="direccion" type="text" name="direccion" placeholder="Tu dirección..."/></label>
<label for="email"><span>Correo electrónico:</span> <input id="email" type="text" name="email" placeholder="Tu email..."/></label>
<label for="mensaje"><span>Mensaje:</span> <textarea id="mensaje" name="mensaje" cols=30 rows=2 placeholder="Tu mensaje..."></textarea></label>
<label>
<input type="submit" value="Enviar">
<input type="reset" value="Cancelar">
</label>
</div>
</form>
<!-- Fin del formulario de contacto -->
</div>
<!-- fin cuerpo -->
</div>

 <form id="login" action="index.php" class="well">
                  
              
                  <center><button type="submit" class="btn btn-primary btn-block">SALIR</button></center>
              </form>
</body>
<!-- Fin del contenido de la página web -->
</html>