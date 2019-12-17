<?php
/*
 * diagnostico: texto
 * tipo_discapacidad: selectoptions o radio
 * descripcion: textarea
 * 
 */
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="diagnostico.crear.procesar.php" method="POST">

            <p>Diagnostico</p>
            <p>
                <input type="text" name="diagnostico">
            </p>

            <p>Tipo Discapacidad</p>
            <p>
                <select name="tipo_discapacidad">
                    <option value="opcion1">Opcion1</option>
                    <option value="opcion2">Opcion2</option>
                </select>
            </p>
            <p>Descripcion</p>
            <p>
                <textarea name="descripcion"> </textarea>
            </p>

            <p>
                <input type ="submit">  
            </p>

        </form>
    </body>
</html>




