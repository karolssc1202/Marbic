<?php 

include_once('../Config/Database.php');
class Usuarios{
public $conn;

/* Es la primer función que se ejecuta cuando llamamos la clase  */
function __construct(){
    $db = new Database();//Queremos crear una nueva conexión a la base de datos.
    $this->conn = $db->__construct(); //Ejecuté la función __construct.
}

function crear_usuario($datos_usuario){
    $nombre = $datos_usuario ['nombre'];
    $numero_sillas = $datos_usuario ['numero_sillas'];
    $numero_mesas = $datos_usuario ['numero_mesas'];
    $numero_mesas_grande = $datos_usuario['numero_mesas_grande'];
    $numero_televisor = $datos_usuario ['numero_televisor'];
    $numero_puerta_corrediza = $datos_usuario ['numero_puerta_corrediza'];
    $numero_microscopio = $datos_usuario ['numero_microscopio'];
    $numero_antibacterial = $datos_usuario ['numero_antibacterial'];
    $numero_alcohol = $datos_usuario ['numero_alcohol'];
    $numero_toallas = $datos_usuario['numero_toallas'];
    $numero_balones = $datos_usuario ['numero_balones'];
    
$guardar_datos = " INSERT INTO  usuarios ( NULL, '$nombre' $numero_sillas, $numero_mesas, $numero_mesas_grande, numero_televisor, numero_puerta_corrediza, numero_microscopio, numero_antibacterial,numero_alcohol , numero_toallas, numero_balones)";
echo $guardar_datos;
return mysqli_query($this->conn, $guardar_datos);


}


}