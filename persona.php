<?php
 class Persona {
     public $nombre;
     public $apellidos;



     function __construct()
    {
        $this->nombre="qqqq";
    }

     function setNombre($nombre)
     {
         $this->nombre = $nombre;
     }
     function  getNombre()
     {
         return $this->nombre;
     }
     public function getApellidos()
     {
         return $this->apellidos;
     }
     public function setApellidos($apellidos)
     {
         $this->apellidos = $apellidos;
     }
 }