<?php

$agregar = $_POST['id'];

class shoppingCar{
    private $cantidad;

    public function setItem(){
        $cantidad = $_SESSION['cantidad'];
        return $cantidad;
    }

}

?>