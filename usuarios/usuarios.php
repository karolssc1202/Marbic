<?php 

 include_once('../Config/Database.php');
 class Usuarios{
 public $conn;

 /* Es la primer función que se ejecuta cuando llamamos la clase  */
 function construct(){
    $db = new Database();//Queremos crear una nueva conexión a la base de datos.
    $this->conn = $db->construct(); //Ejecuté la función __construct.
}

 function crear_usuario($datos_usuario){
 $nombre = $datos_usuario ['nombre'];
 $apellido = $datos_usuario ['apellido'];
 $correo_electronico = $datos_usuario ['correo_electronico'];
 $contrasena = $datos_usuario ['contrasena'];
 $celular = $datos_usuario ['celular'];
 $rol = $datos_usuario ['rol'];

 $guardar_datos = " INSERT INTO  usuarios VALUES ( NULL, '$nombre', '$apellido', '$correo_electronico', '$contrasena', $celular, '$rol' )";
 echo $guardar_datos;
 return mysqli_query($this->conn, $guardar_datos);

} 

function ver_usuarios(){
    $ver_usuarios = "SELECT * FROM usuarios";
    return mysqli_query($this->conn, $guardar_datos);


}
 }
?>