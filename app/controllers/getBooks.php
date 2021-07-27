<?php

include_once './app/controllers/connect.php';

class book extends db{
    private $titulos;
    private $autores;
    private $editorial;
    private $year;
    private $isbn;

    public function getbooks(){
        $query = $this->connect()->prepare("SELECT * FROM libreria");
        $query->execute();
        $result = [];
        
        if(!$query){
            print "Error al realizar consulta";
        }

        while($libro = $query->fetch()){
            array_push($result,['id'=>$libro['id'],'titulo'=>$libro['titulo'],'autor'=>$libro['autor'],'editorial'=>$libro['editorial'],'year'=>$libro['year'],'ISBN'=>$libro['ISBN']]);
        }

        return $result;
    }
}

?>