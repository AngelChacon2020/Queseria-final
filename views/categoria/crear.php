<div class="container">
  <h1>Crear nueva categoría</h1>
  <form action="?controller=categoria&action=save" method="POST">
  <div class="mb-3">
    <label for="nombre">Nombre</label>
    <input class="form-control" type="text" name="nombre" required>
  </div>
    <input class="btn btn-primary" type="submit" value="Guardar">
  </form>
</div>