<?php
class usuariosController{
    public function index(){
        echo "Controlador usuarios, acción Index";
    }

    public function registro(){
        require_once 'views/usuarios/registro.php';
    }

    public function guardar_usuario(){

    }
}