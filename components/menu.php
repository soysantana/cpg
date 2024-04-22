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
      <li class="menu-item ">
         <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Dashboards">Dashboards</div>
         </a>
         <ul class="menu-sub">
            <li class="menu-item ">
               <a href="/cpg/pages/pages-dashboards.php" class="menu-link">
                  <div data-i18n="Analytics">Analisis</div>
               </a>
            </li>
         </ul>
      </li>
      <!-- Forms & Tables -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Forms</span></li>
      <!-- Forms -->
      <li class="nbdyna menu-item">
         <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bxs-user-account"></i>
            <div data-i18n="Clientes">Clientes</div>
         </a>
         <ul class="menu-sub">
            <li class="menu-item">
               <a href="/cpg/pages/pages-add-client.php" class="menu-link">
                  <div data-i18n="add-client">Nuevo Cliente</div>
               </a>
            </li>
            <li class="menu-item">
               <a href="" class="menu-link">
                  <div data-i18n="Zona">Zona</div>
               </a>
            </li>
            <li class="menu-item">
               <a href="" class="menu-link">
                  <div data-i18n="Categoria">Categoria</div>
               </a>
            </li>
         </ul>
      </li>
      <li class="menu-item">
         <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-detail"></i>
            <div data-i18n="Legal">Legal</div>
         </a>
         <ul class="menu-sub">
            <li class="menu-item">
               <a href="" class="menu-link">
                  <div data-i18n="Carta de cobro">Carta de cobro</div>
               </a>
            </li>
            <li class="menu-item">
               <a href="" class="menu-link">
                  <div data-i18n="Intimacion de pago">Intimacion de pago</div>
               </a>
            </li>
            <li class="menu-item">
               <a href="" class="menu-link">
                  <div data-i18n="Acuerdos">Acuerdos</div>
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
               <a href="" class="menu-link">
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

<script>
   document.addEventListener("DOMContentLoaded", function() {
    var currentUrl = new URL(window.location.href).pathname; // Obtener la URL actual sin el dominio

    // Obtener todos los elementos de menú que tienen enlaces
    var menuItems = document.querySelectorAll('.menu-item');

    // Iterar sobre cada elemento de menú
    menuItems.forEach(function(item) {
        var itemUrl = item.querySelector('.menu-link').getAttribute('href'); // Obtener la URL del elemento de menú

        // Verificar si la URL actual coincide con la URL del elemento de menú
        if (currentUrl === itemUrl) {
            // Si el elemento de menú tiene la clase 'nbdyna', agregar 'active open'
            if (item.classList.contains('nbdyna')) {
                item.classList.add('active', 'open');
            } else {
                item.classList.add('active');
            }
            
            // Marcar como activos todos los elementos secundarios del menú
            var subMenuItems = item.querySelectorAll('.menu-sub .menu-item');
            subMenuItems.forEach(function(subItem) {
                subItem.classList.add('active');
            });
        }
    });
});

</script>