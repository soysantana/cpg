<?php include_once('../config/load.php'); ?>

<?php

$req_fields = array('username','password');
validate_fields($req_fields);
$username = remove_junk($_POST['username']);
$password = remove_junk($_POST['password']);

if(empty($errors)){
  $user_id = authenticate($username, $password);
  if($user_id){
     $session->login($user_id);
     updateLastLogIn($user_id);
     $session->msg("s", "Bienvenido a Compra Venta y Prestamos Garcia");
     redirect('../pages/pages-dashboards.php',false);

  } else {
    $session->msg("d", "Nombre de usuario y/o contraseña incorrecto.");
    redirect('auth-login.php',false);
  }

} else {
   $session->msg("w", $errors);
   redirect('auth-login.php',false);
}

?>