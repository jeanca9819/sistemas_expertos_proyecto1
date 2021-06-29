<?php

    require_once "core/Vehiculo.php";
    require_once "core/Request.php";
    class vehiculosController {

        public function vehiculosAction() {

        $vehiculo = new Vehiculo();
        $request = new Request();
        $results = [];

        if(strtolower($_SERVER['REQUEST_METHOD']) === 'post') {

            $vehiculo->setData($request->getBody()); // Get data from user from UI
            $results = $vehiculo->getDbData(); // Get data from data base
        }

            require_once "views/vehiculosView.php"; 
        } 
    }
?>

