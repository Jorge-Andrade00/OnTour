<?php
include_once 'app/Conexion.inc.php';
$titulo = 'Agencia de viajes OnTour';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>

<div class="container">
    <div class="jumbotron">
        <h1>Turismo OnTour</h1>
        <p>
            Venta de servicios turisticos nacionales e internacionales.
        </p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Búsqueda
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <input type="search" class="form-control" placeholder="¿Qué buscas?">
                            </div>
                            <button class="form-control">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Servicios
                </div>
                <div id="carousel-1" class="carousel slide" data-ride="carousel"> <!--aqui inicia el intento-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item  active">
                            <img src="img/arg.png" class="img-responsive" alt="" style="width:822px;height:322px;"> <!-- style="width:822px;height:322px;" --> <!-- YA ME QUEDO CLARO POR QUE TODAS LAS IMAGENES MISMO TAMAÑO -->
                            <div class="carousel-caption">
                                <h3>Disfruta de los encantos de Buenos Aires</h3>
                                 <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <!-- #2 -->
                        <div class="item ">
                            <img src="img/puerto.png" class="img-responsive" alt="" style="width:822px;height:322px;">
                            <div class="carousel-caption">
                                 <h3>Conoce el sur de Chile</h3>
                                 <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <!-- #3 -->
                        <div class="item ">
                            <img src="img/madrid.png" class="img-responsive" alt="" style="width:822px;height:322px;">
                            <div class="carousel-caption">
                                <h3>Viaja hasta el antiguo continente</h3>
                                 <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--aqui termina el intento-->
        </div>
    </div>
</div>
</div>

<?php
include_once 'plantillas/documento-cierre.inc.php';
?>
