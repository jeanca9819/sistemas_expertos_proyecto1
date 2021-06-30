<?php
require_once "core/Paquete.php";
require_once "core/Request.php";
class IndexController {

    function index() {

        $paquete = new Paquete();
        $request = new Request();
        $results = [];

        if(strtolower($_SERVER['REQUEST_METHOD']) === 'post') {

            $paquete->setData($request->getBody()); // Get data from user from UI
            $results = $paquete->getDbData(); // Get data from data base
        }


        require_once "views/indexView.php";
    }

}
