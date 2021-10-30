<div id="container mt-4">


    <div class="container">
      <?php if (!isset($_SESSION['identity'])) : ?>
        <h3 class="text-center">Entrar</h3>
        <form action="?controller=usuario&action=login" method="post">
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" />
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Contraseña" />
          </div>
          <div class="input-group mb-3">
            <input type="submit" value="Enviar" class="btn btn-primary" />
          </div>
        </form>
        <div class="input-group mb-3">
          <a href="?controller=usuario&action=registro" class="btn btn-secondary">Registrarse</a>
        </div>
      <?php else : ?>
        <h3><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?></h3>
      <?php endif; ?>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Funciones
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php if (isset($_SESSION['admin'])) : ?>
                  <li class="nav-item"><a class="nav-link" href="?controller=categoria&action=index">Categorias</a></li>
                  <li><a class="nav-link" href="?controller=producto&action=gestion">Productos</a></li>

                  <li><a class="nav-link" href="https://umgt-my.sharepoint.com/:x:/g/personal/achaconq_miumg_edu_gt/EbXSXfg6RxJJsiUdfpShhMUB9GtFzC616LofckRLYKzdOg?rtime=_CE31At_2Ug">Libro de Excel</a></li>
                <?php endif; ?>

                <?php if (isset($_SESSION['identity'])) : ?>
                  <li class="nav-item"><a class="nav-link" href="?controller=pedido&action=mis_pedidos">Mis pedidos</a></li>
                  <li class="nav-item"><a class="nav-link" href="?controller=usuario&action=logout">Cerrar sesión</a></li>
                <?php else : ?>

                <?php endif; ?>
              </ul>
          </ul>
        </div>
      </nav>


    </div>
  <!-- CONTENIDO CENTRAL -->
  <div id="central">