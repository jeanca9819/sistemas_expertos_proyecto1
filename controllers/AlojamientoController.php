<?php

require_once "core/Euclides.php";
require_once "core/Alojamiento.php";
require_once "core/Request.php";

class AlojamientoController
{
    public function alojamiento() {

        $euclides = new Euclides();
        $alojamiento = new Alojamiento();
        $request = new Request();
        $results = [];

        if(strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
            $storedData = $alojamiento->getDbData();
            $values = $alojamiento->setData($request->getBody());

            $results = $euclides->calculateDistance($values, $storedData, 'id_class');
            $results = $alojamiento->getClassesFromDb($results);
        }

        require_once "views/alojamientoView.php";
    }
}