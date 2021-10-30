<div class="container mt-4">
  <div class="card">

    <div class="card-header">
      <h1 class="text-center">Carrito de la compra</h1>
    </div>
    <div class="card-body">
      <table class="table">
        <tr>
          <th>Imagen</th>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Unidades</th>
        </tr>
        <?php
              foreach ($carrito as $indice => $elemento) :
              $producto = $elemento['producto'];
        ?>
          <tr>
            <td>
              <?php if ($producto->imagen != null) : ?>
                <img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img_carrito" />
              <?php else : ?>
                <img src="<?= base_url ?>assets/img/queso.png" class="img_carrito" />
              <?php endif; ?>
            </td>
            <td>
              <a class="nav-link" href="?controller=producto&action=ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
            </td>
            <td>
              <?= $producto->precio ?>
            </td>
            <td>
              <?= $elemento['unidades'] ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
    <div class="card-footer">
      <div class="conatiner text-center">
        <?php $stats = Utils::statsCarrito(); ?>
        <h3 class="text-center">Precio total: Q<?= $stats['total'] ?></h3>
        <a href="?controller=pedido&action=hacer" class="btn btn-primary">Hacer pedido </a>
      </div>
    </div>
  </div>
</div>