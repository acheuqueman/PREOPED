<div class="card">
    <div class="card-header">
        <h5><span class="oi oi-key"></span> PREOPEDigital</h5>
    </div>
    <div class="card-body">
        <p>Bienvenid@, <?= $_SESSION["usuario"]->nombre; ?>.</p>
        <small>Si Ud. no es <?= $_SESSION["usuario"]->nombre; ?>, por favor click en el bot&oacute;n <b>Salir</b></small>
        <div class="list-group">
            <a href="../Vista/salir.php" class="list-group-item list-group-item-action list-group-item-danger"><span class="oi oi-account-logout"></span> Salir del Sistema</a>
        </div>                            
    </div>
</div>
