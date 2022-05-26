<?php
require('modelo/clsConexion.php');

class clsProductoAcceso
{
    //atributos
    private $conexion;

    //metodos
    public function __construct()
    {
        $this->conexion = new clsConexion();
    }
    public function listar()
    {
        $sql = 'SELECT * FROM producto';
        $consulta = $this->conexion->getConexion()->query($sql);
        $listadoProductos = [];
        $i = 0;
        while ($resul = $consulta->fetch_assoc()) {
            $listadoProductos[$i] = $resul;
            $i++;
        }
        return $listadoProductos;
    }
}
