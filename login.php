

<!DOCTYPE html>
<html lang="es">
<head>
<title>Login</title>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	
	
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>
	$(function() {

    $('#login').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
		$("#img1").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$("#img2").fadeOut(100);
		$('#register').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
		$("#img2").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$("#img1").fadeOut(100);
		$('#login').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

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

</nav>  

	<div class="container">
		<div >
			<div>
				<form name="form_reloj"  class="form_reloj"> 
				<?php echo $hora=date("d-m-Y ");?>
				<input type="text" name="reloj"  onfocus="window.document.form_reloj.reloj.blur()" class="hora">
				</form> 
				<form id="img1">
					<div   style="text-align:center;" >
						<img src="img/descarga.png" >
					</div>
				</form>
				<div class="table-responsive">
					<table class="table">
						<tr>
							<th id="login"><a>Login</a></th>
							
						</tr>
					</table>						
				</div>
				<div>
					<div class="row">
						<div class="col-lg-12">
							<form id="login-form" method="POST" role="form" style="display:block;">
								<div>
									<input type="text" id="usuario" name="usuario" tabindex="1" class="form-control" placeholder="Username"><br>
								</div>
								<div>
									<input type="password" id="password" name="password" tabindex="2" class="form-control" placeholder="Password"><br>
								</div>
								<div>
									<div>
										<input type="submit" name="login" id="login" tabindex="3" class="form-control btn btn-primary" value="LOGIN"><br>
									</div>
									<?php

									if(@$_POST['login']){

									@$Username=strtolower($_POST['usuario']);
									@$Password=strtolower($_POST['password']);

									if($Username == "admin" && $Password == "admin"){
										header('index.php');
									}else{
										echo " <div class='text-center' style='color:red'><p>El usuario o contraseña son incorrectos</p></div>";
									}

									}

									?>
								</div><br>
								<div class="col-ls-12">
									<div class="text-center">
										<a style="color:blue" data-toggle="modal" data-target="#Modal" > ¿Olvido su contraseña?</a>
									</div>
								</div>
							</form>
							<form id="register-form" method="POST" role="form" style="display:none;">
								<div  >
									<div class="text-center">
									<img src="img/moral.png" style="width:55px;"><a> PERSONA MORAL O INSTITUCION</a>
									</div>
								</div><br>
								<div class="text-center">
									<img src="img/fisica.png" style="width:55px;"><a> PERSONA FISICA</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
		<h4  id="exampleModalLabel">¿Olvido su contraseña?</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Escriba su correo electronico:</label>
            <input type="email" class="form-control" id="recipient-name">
          </div>
      </div>
      <div class="modal-footer">
		<form action="index.php" method="POST">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="input"  class="btn btn-primary"  >Enviar</button>
		</form>
      </div>
    </div>
  </div>
</div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>