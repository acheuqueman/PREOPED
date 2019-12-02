<?php
/*
 * diagnostico: texto
 * tipo_discapacidad: selectoptions o radio
 * descripcion: textarea
 * 
 */

    include_once '../modelo/Diagnostico.class.php';
    include_once '../modelo/DiagnosticoMapper.php';
    $Mapper = new DiagnosticoMapper();
    $Diagnostico = new Diagnostico($Mapper->findById(2));
    var_dump($Diagnostico);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="diagnostico.actualizar.procesar.php" method="POST">
            

            <input type="hidden" name="id" value="<?= $Diagnostico->getId() ?>">
            <p>Diagnostico</p>
            <p>
                <input type="text" name="diagnostico" value="<?= $Diagnostico->getDiagnostico() ?>">
            </p>

            <p>Tipo Discapacidad</p>
            <p>
                <select name="tipo_discapacidad">
                    <option value="opcion1" <?= ($Diagnostico->getTipo_discapacidad()) =="opcion1" ? "selected":null; ?>>Opcion1</option>
                    <option value="opcion2" <?= ($Diagnostico->getTipo_discapacidad()) =="opcion2" ? "selected":null; ?>>Opcion2</option>
                    
                </select>
            </p>
            <p>Descripcion</p>
            <p>
                <textarea name="descripcion"> <?= $Diagnostico->getDescripcion() ?> </textarea>
            </p>

            <p>
                <input type ="submit">  
            </p>

        </form>
    </body>
</html>




