<?php
include_once 'app/Conexion.inc.php';
include_once 'app/config.inc.php';
include_once 'app/ControlSesion.inc.php';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>
<div class="container">
    <div class="jumbotron">
        <div class="container">
            <div class="row profile">
                <div class="col-md-3">
                    <div class="profile-sidebar">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic">
                            <img src="https://static.change.org/profile-img/default-user-profile.svg" class="img-responsive" alt="">
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                <?php echo ' ' . $_SESSION['nombre_usuario']; ?>
                                <br>
                                <br>
                            </div>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                        <!-- SIDEBAR BUTTONS -->
                        <div class="profile-userbuttons">
                            <button type="button" class="btn btn-success btn-sm">Abonar</button>
                        </div>
                        <!-- END SIDEBAR BUTTONS -->
                        <!-- SIDEBAR MENU -->
                        <div class="profile-usermenu">
                            <ul class="nav">
                                <li>
                                    <a href="#">
                                        <i class="glyphicon glyphicon-user"></i>
                                        Configuración de la cuenta </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="glyphicon glyphicon-ok"></i>
                                        Tareas </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="glyphicon glyphicon-flag"></i>
                                        Ayuda </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END MENU -->
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="profile-content">
                        <br>
                        <br>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Tus servicios
                            </div>
                            <div class="panel-body">
                                <a href="<?php echo RUTA_PAQUETES ?>">No has contratado servicios</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
</div>
<?php
include_once 'plantillas/documento-cierre.inc.php';
?>