<?php
class Usuarios{
    private $id;
    private $id_persona;
    private $id_perfil;
    private $usuario;
    private $clave;
    private $url_imagen;
    private $estado;
    private $id_usuario_creacion;

    private $db;

    public function __construct(){
        $this->db = Database::connect();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIdPersona()
    {
        return $this->id_persona;
    }

    public function setIdPersona($id_persona)
    {
        $this->id_persona = $id_persona;
    }

    public function getIdPerfil()
    {
        return $this->id_perfil;
    }

    public function setIdPerfil($id_perfil)
    {
        $this->id_perfil = $id_perfil;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $this->db->real_escape_string($usuario);
    }

    public function getClave()
    {
        //return $this->clave;
        return password_hash($this->db->real_escape_string($this->clave), PASSWORD_BCRYPT, ['cost'=>4]);
    }

    public function setClave($clave)
    {
        $this->clave = $clave;
    }

    public function getUrlImagen()
    {
        return $this->url_imagen;
    }

    public function setUrlImagen($url_imagen)
    {
        $this->url_imagen = $this->db->real_escape_string($url_imagen);
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getIdUsuarioCreacion()
    {
        return $this->id_usuario_creacion;
    }

    public function setIdUsuarioCreacion($id_usuario_creacion)
    {
        $this->id_usuario_creacion = $id_usuario_creacion;
    }

    public function save(){
        $sql = "call uspset_usuario('INSERT_UPDATE',0,1,2,'{$this->getUsuario()}','{$this->getClave()}','imagen.jpg',1,1)";
        $save = $this->db->query($sql);

        $result = false;
        if ($save){
         $result = true;
        }else {
            echo "Error en la consulta: " . $this->db->error;
        }
        return $result;
    }

    public function login(){
        $resultado = false;
        $email = $this->usuario;
        $clave = $this->clave;

        $sql = "SELECT * from usuarios where usuario = '$email'";
        $login = $this->db->query($sql);


        if ($login && $login->num_rows==1){
            $usuario = $login->fetch_object();
            //Verificar la clave
            $verificar_clave = password_verify($clave,$usuario->clave);

            if ($verificar_clave){
                $resultado = $usuario;
            }

        }
        return $resultado;
    }

}