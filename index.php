<?php 
    require_once "configuration/configuration.php";
    require_once "core/route.php";
    require_once "controllers/indexController.php";
    require_once "controllers/AlojamientoController.php";
    require_once "controllers/atractivoController.php";
    require_once "controllers/paquetesController.php";
    require_once "controllers/vehiculosController.php";

    if(isset($_GET['c'])){
        if(isset($_GET['c'])){
            $controlador = cargarControlador($_GET['c']);
            if(isset( $_GET['a'])){
                cargarAccion($controlador, $_GET['a']);
            }else{
                cargarAccion($controlador, ACCION_PRINCIPAL);
            }
        }else{
            $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
            cargarAccion($controlador, ACCION_PRINCIPAL);
        }
    }else{
        $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
        cargarAccion($controlador, ACCION_PRINCIPAL);
    }
?>
