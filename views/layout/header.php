<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Queseria</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/styles1.css"/>
  <link rel="shortcut icon" href="assets/img/queso.png" />
</head>

<body>
  <div id="container">
    <?php $categorias = Utils::showCategorias(); ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="nav-link" href="<?= base_url ?>"><img src="assets/img/queso.png" alt="" width="30" height="24" href="index.php"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link align-middle" href="<?= base_url ?>">Inicio</a>
            </li>
            <?php while ($cat = $categorias->fetch_object()) : ?>
              <li class="nav-item">

                <a class="nav-link" href="?controller=categoria&action=ver&id=<?= $cat->id ?>"><?= $cat->nombre ?></a>
              </li>
            <?php endwhile; ?>
            <li class="nav-item">
              <a class="nav-link logo" href="?controller=carrito&action=index"><img src="assets/img/anadir-al-carrito.png" class="img-fluid" alt="carrito" style=" height:30px; margin-left: 30px;"></a>
              </li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="content">
    </div>