<?php header("refresh:3; url=auth/auth-login.php"); ?>
<?php include_once('components/header.php');  ?>

<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar d-flex justify-content-center align-items-center">
  <div class="layout-container">
    <!-- Menu -->

    <!-- Layout container -->
    <div class="layout-page">
      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->

        <!-- Basic Layout -->
        <div class="card-body d-flex justify-content-center align-items-center">
          <div class="spinner-border spinner-border-lg text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
        </div>
        <!-- / Content -->

        <div class="content-backdrop fade"></div>
      </div>
      <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
  </div>

  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<?php include_once('components/footer-second.php');  ?>