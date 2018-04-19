<?php

//clase para llamar vistas y mostrarlas en el index.php
class ControladorPlantilla {
    
    //metodo para mostrar las vistas
    public function plantilla() {

        include "vistas/plantilla.php";
    }
}

?>
