<?php 

    include_once('../config/config.php');
    include_once('usuarios.php'); //Llamamos al archivo Usuario.php

    $usuarios = new usuario();

    /**se llama la funcion eliminar usuarios y se envia el id del usuario que se quiere eliminar.
     * 
     * si se elimina, entonces recargamos la pagina.
     * si NO se elimina, entonces mostramos un error.
     */
    if($usuarios->$eliminar_usuarios ( $_GET ['id'] ) ){
header( 'Location: '. ROOT . '/usuarios/ver.php');
}else{
    echo '<div>error</div>';
}


?>