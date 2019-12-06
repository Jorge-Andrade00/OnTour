<?php
//include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Usuario.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/ValidadorRegistro.inc.php';
include_once 'app/Redireccion.inc.php';

if (isset($_POST['enviar'])) {
    Conexion :: abrir_conexion();
    
    $validador = new ValidadorRegistro($_POST['nombre'], $_POST['email'], $_POST['clave1'], $_POST['clave2'], Conexion :: obtener_conexion());
    
    if ($validador -> registro_valido()) 
    {
        $usuario = new Usuario('', $validador-> obtener_nombre(), $validador -> obtener_email(),password_hash($validador -> obtener_clave(), PASSWORD_DEFAULT),'','');
        $usuario_insertado = RepositorioUsuario :: insertar_usuario(Conexion :: obtener_conexion(), $usuario);
        
        if ($usuario_insertado) {
            Redireccion :: redirigir(RUTA_REGISTRO_CORRECTO . '?nombre=' . $usuario -> obtener_nombre());
        }
    }
    
    Conexion:: cerrar_conexion();
}

$titulo = 'Registro OnTour';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>
<div class="container">
    <div class="jumbotron">
        <h1 class="text-center">Formulario de registro</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Instrucciones
                    </h3>
                </div>
                <div class="panel-body">
                    <br>
                    <p class="text-justify">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem 
                        Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make 
                        a type specimen book.
                    </p>
                    <br>
                    <a href="<?php echo RUTA_LOGIN ?>">Click aquí si ya estás registrado</a>
                    <br>
                    <br>
                    <a href="#">¿Has olvidado tu contraseña?</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Registro de datos
                    </h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <?php
                        if (isset($_POST['enviar'])) 
                        {
                            include_once 'plantillas/registro_validado.inc.php';
                        }
                        else
                        {
                            include_once 'plantillas/registro_vacio.inc.php';
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'plantillas/documento-cierre.inc.php';
?>