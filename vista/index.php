<?php
require_once("layouts/header.php");
?>

<a href="index.php/?page=nuevo" class="btn">Nuevo</a><br><br>

<table>
<tr>
	<td>ID</td>
	<td>Nombre</td>
	<td>Accion</td>
</tr>
<tbody>
	<?php
	if(!empty($dato)&& is_array($dato)):
		foreach($dato as $v):?>
		</tr>
		<tr>
		<td><?php echo isset($v['id']) ? htmlspecialchars($v['id']) : 'N/A'; ?></td>
		<td><?php echo isset($v['nombre']) ? htmlspecialchars($v['nombre']) : 'N/A'; ?></td>


			<td>
                <?php if(isset($v['id'])): ?>
                <a class="btn" href="index.php?page=editar&id=<?php echo htmlspecialchars($v['id']); ?>">Editar</a><br>
                <a class="btn" href="index.php?page=eliminar&id=<?php echo htmlspecialchars($v['id']); ?>" onclick="return confirm('¿Estas seguro de eliminar?');">Eliminar</a>
                <?php else: ?>
                <span>No hay acciones disponibles</span>
                <?php endif; ?>
            </td>


		</tr>
	<?php endforeach?>

	<?php else:?>
		<tr>
			<td colspan="3" id="nohayreg">No hay registros</td>
		</tr>
	<?php endif ?>


</tbody>


</table>

<?php
require_once("layouts/footer.php");