<!DOCTYPE html>
<html lang="es">
<head>
	<title>Proyecto</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>
		function Reloj(){ 
			momentoActual = new Date() 
			hora = momentoActual.getHours() 
			minuto = momentoActual.getMinutes() 
			segundo = momentoActual.getSeconds() 

			str_segundo = new String (segundo) 
			if (str_segundo.length == 1) 
				segundo = "0" + segundo 

			str_minuto = new String (minuto) 
			if (str_minuto.length == 1) 
				minuto = "0" + minuto 

			str_hora = new String (hora) 
			if (str_hora.length == 1) 
				hora = "0" + hora 

			horaImprimible = hora + " : " + minuto + " : " + segundo 

			document.form_reloj.reloj.value = horaImprimible 

			setTimeout("Reloj()",1000) 
		} 
</script>
</head>
<body onload="Reloj()">
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
	<img alt="srie.mx" src="img/srie.jpg" width="60px">
	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	 
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Registro de institución<span class="sr-only">(current)</span></a>
			</li>
     
			<li class="nav-item active">
				<a class="nav-link" href="#">Preguntame algo</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="#">Contacto</a>
			</li>
		</ul>
	</div>
	<form  action="login.php">
	
	<input name="login" id="login" class="btn btn-outline-primary my-2 my-sm-0" type="submit" value="LOGIN">
	</form>
	
</nav>

<form name="form_reloj"  class="form_reloj" > 
		<?php echo $hora=date("d-m-Y ");?>
		<input type="text" name="reloj"  onfocus="window.document.form_reloj.reloj.blur()" class="hora">
	</form> 
<div class="content">
 	<img  style="position: relative; top: 0; left: 0; width: 100%; height: 100%; padding-top: 20px;padding-bottom: 20px;" src="imagen.jpg" >
</div>


<section class="contenido wrapper">
<div class="quienes col-xs-12 text-center" style=" padding:-90%;">
        <div id="mediaQ" class="col-xs-10 hidden-xs col-md-4 col-md-8">
          <h2 style="font-size:130%;font-weight: bold" class="tnr">Registro de Instituciones Educativas de la Ciudad de México (Sistema RIE-CDMX)</h2>
          <p class="text-justify" style="font-size:115%">Contar con una base de datos robusta del Sistema Educativo de la Ciudad de México, que integre a las instituciones públicas y particulares que prestan servicios educativos.
		  </p>
        </div>
</div>
</section>

<footer class="footer">
    <div class="privacidad col-md-12 col-xs-12">
        <div class=" text-center">
            <a data-toggle="modal"  style="color:#553f42">Aviso de privacidad</a>
            <br>
        </div>
        <div class="derechos  text-center" style="font-weight:Normal">
           <p>Equipo A Vespertino Planet Media © 2018. Todos los derechos reservados.</p>
		Sitio web desarrollado por <a data-toggle="modal" data-target="#Modal" style="color:blue" >Equipo "A" vespertino</a>
        </div>
    </div>

<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
		<h4  id="exampleModalLabel">Equipo "A" vespertino</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <h5>Integrantes:</h5><br>
            <p>Isasc Alberto Cano Mayrén</p>
			<p>Wladimir Carmona Mejía</p>
			<p>Erick Josue Diaz Campos</p>
			<p>Cesar David Juarez Mondragon</p>
			<p>Felipe Adrian Resendiz Paderco</p>
			<p>Jessica Catalina Osuna Diaz</p>
			<p>Germán Orta Rosales</p>
          </div>
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
</footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
</body>
</html>