<!doctype html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="style.css" rel="stylesheet">

  <link href="bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
  <title>PREOPED</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 bg-dark" padding>
        <!-- Navbar --> 
        <?php include_once 'bloques/navbar.html'; ?>
      </div>
    </div>

    <div class="row">
      <div class="col-6">
        <button type="button" class="btn btn-light"> + </button>
        <table class="table">
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
          </tbody>
        </table>
      </div>
      <div class="col-6">
        <div class="row">
          <div class="col-3">
            <button type="button" class="btn btn-link">Ver</button>
          </div>
          <div class="col-3">
            <button type="button" class="btn btn-link">Editar</button>
          </div>
          <div class="col-3">
            <button type="button" class="btn btn-link">Eliminar</button>
          </div>
        </div>


      </div>
    </div>






  </div>


</body>

</html>