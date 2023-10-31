<?php
class personas{
    private $id;
    private $id_tipo_documento;
    private $num_documento;
    private $nombres;
    private $primer_apellido;
    private $segundo_apellido;
    private $telefono;
    private $direccion;
    private $correo;
    private $fecha_nacimiento;
    private $estado;
    private $id_usuario_creacion;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIdTipoDocumento()
    {
        return $this->id_tipo_documento;
    }

    public function setIdTipoDocumento($id_tipo_documento)
    {
        $this->id_tipo_documento = $id_tipo_documento;
    }

    public function getNumDocumento()
    {
        return $this->num_documento;
    }

    public function setNumDocumento($num_documento)
    {
        $this->num_documento = $num_documento;
    }

    public function getNombres()
    {
        return $this->nombres;
    }

    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }

    public function getPrimerApellido()
    {
        return $this->primer_apellido;
    }

    public function setPrimerApellido($primer_apellido)
    {
        $this->primer_apellido = $primer_apellido;
    }

    public function getSegundoApellido()
    {
        return $this->segundo_apellido;
    }

    public function setSegundoApellido($segundo_apellido)
    {
        $this->segundo_apellido = $segundo_apellido;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function getFechaNacimiento()
    {
        return $this->fecha_nacimiento;
    }

    public function setFechaNacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
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


}