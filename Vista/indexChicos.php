<!doctype html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="style.css" rel="stylesheet">

    <link href="../lib/bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
    <script src="../lib/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <link href="../lib/open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <title>PREOPED</title>
</head>

<body>
    <?php include_once '../bloques/navbar.php'; ?>
    <div class="container">

        <div class="row">&nbsp;</div>

        <div class="row">
            <div class="col-9">
                <div class="row">
                    <div class="col-9">
                        <div class="card">
                            <div class="card-title">Buscador de Álumnos</div>
                            <div class="card-body">buscar</div>
                        </div>
                    </div>
                    <div class="col-3">
                        Usuario
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">&nbsp;</div>
                        <button type="button" class="btn btn-success btn-lg oi oi-plus"> Nuevo </button>
                        <br />
                        <table class="table table-striped table-light   ">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>
                                        <button type="button" class="btn btn-primary oi oi-magnifying-glass"></button>
                                        <button type="button" class="btn btn-warning oi oi-pencil"></button>
                                        <button type="button" class="btn btn-danger oi oi-delete"></button>
                                    </td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="row">
                    <div class="col-12">
                        Carga Rapida
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        Configuracion
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>