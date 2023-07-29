<?php

include("conexion.php");

if (isset($_POST['enviar'])) {
	if(strlen($_POST['name']) >= 1 && strlen($_POST['email'] >= 1)) {
		$name = trim($_POST['name']);
		$fecha = date("d/m/y");
		$email = trim($_POST['email']);
		$asunto = trim($_POST['asunto']);
		$message = trim($_POST['message']);
		$consulta = "INSERT INTO contacto(fecha, correo, nombre, asunto, comentario) VALUES ('$fecha','$email','$name','$asunto','$message')"
		$resultado = mysqli_query($conexion,$consulta);
		if ($resultado){
			?>
			<h3 class="ok">Datos enviados correctamente!</h3> 
			<?php 
	} else }
	  ?>
	<h3 class="bad">Ha ocurrido un error!</h3>
	<?php
}
?>


