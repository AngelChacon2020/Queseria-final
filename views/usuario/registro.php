<div class="container">
  <h1>Registrarse</h1>
  <?php

  if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete') : ?>

    <strong style="color: green;">Registro completado correctamente</strong>

  <?php elseif (isset($_SESSION['register']) && $_SESSION['register'] == 'failed') : ?>

    <strong style="color: red;">Registro fallido, introduce bien los datos</strong>

  <?php endif; ?>

  <?php Utils::deleteSession('register'); ?>

  <form action="?controller=usuario&action=save" method="POST">
    <div class="mb-3">
    <input class="form-control"  type="text" name="nombre" required placeholder="Nombre"/>
    </div>
    <div class="mb-3">
    <input class="form-control"  type="text" name="apellidos" required placeholder="Apellido"/>
    </div>
    <div class="mb-3">
    <input class="form-control"  type="email" name="email" required placeholder="Email" />
    </div>
    <div class="mb-3">
    <input class="form-control"  type="password" name="password" required placeholder="Password" />
    </div>
    <div class="mb-3">
    <input type="submit" value="Registrarse" class="btn btn-primary"/>
    </div>
  </form>
</div>