<?php
require('modelo/clsProductoAcceso.php');

$datos = new clsProductoAcceso();
$lstProductos = $datos->listar();

require('vista/paginaProducto.php');
