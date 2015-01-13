
		<!-- Hasta aquí el header -->
<?php include('includes/header.php');?>
	<div class='container'>
		<form method='post' action='prosal.php'>
		
		<label for='nombre'> Nombre</label>
		<input name="nombre" type='text' placeholder='escribe tu nombre' required>
		
		<label for='email'> Email</label>
		<input name="email" type='email' placeholder='escribe tu email' required>
		
		<label for='ciudad'> Ciudad</label>
		<input name="ciudad" type='text' placeholder='escribe tu ciudad' required>
		
		<button type="submit" class="btn btn-primary">Enviar</button>
    
		</form>
	</div>
	<?php include 'includes/footer.php';?>
      