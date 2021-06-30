<?php

namespace app\configuration;

    //Esta clase se encarga de realizar la conexión con la base de datos MySQL. 
    class Conectar {

        public static function conexion() {
            $conexion = new \mysqli("remotemysql.com", "cFX3CfJROE", "FccpOmdXqB", "cFX3CfJROE", 3306);
            return $conexion;
        }

        public static function conexion2() {
            $conexion = new \mysqli("163.178.107.10", "laboratorios", "KmZpo.2796", "proyecto1_expertos_g4", 3306);
            return $conexion;
        }
/*
        public static function conexion2() {
            $conexion = new mysqli("localhost", "root", "mysql", "proyecto1_expertos_g4", 3306);
            return $conexion;

        }*/
    }


?>