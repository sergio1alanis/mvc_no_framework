<?php
require_once("layouts/header.php");
?>

<h1 class="text-center">Editar</h1><br>

<form action="" method="get">
	<?php
	foreach($dato as $key=> $value):
		foreach($value as $v):?>
	<input type="text" value="<?php echo $v['nombre']?>" name="nombre"><br>
	<input type="text" value="<?php echo $v['precio']?>" name="precio"><br>
	<input type="hidden" value="<?php echo $v['id']?>" name="id"><br>
	<input type="submit" class="btn" name="btn" value="Actualizar"><br>
	<input type="hidden" name="page" value="actualizar">
	<?php endforeach; endforeach;?>
</form>

<?php
require_once "layouts/footer.php";