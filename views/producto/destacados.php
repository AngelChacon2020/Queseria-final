<div class="container mb-4">
  <div class="card mt-4">
    <div class="card-header">
      <h1 class="text-center">Productos</h1>
    </div>
    <div class="card-body row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
      <?php while ($product = $productos->fetch_object()) : ?>
        <div class="container mb-4">
          <a href="?controller=producto&action=ver&id=<?= $product->id ?>">
            <?php if ($product->imagen != null) : ?>
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
              <?php else : ?>
                <img src="<?= base_url ?>assets/img/camisa.jpg" />
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
  </div>
</div>