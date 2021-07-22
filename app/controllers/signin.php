<?php

include_once '../controllers/user.php';

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

if($password != $confirmPassword){
    //Acciones a seguir en caso de que las contraseñas no coincidan
    echo "Las contraseñas no coinciden";
}
else if(isset($name,$lastname,$username,$password,$confirmPassword)){
    $user = new User();
    $user->createNewUser($username,$password);    
}
else{
    //Acciones a seguir en otros casos
    echo "Error desconocido";
}

?>