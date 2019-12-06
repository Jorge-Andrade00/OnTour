<?php
include_once 'app/Conexion.inc.php';
include_once 'app/config.inc.php';
include_once 'app/ControlSesion.inc.php';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-capitalize text-left">
                    Sobre nosotros
                </h1>
                <br>
                <p class="text-left">
                    Somos una agencia de viaje que se dedica hace más de 20 años a la venta de servicios de turismo,
                    en su mayoría fuera del país. Los servicios incluyen viajes, estadía y actividades en paquetes 
                    turísticos. Sus clientes son personas, organizaciones públicas y organizaciones privadas.
                    En los últimos 5 años, la agencia ha incursionado en paquetes turísticos para giras de estudio,
                    debido a que existe un aumento de la demanda de este tipo de servicios por la baja en los precios 
                    de los vuelos y la tendencia de los colegios a desarrollar este tipo de actividades.
                </p>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'plantillas/documento-cierre.inc.php';
?>
