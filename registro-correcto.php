<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/Redireccion.inc.php';

if(isset($_GET['nombre']) && !empty($_GET['nombre']))
{
    $nombre = $_GET['nombre'];
}
else
{
    Redireccion :: redirigir(SERVIDOR);
}

$titulo = '¡Registro exitoso!';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <br>
                <br>
                <br>
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Usuario registrado
                </div>
                <div class="panel-body text-center">
                    <p>¡Gracias por registrarte en OnTour <b><?php echo $nombre?></b>!</p>
                    <p>En nuestra página encontrarás los mejores precios y destinos para viajar.</p>
                    <br>
                    <p><a href="<?php echo RUTA_LOGIN ?>">Iniciar sesión</a> para empezar.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'plantillas/documento-cierre.inc.php';
?>