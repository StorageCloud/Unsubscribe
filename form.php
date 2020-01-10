<?php

// PHP para insertar los datos en la base de datos.
require_once 'php/conexiondb.php';

// inicio variables obtenidas del formulario.
$var = $_GET["address"];
$email = @$_POST["email"];
$comment = @$_POST['comment'];

function send(){
	header("location: http://svrtest:8088/unsubscribe/thanks.html");
}

if (isset($_POST['publ_promo'])) {
	insert($db, $email, $_POST['publ_promo'], $comment);
	send();
}
if (isset($_POST['publ_bf'])) {
	insert($db, $email, $_POST['publ_bf'], $comment);
	send();
}
if (isset($_POST['publ_feria'])) {
	insert($db, $email, $_POST['publ_feria'], $comment);
	send();
}
if (isset($_POST['all_publ'])) {
	insert($db, $email, $_POST['all_publ'], $comment);
	send();
}


// Colocar 


?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">

<head>
	<title>Unsubscribe</title>
	<meta charset="UTF-8" />
</head>

<body class="col-md-10 container">

	<div>
		<h2>Unsubscribe</h2>
	</div>

	<!-- otro formulario -->
	<form class="needs-validation" novalidate method="POST" action="#">
		<div class="form-row">
			<div class="col-md-4 mb-3">
				<label for="validationCustom01">Email address:</label>
				<input type="text" class="form-control" id="validationCustom01" placeholder="Email Address" name="email" readonly="readonly" value=<?php echo $var; ?> require>
				<small id="" class="form-text text-muted">Por favor, colocar su correo.</small>
				<div class="valid-feedback">
					Looks good!
				</div>
			</div>
		</div>

		<!--Tipos de publicidad  -->
		<div>
			<label>Publicidad</label>
		</div>

		<div class="form-group">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="invalidCheck" name="publ_promo" value="Promociones">
				<label class="" for="invalidCheck">
					Promociones.
				</label>
			</div>
		</div>
		<div class="form-group">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="publ_bf" value="Black Friday" id="invalidCheck2">
				<label class="" for="invalidCheck2">
					Black Friday.
				</label>
			</div>
		</div>
		<div class="form-group">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="publ_feria" value="Feria" id="invalidCheck3">
				<label class="" for="invalidCheck3">
					Feria.
				</label>
			</div>
		</div>
		<div class="form-group">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="all_publ" value="Todas las Promociones" id="invalidCheck4">
				<label class="" for="invalidCheck4">
					Todas las Promociones.
				</label>
			</div>
		</div>

		<div class="form-row">
			<div class="col-md-4 mb-3">
				<label for="validationCustom01">Comentario:</label>
				<textarea type="text" class="form-control" id="validationCustom01" placeholder="Comentario" value="" name="comment" required></textarea>
				<small id="" class="form-text text-muted">Por favor, colocar su comentario.</small>
				<div class="valid-feedback">
					Looks good!
				</div>
			</div>
		</div>

		<button class="btn btn-primary" type="submit" onclick="location.href='thanks.html'">Enviar</button>
	</form>


	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
			'use strict';
			window.addEventListener('load', function() {
				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.getElementsByClassName('needs-validation');
				// Loop over them and prevent submission
				var validation = Array.prototype.filter.call(forms, function(form) {
					form.addEventListener('submit', function(event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();
	</script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.bundle.js"></script>
</body>

</html>