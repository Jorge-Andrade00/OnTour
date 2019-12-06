<?php
include_once 'app/ControlSesion.inc.php';
include_once 'app/config.inc.php';
?>
<!--Barra de la página-->
<nav class="navbar navbar-default navbar-fixed-top">
    <!--div: Puedes verlo como una caja con sus dimensiones respectivas(En este caso el div tiene una clase container; nos permitirá contener)-->
    <div class="container">
        <div class="navbar-header">
            <!--crea botón de despliege ante un colapso(pantalla más pequeña)-->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <!--span es una linea de texto. En este caso tiene la clase scream reader(para personas ciegas)-->
                <span class="sr-only">Este botón despliega la barra de naavegación</span>
                <!--este span dibuja un ícono de una la barra de despliegue(En este caso tendremos 3 ya que son 3 los span creados)-->
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
            <!--creamos la cabezera de la página-->
            <!--a: crea enlaces para ir a otras páginas clickeando. En este caso la etiqueta a contiene la clase navbar-brand(significa logotipo de navegación)-->
            <a class="navbar-brand" href="<?php echo SERVIDOR ?>">OnTour</a>
        </div>
        <!--Crea la lista para el botón de despliegue utilizando un ID como renferencia para el data-target del que se pide en el botón de despligue-->
        <div id="navbar" class="navbar-collapse collapse">
            <!--ul:unorder list-->
            <ul class="nav navbar-nav">
                <!--li: objetos de la lista-->
                <?php
                if (ControlSesion::sesion_iniciada()) {
                ?>
                <li><a href="<?php echo RUTA_PAQUETES ?>">Paquetes</a></li>
                <li><a href="<?php echo RUTA_CONTACTO ?>">Contacto</a></li>
                <?php
                }else
                {
                ?>
                <li><a href="<?php echo RUTA_DESTINOS ?>">Destinos</a></li>
                <li><a href="<?php echo RUTA_ABOUT ?>">Quiénes somos</a></li>
                <li><a href="<?php echo RUTA_CONTACTO ?>">Contacto</a></li>
                <?php
                }
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (ControlSesion::sesion_iniciada()) {
                    ?>
                <li>
                    <a href="<?php echo RUTA_PERFIL ?>">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        <?php echo ' ' . $_SESSION['nombre_usuario']; ?>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Gestor <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">
                                Contenido
                            </a>
                            <a href="#">
                                Contenido
                            </a>
                            <a href="#">
                                Contenido
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo RUTA_LOGOUT ?>">
                        <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Cerrar sesión
                    </a>
                </li>
                    <?php
                } else 
                {
                    ?>
                <li><a href="<?php echo RUTA_LOGIN ?>"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Iniciar sesión</a></li>
                <li><a href="<?php echo RUTA_REGISTRO ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Registar</a></li>
                    <?php
                }
                ?>
                
            </ul>
        </div>

    </div>
</nav>
