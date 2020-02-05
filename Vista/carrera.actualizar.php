<?php
/*
 * diagnostico: texto
 * tipo_discapacidad: selectoptions o radio
 * descripcion: textarea
 * 
 */
    include_once '../modelo/Carrera.class.php';
    include_once '../modelo/CarreraMapper.php';
    
    $Mapper = new CarreraMapper();
    $Carrera = new Carrera($Mapper->findById($_GET[id]));
    var_dump($Carrera);

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="carrera.crear.procesar.php" method="POST">

            <input type="hidden" name="id" value="<?= $Carrera->getId() ?>">
            <p>Nombre Carrera<p>
            <p>
                <input type="text" name="nombre" value="<?= $Carrera->getNombre() ?>">
            </p>

            <p>
                <input type ="submit">  
            </p>

        </form>
    </body>
</html>




