<?php
class servicios{
    private $id;
    private $servicio;
    private $estado;
    private $id_usario_creacion;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getServicio()
    {
        return $this->servicio;
    }

    public function setServicio($servicio)
    {
        $this->servicio = $servicio;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getIdUsarioCreacion()
    {
        return $this->id_usario_creacion;
    }

    public function setIdUsarioCreacion($id_usario_creacion)
    {
        $this->id_usario_creacion = $id_usario_creacion;
    }

}

