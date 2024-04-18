<?php include_once('../components/header.php');  ?>

<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="index.php" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">
                <img width="80" height="80" src="<?php echo $logo; ?>" />
              </span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">Bienvenido a CPG! 👋</h4>
          <p class="mb-4">Por favor inicia sesión en tu cuenta</p>

          <form id="formAuthentication" class="mb-3" action="../pages/pages-dashboards.php">
            <div class="mb-3">
              <label for="username" class="form-label">Nombre de usuario</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Ingrese su nombre de usuario" autofocus />
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Contraseña</label>
                <a href="auth-forgot-password.php">
                  <small>¿Has olvidado tu contraseña?</small>
                </a>
              </div>
              <div class="input-group input-group-merge">
                <input
                  type="password"
                  id="password"
                  class="form-control"
                  name="password"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="password"
                />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me" />
                <label class="form-check-label" for="remember-me"> Acuérdate de mí </label>
              </div>
            </div>
            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100" type="submit">Iniciar sesión</button>
            </div>
          </form>

          <p class="text-center">
            <span>¿Nuevo en nuestra plataforma?</span>
            <a href="auth-register.php">
              <span>Crea una cuenta</span>
            </a>
          </p>
        </div>
      </div>
      <!-- /Register -->
    </div>
  </div>
</div>
<!-- / Content -->

<?php include_once('../components/footer-second.php');  ?>