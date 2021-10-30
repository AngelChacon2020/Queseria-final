<div class="container mt-4">
  <div class="card mt-4">
    <div class="card-header">
      <?php if (isset($categoria)) : ?>
        <h1><?= $categoria->nombre ?></h1>
        <?php if ($productos->num_rows == 0) : ?>
          <p>No hay productos para mostrar</p>
        <?php else : ?>
          
    </div>
    <div class="card-body row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
    <?php while ($product = $productos->fetch_object()) : ?>
      <div class="container mb-4">
        <a href="?controller=producto&action=ver&id=<?= $product->id ?>">
          <div class="card" style="width: 18rem;">
            <?php if ($product->imagen != null) : ?>
              <img class="card-img-top" src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
            <?php else : ?>
              <img src="<?= base_url ?>assets/img/camiseta.png" />
            <?php endif; ?>
        </a>
        <div class="card-body">
          <div class="container">
            <h2><?= $product->nombre ?></h2>
            <p>Q<?= $product->precio ?></p>
            <a href="?controller=carrito&action=add&id=<?= $product->id ?>" class="btn btn-primary">Comprar</a>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <?php else : ?>
    <h1>La categoría no existe</h1>
    <?php endif; ?>
</div>