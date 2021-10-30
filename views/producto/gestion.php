<div class="container mt-4">

  <div class="card">
    <div class="card-header">
      <h1 class="text-center">Editar Productos</h1>
    </div>
  </div>
  <div class="card-body">
    <div class="container">
    <?php if (isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete') : ?>
      <strong class=" alert_green">Producto Guardado</strong>
      </br>
    <?php elseif (isset($_SESSION['producto']) && $_SESSION['producto'] != 'complete') : ?>
      <strong class="alert_red">El producto no se ah podido guardar</strong>
      </br>

    <?php endif; ?>
    <?php Utils::deleteSession('producto'); ?>


    <?php if (isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete') : ?>
      <strong class="alert_green"> producto  borrado</strong>
      </br>
    <?php elseif (isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete') : ?>
      <strong class="alert_red"> producto no  borrado</strong>
      </br>


    <?php endif; ?>
    <?php Utils::deleteSession('delete'); ?>
    <table class="table">
      <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>PRECIO</th>
        <th>STOCK</th>
        <th>ACCIONES</th>
      </tr>

      <?php while ($pro = $productos->fetch_object()) : ?>
        <tr>
          <td><?= $pro->id; ?></td>
          <td><?= $pro->nombre; ?></td>
          <td>Q<?= $pro->precio; ?></td>
          <td><?= $pro->stock; ?></td>
          <td>
            <a href="?controller=producto&action=editar&id=<?= $pro->id ?>" class="btn btn-success">Editar</a>
            <a href="?controller=producto&action=eliminar&id=<?= $pro->id ?>" class="btn btn-danger">Eliminar</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </table>
  </div>
  </div>

    <div class="container text-center mb-4">
      <a href="?controller=producto&action=crear" class="btn btn-primary"">Crear producto</a>
    </div>
</div>