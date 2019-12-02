<?php
/*
 * diagnostico: texto
 * tipo_discapacidad: selectoptions o radio
 * descripcion: textarea
 * 
 */
    include_once '../modelo/Asignatura.class.php';
    include_once '../modelo/AsignaturaMapper.php';

    $Mapper = new AsignaturaMapper();
    $Asignatura = new Asignatura($Mapper->findById(2));
    var_dump($Asignatura);

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="asignatura.actualizar.procesar.php" method="POST">

            <input type="hidden" name="id" value="<?= $Asignatura->getId() ?>">

            <p>Nombre Asignatura<p>
            <p>
                <input type="text" name="nombre" value="<?= $Asignatura->getNombre() ?>">
            </p>

            <p>
                <input type ="submit">  
            </p>

        </form>
    </body>
</html>




