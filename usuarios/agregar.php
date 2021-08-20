<?php
// todo lo que escribamos es php
include_once('../config/config.php');
include_once('usuarios.php'); //llamamos al archivo


if ( isset($_POST) && !empty($_POST) ){
    $nuevo_usuario = new usuarios(); 
    $nuevo_usuario->crear_usuario($_POST);

    if ($nuevo_usuario){
        echo "Muy bien, usuario guardado";
    }
 }



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
</head>


<body>
<div class="container">
 <form action=""></form>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">nombres</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">apellidos</label>
                <input type="text" class="form-control" id="apellido" name="apellido" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="correo_electronico" class="form-label">correo electronico</label>
                <input type="text" class="form-control" id="correo_electronico" name="correo_electronico" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="contrasena" class="form-label">contraseña</label>
                <input type="text" class="form-control" id="contrasena" name="contrasena" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="celular" class="form-label">Celular</label>
                <input type="text" class="form-control" id="celular" name="celular" aria-describedby="emailHelp">
                <div class="mb-3">

                <div class="mb-3">
                <select class="form-select" aria-label="Default select example" id="rol" name="rol" >
                    <option selected>Seleccione un rol</option>
                    <option value="Administrativo">Administrativo</option>
                    <option value="Profesor">Profesor</option>
                    <option value="Estudiante">Estudiante</option>
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>