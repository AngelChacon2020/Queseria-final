<div class="container mt-4 mb-4">
<div class="card">
  <div class="card-header">
	  <h1>Pedido</h1>
  </div>
  <div class="card-body">
  <?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] = 'complete'): ?>

	<p class="text-center">
		Tu pedido se ha hecho, para cualquier consulta puedes llamarnos al numero 48849439 o
	</p>
	<br/>
	<?php unset($_SESSION['carrito']); if (isset($pedido)): ?>
		<h3>Datos del pedido:</h3>

		<b>Número de pedido:</b> <?= $pedido->id ?>   <br/>
		<b>Total a pagar:</b> Q <?= $pedido->coste ?>  <br/>
		<b>Productos:</b>

		<table class="table">
			<tr>
				<th>Imagen</th>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Unidades</th>
			</tr>
			<?php while ($producto = $productos->fetch_object()): ?>
				<tr>
					<td>
						<?php if ($producto->imagen != null): ?>
							<img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img_carrito" />
						<?php else: ?>
							<img src="<?= base_url ?>assets/img/camiseta.png" class="img_carrito" />
						<?php endif; ?>
					</td>
					<td>
						<a href="?controller=producto&action=ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
					</td>
					<td>
						<?= $producto->precio ?>
					</td>
					<td>
						<?= $producto->unidades ?>
					</td>
				</tr>
			<?php endwhile; ?>
		</table>

	<?php endif; ?>

<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
	<h1>Tu pedido NO ha podido procesarse</h1>
<?php endif; ?>
  </div>
</div>

</div>
