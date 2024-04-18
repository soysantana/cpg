<?php include_once('header.php');  ?>

<div class="layout-wrapper layout-content-navbar">
<div class="layout-container">
<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
   <div class="app-brand demo">
      <a href="../pages/pages-dashboards.php" class="app-brand-link">
      <span class="app-brand-logo demo">
      <img width="50" height="50" src="<?php echo $logo; ?>" />
      </span>
      </a>
      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
   </div>
   <div class="menu-inner-shadow"></div>
   <ul class="menu-inner py-1">
      <!-- Dashboards -->
      <li class="menu-item">
         <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Dashboards">Dashboards</div>
            <div class="badge bg-danger rounded-pill ms-auto">5</div>
         </a>
         <ul class="menu-sub">
            <li class="menu-item">
               <a href="index.html" class="menu-link">
                  <div data-i18n="Analytics">Analytics</div>
               </a>
            </li>
         </ul>
      </li>
      <!-- Forms & Tables -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Forms</span></li>
      <!-- Forms -->
      <li class="menu-item active open">
         <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-detail"></i>
            <div data-i18n="Clientes">Clientes</div>
         </a>
         <ul class="menu-sub">
            <li class="menu-item">
               <a href="form-layouts-vertical.html" class="menu-link">
                  <div data-i18n="Zona">Zona</div>
               </a>
            </li>
            <li class="menu-item active">
               <a href="form-layouts-horizontal.html" class="menu-link">
                  <div data-i18n="Categoria">Categoria</div>
               </a>
            </li>
         </ul>
      </li>
      <li class="menu-item">
         <a href="" target="_blank" class="menu-link">
            <div data-i18n="Solicitud">Solicitud</div>
         </a>
      </li>
      <li class="menu-item">
         <a href="" target="_blank" class="menu-link">
            <div data-i18n="Prestamos">Prestamos</div>
         </a>
      </li>
      <li class="menu-item">
         <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-detail"></i>
            <div data-i18n="Legal">Legal</div>
         </a>
         <ul class="menu-sub">
            <li class="menu-item">
               <a href="form-layouts-vertical.html" class="menu-link">
                  <div data-i18n="Carta de cobro">Carta de cobro</div>
               </a>
            </li>
            <li class="menu-item">
               <a href="form-layouts-horizontal.html" class="menu-link">
                  <div data-i18n="Intimacion de pago">Intimacion de pago</div>
               </a>
            </li>
            <li class="menu-item">
               <a href="form-layouts-horizontal.html" class="menu-link">
                  <div data-i18n="Acuerdos">Acuerdos</div>
               </a>
            </li>
         </ul>
      </li>
      <!-- APP & PAGES -->
      <li class="menu-header small text-uppercase">
         <span class="menu-header-text">Apps &amp; Pages</span>
      </li>
      <!-- Account Settings -->
      <li class="menu-item">
         <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-dock-top"></i>
            <div data-i18n="Account Settings">Configuraciones</div>
         </a>
         <ul class="menu-sub">
            <li class="menu-item">
               <a href="pages-account-settings-account.html" class="menu-link">
                  <div data-i18n="Account">Cuenta</div>
               </a>
            </li>
         </ul>
      </li>
      <!-- Authentications -->
      <li class="menu-item">
         <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
            <div data-i18n="Authentications">Autenticaciones</div>
         </a>
         <ul class="menu-sub">
            <li class="menu-item">
               <a href="../auth/auth-register.php" class="menu-link" target="_blank">
                  <div data-i18n="Basic">Registrar</div>
               </a>
            </li>
         </ul>
      </li>
      <!-- /APP & PAGES -->
      <!-- Misc -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
      <li class="menu-item">
         <a href="" target="_blank" class="menu-link">
            <i class="menu-icon tf-icons bx bx-support"></i>
            <div data-i18n="Support">Soporte</div>
         </a>
      </li>
      <li class="menu-item">
         <a href="" target="_blank" class="menu-link">
            <i class="menu-icon tf-icons bx bx-file"></i>
            <div data-i18n="Documentation">Documentación</div>
         </a>
      </li>
   </ul>
</aside>
<!-- / Menu -->
<div class="layout-page">
<!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
   <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
      <i class="bx bx-menu bx-sm"></i>
      </a>
   </div>
   <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
      <!-- Search -->
      <div class="navbar-nav align-items-center">
         <div class="nav-item d-flex align-items-center">
            <i class="bx bx-search fs-4 lh-0"></i>
            <input type="text" class="form-control border-0 shadow-none ps-1 ps-sm-2" placeholder="Buscar..." aria-label="Search..." />
         </div>
      </div>
      <!-- /Search -->
      <ul class="navbar-nav flex-row align-items-center ms-auto">
         <!-- User -->
         <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
               <div class="avatar avatar-online">
                  <img src="../assets/img/avatars/default-user.png" alt class="w-px-40 h-auto rounded-circle" />
               </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
               <li>
                  <a class="dropdown-item" href="#">
                     <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                           <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/default-user.png" alt class="w-px-40 h-auto rounded-circle" />
                           </div>
                        </div>
                        <div class="flex-grow-1">
                           <span class="fw-medium d-block">Arturo Santana</span>
                           <small class="text-muted">Administrador</small>
                        </div>
                     </div>
                  </a>
               </li>
               <li>
                  <div class="dropdown-divider"></div>
               </li>
               <li>
                  <a class="dropdown-item" href="#">
                  <i class="bx bx-user me-2"></i>
                  <span class="align-middle">Mi perfil</span>
                  </a>
               </li>
               <li>
                  <a class="dropdown-item" href="#">
                  <i class="bx bx-cog me-2"></i>
                  <span class="align-middle">Ajustes</span>
                  </a>
               </li>
               <li>
                  <div class="dropdown-divider"></div>
               </li>
               <li>
                  <a class="dropdown-item" href="javascript:void(0);">
                  <i class="bx bx-power-off me-2"></i>
                  <span class="align-middle">Cerrar sesión</span>
                  </a>
               </li>
            </ul>
         </li>
         <!--/ User -->
      </ul>
   </div>
</nav>
<!-- / Navbar -->
<!-- Content wrapper -->
<div class="content-wrapper">