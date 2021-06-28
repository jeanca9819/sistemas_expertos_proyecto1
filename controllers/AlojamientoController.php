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

            $storedData = $alojamiento->getDbData(); // Get data from data base
            $values = $alojamiento->setData($request->getBody()); // Get data from user from UI

            $results = $euclides->calculateDistance($values, $storedData, 'id_class'); // Calculate distance with Euclides Algorithm
            $results = $alojamiento->getClassesFromDb($results); // Associates class data to each distance
        }

        require_once "views/alojamientoView.php";
    }
}