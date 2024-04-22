<?php include_once('../config/load.php'); ?>

<?php
if(isset($_POST['add_user'])){

    $req_fields = array('fullname','username','password','user_level');
    validate_fields($req_fields);

    if(empty($errors)){
        $name   = remove_junk($db->escape($_POST['fullname']));
        $username   = remove_junk($db->escape($_POST['username']));
        $password   = remove_junk($db->escape($_POST['password']));
        $user_level = (int)$db->escape($_POST['user_level']);
        $password = sha1($password);
        $id = uuid();
        $query = "INSERT INTO users (";
        $query .="id,name,username,password,user_level,status";
        $query .=") VALUES (";
        $query .="'{$id}', '{$name}', '{$username}', '{$password}', '{$user_level}','1'";
        $query .=")";
        if($db->query($query)){
            $session->msg('s',"Cuenta de usuario ha sido creada");
            if(!$session->logout()) {
                redirect("auth-login.php");
            }
        } else {
            $session->msg('d','No se pudo crear la cuenta.');
            redirect('auth-register.php', false);
        }
    } else {
        $session->msg("d", $errors);
        redirect('auth-register.php',false);
    }
}
?>