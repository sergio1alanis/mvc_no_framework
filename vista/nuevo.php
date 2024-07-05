<?php
require_once("layouts/header.php");
?>

<h1 class="text-center">Nuevo</h1>

<form action="" method="get">
	<input type="text" placeholder="Ingrese Nombre: " name="nombre"><br>
	<input type="text" placeholder="Ingrese Precio: " name="precio"><br>
	<input type="submit" class="btn" name="btn" value="Guardar"><br>
	<input type="hidden" name="page" value="guardar">
</form>

<?php
require_once "layouts/footer.php" ;