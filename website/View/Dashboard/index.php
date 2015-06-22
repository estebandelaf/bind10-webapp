<h1>Dashboard</h1>

<div class="row mtbox">
    <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
        <div class="box1">
            <span class="fa fa-cloud"></span>
            <h3><?=$n_zonas?></h3>
        </div>
        <p><?=$n_zonas?> zona(s) administrada(s)</p>
    </div>
    <div class="col-md-2 col-sm-2 box0">
        <div class="box1">
            <span class="fa fa-database"></span>
            <h3><?=$n_registros?></h3>
        </div>
        <p>Total de <?=$n_registros?> registro(s) en la(s) zona(s)</p>
    </div>
    <div class="col-md-2 col-sm-2 box0">
        <div class="box1">
            <span class="fa fa-calendar"></span>
            <h3><?=$ultimo_serial?></h3>
        </div>
        <p>Último serial es <?=$ultimo_serial?></p>
    </div>
    <div class="col-md-2 col-sm-2 box0">
        <div class="box1">
            <span class="fa fa-clock-o"></span>
            <h3><?=$uptime?></h3>
        </div>
        <p>Uptime del servidor: <?=$uptime?></p>
    </div>
    <div class="col-md-2 col-sm-2 box0">
        <div class="box1">
            <span class="fa fa-desktop"></span>
            <h3><?=$memory?></h3>
        </div>
        <p>Uso de RAM <?=$memory?> MB</p>
    </div>
</div>
