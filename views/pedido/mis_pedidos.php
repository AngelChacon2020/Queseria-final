<div class="container mt-4 mb-4">
  <div class="card">
    <div class="container">
      <?php if (isset($gestion)) : ?>
        <h1>Gestionar pedidos</h1>
      <?php else : ?>
        <div class="card-header">
          <h1 class="text-center">Mis pedidos</h1>
        </div>
      <?php endif; ?>
      <div class="card-body">
        <table class="table">
          <tr>
            <th>No. Pedido</th>
            <th>Costo</th>
            <th>Fecha</th>
            <th>Estado</th>
            <th>Eliminar Pedido</th>
          </tr>
          <?php
          while ($ped = $pedidos->fetch_object()) :
          ?>

            <tr>
              <td>
                <a href="?controller=pedido&action=detalle&id=<?= $ped->id ?>"><?= $ped->id ?></a>
              </td>
              <td>
                Q<?= $ped->coste ?>
              </td>
              <td>
                <?= $ped->fecha ?>
              </td>
              <td>
                <?= Utils::showStatus($ped->estado) ?>
              
              </td>
              <td>
              <a href="?controller=pedido&action=eliminar&id=<?= $ped->id ?>" class="btn btn-danger">Eliminar</a>
              </td>
            </tr>

          <?php endwhile; ?>
        </table>
      </div>
    </div>
  </div>
</div>