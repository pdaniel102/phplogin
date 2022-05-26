<?php

require('modelo/clsUsuarioAcceso.php');

$valid = new clsUsuarioAcceso($_POST['username'],$_POST['password']);
$valid->validar_usuario();

require('vista/inicioSesion.php');