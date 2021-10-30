<div class="container">
  <div class="card">
    <div class="card-header">
      <h1 class="text-center">Categorias</h1>
    </div>
    <div class="container">


      <div class="card-body">
        <table class="table">
          <tr>
            <th>ID</td>
            <th>NOMBRE</td>
          </tr>

          <?php while ($cat = $categorias->fetch_object()) : ?>
            <tr>
              <td><?= $cat->id; ?></td>
              <td><?= $cat->nombre; ?></td>
            </tr>
          <?php endwhile; ?>
        </table>
      </div>

    </div>
    <div class="card-footer text-center">
        <a href="?controller=categoria&action=crear" class="btn btn-primary">
          Crear categoria
        </a>
      </div>
  </div>

</div>