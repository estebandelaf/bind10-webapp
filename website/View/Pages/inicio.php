<div class="jumbotron">
  <h1>Servicio de DNS</h1>
  <p>Aquí podrá registrar y administrar, de forma gratuita, registros para sus dominios.</p>
  <p><a class="btn btn-primary btn-lg" href="<?=$_base?>/usuarios/registrar" role="button">¡Registro gratuito!</a></p>
  <p>Este sitio funciona utilizando el <a href="https://github.com/SowerPHP/Bind10">módulo Bind10</a> del framework <a href="http://sowerphp.org">SowerPHP</a>.</p>
</div>

<div class="row">
    <div class="col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Servidor primario</h2>
            </div>
            <div class="panel-body">
                <span class="label label-primary" style="font-size:1.3em">ns1.sasco.cl</span>
            </div>
        </div>
    </div>
    <div class="col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Servidor secundario</h2>
            </div>
            <div class="panel-body">
                <span class="label label-info" style="font-size:1.3em">ns2.sasco.cl</span>
            </div>
        </div>
    </div>
</div>

<div style="text-align:center">
<?php new \sowerphp\general\Multimedia\View_Helper_Imagenes('/archivos/multimedia/imagenes/screenshots'); ?>
</div>
