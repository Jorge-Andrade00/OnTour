<?php
include_once 'app/config.inc.php';
include_once 'app/Redireccion.inc.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <!--permite el uso de tildes y cosas por ese estilo-->
        <meta charset="UTF-8">
        <!--permite compatibilidad con IExplorer; ya que este es medio webiado-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Ajuste para tamaño normal de la pagina-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php
        if(!isset($titulo) || empty($titulo))
        {
            $titulo = 'Agencia de viajes OnTour';
        }
            echo "<title>$titulo</title>";
        ?>

        <!--Incluimos archivo css para poder utilizarlo-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Incluimos nuevo archivo css para crear nuestros estilos.-->
        <link href="css/estilos.css" rel="stylesheet">
    </head>
    <body>
