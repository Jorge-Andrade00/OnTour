<?php
include_once 'app/Conexion.inc.php';
include_once 'app/config.inc.php';
include_once 'app/ControlSesion.inc.php';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row"> <!--primera fila-->
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Viaja por Europa
                        </div>
                        <div id="carousel-1" class="carousel slide" data-ride="carousel"> <!--aqui inicia el intento-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-1" data-slide-to="1"></li>
                                <li data-target="#carousel-1" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item  active">
                                    <img src="img/alpe.png" class="img-responsive" alt="" style="width:822px;height:322px;"> <!-- style="width:822px;height:322px;" --> <!-- YA ME QUEDO CLARO POR QUE TODAS LAS IMAGENES MISMO TAMAÑO -->
                                    <div class="carousel-caption">
                                        <h3>Visita Europa</h3>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                                <!-- #2 -->
                                <div class="item ">
                                    <img src="img/paris.png" class="img-responsive" alt="" style="width:822px;height:322px;">
                                    <div class="carousel-caption">
                                        <h3>Visita Europa</h3>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                                <!-- #3 -->
                                <div class="item ">
                                    <img src="img/ven.png" class="img-responsive" alt="" style="width:822px;height:322px;">
                                    <div class="carousel-caption">
                                        <h3>Visita Europa</h3>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="profile-userbuttons">
                                <a href="<?php echo RUTA_REGISTRO ?>">
                                    <button type="button" class="btn btn-success btn-sm">Ver</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Viaja por America
                        </div>
                        <div id="carousel-2" class="carousel slide" data-ride="carousel"> <!--aqui inicia el intento-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-2" data-slide-to="1"></li>
                                <li data-target="#carousel-2" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item  active">
                                    <img src="img/cuba.png" class="img-responsive" alt="" style="width:822px;height:322px;"> <!-- style="width:822px;height:322px;" --> <!-- YA ME QUEDO CLARO POR QUE TODAS LAS IMAGENES MISMO TAMAÑO -->
                                    <div class="carousel-caption">
                                        <h3>Visita America</h3>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                                <!-- #2 -->
                                <div class="item ">
                                    <img src="img/tpaine.png" class="img-responsive" alt="" style="width:822px;height:322px;">
                                    <div class="carousel-caption">
                                        <h3>Visita America</h3>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                                <!-- #3 -->
                                <div class="item ">
                                    <img src="img/lagoatlitan.png" class="img-responsive" alt="" style="width:822px;height:322px;">
                                    <div class="carousel-caption">
                                        <h3>Visita America</h3>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="profile-userbuttons">
                                <a href="<?php echo RUTA_REGISTRO ?>">
                                    <button type="button" class="btn btn-success btn-sm">Ver</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--primera fila-->
</div>

<?php
include_once 'plantillas/documento-cierre.inc.php';
?>