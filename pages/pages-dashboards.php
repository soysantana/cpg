<?php
  $page_title = 'Page: Dashboards';
  require_once('../config/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('../index.php', false);}
?>

<?php include_once('../components/navbar.php');  ?>

<div class="container-xxl flex-grow-1 container-p-y">
<?php echo display_msg($msg); ?>
</div>

<?php include_once('../components/footer.php');  ?>