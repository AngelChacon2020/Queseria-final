<div class="container mt-4">
  <div class="card">
    <div class="card-header">
      <h1>Hacer pedido</h1>
    </div>
  </div>
  <?php if (isset($_SESSION['identity'])) : ?>

    <div class="conatiner mt-4 text-center">
      <a class="btn btn-warning" href="?controller=carrito&action=index">Ver los productos y el precio del pedido</a>
    </div>

    <div class="card-body">
      <h3>Dirección para el envio:</h3>
      <form action="?controller=pedido&action=add" method="POST">
      <div class="mb-3">
        <label for="departamento">Departamento</label>
        <input class="form-control" type="text" name="departamento" required />
      </div>
      <div class="mb-3">
        <label for="municipio">Municipio</label>
        <input class="form-control" type="text" name="municipio" required />
      </div>
      <div class="mb-3">
        <label for="direccion">Dirección</label>
        <input class="form-control" type="text" name="direccion" required />
      </div>
      <div class="mb-3 text-center mt-4">
        <input class="btn btn-primary" type="submit" value="Confirmar pedido" />
      </div>
      </form>
    </div>


  <?php else : ?>
   
    <p>Para comprar se necesita registrar</p>
  <?php endif; ?>
</div>