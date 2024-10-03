<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="sign-in.css">
</head>
<body>
    <div class="logo-layer">
  <div class="logo-section">
    <img class="logo" src="../img/Imagen3.png" alt="logo-bomberos-zona-4">
    <h2 class="text-logo-login">Iniciar Sesión como Administrador</h2>
  </div>

  <div class="form-section">
    <form class="formu" action="#" method="POST">
      <div>
        <label for="email" class="text-input-section">Usuario</label>
        <div class="casilla-input">
          <input id="email" name="email" type="email" autocomplete="email" required class="input-section">
        </div>
      </div>

      <div>
        <div class="password-section">
          <label for="password" class="text-input-section">Contraseña</label>
          <div class="">
            <a href="#" class="text-password-section">Recuperar Contraseña</a>
          </div>
        </div>
        <div class="casilla-input">
          <input id="password" name="password" type="password" autocomplete="current-password" required class="input-section">
        </div>
      </div>

      <div>
        <button type="submit" class="button-login">Iniciar Sesión</button>
      </div>
    </form>

  </div>
</div>
</body>
</html>
