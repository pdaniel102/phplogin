<?php
require('modelo/clsConexion.php');

class clsUsuarioAcceso
{
    private $conexion;
    private $username;
    private $password;

    //metodos
    public function __construct($username_arg, $password_arg)
    {
        $this->conexion = new clsConexion();
        $this->username = $username_arg;
        $this->username = $password_arg;
    }
    public function validar_usuario()
    {

        $sql = "SELECT * FROM usuario WHERE usuario = '$this->username'";
        $consulta = $this->conexion->getConexion()->query($sql);

        if ($consulta->num_rows > 0) {
        }
        $row = $consulta->fetch_array(MYSQLI_ASSOC);
        if (password_verify($this->password, $row['clave'])) {

            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $this->username;
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

            echo "Bienvenido " . $_SESSION['username'. "!"];
            echo "<br><br><a href=index.php>Volver a inicio</a>";
        } else {
            echo "Username o Password estan incorrectos.";

            echo "<br><a href='login.html'>Volver a Intentarlo</a>";
        }
        mysqli_close($this->conexion->getConexion());
    }
}
