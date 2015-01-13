<div>
<?php 
	$nombre=$_POST['nombre'];	
	$email=$_POST['email'];
	$ciudad=$_POST['ciudad'];	
	include('includes/funcion.php');
echo '<p>'.sobremi($nombre,$email,$ciudad).'</p>'
?>
</div>