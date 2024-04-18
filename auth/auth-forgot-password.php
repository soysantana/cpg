<?php include_once('../components/header.php');  ?>

<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner py-4">
      <!-- Forgot Password -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="auth-login.php" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">
                <img width="80" height="80" src="<?php echo $logo; ?>" />
              </span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">¿Has olvidado tu contraseña? 🔒</h4>
          <p class="mb-4">Ingresa tu correo electrónico y te enviaremos instrucciones para restablecer tu contraseña</p>
          <form id="formAuthentication" class="mb-3" action="auth-login.php">
            <div class="mb-3">
              <label for="email" class="form-label">Correo electrónico</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese su correo electrónico" autofocus />
            </div>
            <button class="btn btn-primary d-grid w-100">Enviar enlace de restablecimiento</button>
          </form>
          <div class="text-center">
            <a href="auth-login.php" class="d-flex align-items-center justify-content-center">
              <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
              Atrás para iniciar sesión
            </a>
          </div>
        </div>
      </div>
      <!-- /Forgot Password -->
    </div>
  </div>
</div>
<!-- / Content -->

<?php include_once('../components/footer-second.php');  ?>