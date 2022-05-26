<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    require('controlador/gestionProducto.php');
} else {
    require('vista/inicioSesion.php');
}