<?php if (isset($edit) && isset($pro) && is_object($pro)) : ?>

  <h1>Editar producto <?= $pro->nombre ?></h1>

  <?php

  $url_action = "?controller=producto&action=save&id=" . $pro->id;

  ?>
<?php else : ?>
  <h1 class="text-center">Crear nuevo producto</h1>
  <?php

  $url_action = "?controller=producto&action=save";

  ?>

<?php endif; ?>


<div class="container">


  <form action="<?= $url_action ?>" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="nombre">Nombre</label>
      <input class="form-control" type="text" name="nombre" value="<?= isset($pro) && is_object($pro) ? $pro->nombre : ''; ?>">
    </div>

    <div class="mb-3">
      <label for="descripcion">Descripción</label>
      <textarea class="form-control" name="descripcion"><?= isset($pro) && is_object($pro) ? $pro->descripcion : ''; ?></textarea>
    </div>
    <div class="mb-3">
      <label for="precio">Precio</label>
      <input class="form-control" type="text" name="precio" value="<?= isset($pro) && is_object($pro) ? $pro->precio : ''; ?>">
    </div>
    <div class="mb-3">
      <label for="stock">Stock</label>
      <input class="form-control" type="number" name="stock" value="<?= isset($pro) && is_object($pro) ? $pro->stock : ''; ?>">
    </div>
    <div class="mb-3">
      <label for="categoria">Categoria</label>
      <?php $categorias = Utils::showCategorias(); ?>
      <select name="categoria" class="form-select">
        <?php while ($cat = $categorias->fetch_object()) : ?>
          <option value="<?= $cat->id ?>" <?= isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' : ''; ?>>
            <?= $cat->nombre ?>
          </option>

        <?php endwhile; ?>
      </select>
    </div>
    <div class="mb-3">
      <label for="imagen">Imagen</label>
      <?php if (isset($pro) && is_object($pro) && !empty($pro->imagen)) : ?>
        <img src="<?= base_url ?>uploads/images/<?= $pro->imagen ?>" class="thumb" />
      <?php endif; ?>

      <input class="form-control" type="file" name="imagen">
    </div>
    <div class="container text-center">
      <div class="mb-3">
        <input class="btn btn-primary" type="submit" value="Guardar">
      </div>
    </div>

  </form>
</div>