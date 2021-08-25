<?php //Foma en la cual empieza el código PHP

/* Para crear una constante debemos utilizar un método de PHP que se llama define*/

$nombre_carpeta = str_replace('C:\\xampp\\bictia\\htdocs\\', '/',__DIR__);

$nombre_carpeta = str_replace('config', '', $nombre_carpeta);

if ( !defined("ROOT") ){
    define("ROOT", "http://".$_SERVER['HTTP_HOST'] . $nombre_carpeta);
}