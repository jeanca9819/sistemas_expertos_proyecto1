<?php
require_once "core/Euclides.php";
require_once "core/Atractivo.php";
require_once "core/Request.php";

class atractivoController
{
    public function atractivo() {
        require_once "views/atractivoView.php";
        $euclides = new Euclides();
        $atractivo = new Atractivo();
        $request = new Request();

        if(strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
            $storedData = $atractivo->getDbData();
            $values = $atractivo->setData($request->getBody());

            $results = $euclides->calculateDistance($values, $storedData, 'clase_id');
            $results = $atractivo->getClassesFromDb($results);
        }

        require_once "views/atractivoView.php";
    }

    public function selected() {
        $selected = $_GET['a'];
    }
}