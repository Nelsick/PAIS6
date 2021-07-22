<?php

include_once './app/controllers/user.php';
include_once './app/controllers/user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
}else if(isset($_POST['username']) && isset($_POST['password'])){
    //Validar el login de acceso
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];
    
    if($user->userExists($userForm,$passForm)){
        //echo 'usuario validado';
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        include_once './app/views/home.php';
    }else{
        //echo 'nombre de usuario y/o contraseña incorrecto';
        $errorLogin = "Nombre de usuario y/o contraseña incorrecto";
        include_once './app/views/login.php';
    }
}else{
    include_once './app/views/login.php';
}

?>