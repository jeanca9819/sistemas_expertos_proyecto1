<?php

require_once "configuration/database.php";


class Alojamiento
{

    const TIPO_ALOJAMIENTO_ATTR = 'tipo_alojamiento';
    const SERVICIOS_ATTR = 'servicios';
    const PRECIOS_ATTR = 'precios';
    const ESTADIA_ATTR = 'estadia';
    const HABITACIONES_ATTR = 'habitaciones';

    public int $tipo_alojamiento = 0;
    public int $servicios = 0;
    public int $precios = 0;
    public int $estadia = 0;
    public int $habitaciones = 0;
    public array $values = [];

    public function __construct()
    {
        $this->values = [
            self::TIPO_ALOJAMIENTO_ATTR => $this->tipo_alojamiento,
            self::SERVICIOS_ATTR => $this->servicios,
            self::PRECIOS_ATTR => $this->precios,
            self::ESTADIA_ATTR => $this->estadia,
            self::HABITACIONES_ATTR => $this->habitaciones,
        ];
    }


    // assigns user input to model attributes
    public function setData($data) {
        foreach ($data as $key => $value) {
            if(property_exists($this, $key)) {
                $this->{$key} = (int) $value;
            }
        }

        $this->values = [
            self::TIPO_ALOJAMIENTO_ATTR => $this->tipo_alojamiento,
            self::SERVICIOS_ATTR => $this->servicios,
            self::PRECIOS_ATTR => $this->precios,
            self::ESTADIA_ATTR => $this->estadia,
            self::HABITACIONES_ATTR => $this->habitaciones,
        ];

        return $this->values;
    }

    public function getClassesFromDb($classes) {

        $resultData = [];

        $conn = \app\configuration\Conectar::conexion();

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        foreach ($classes as $id_class => $value) {
            $sql = "SELECT id, nombre, descripcion, url_imagen_1, url_imagen_2, url_video, url_mapa, aire_acondicionado, television, servicio_taxi, baño_ducha FROM clase_alojamiento WHERE id = $id_class";
            $result = $conn->query($sql);

            // output data of each row
            $row = $result->fetch_assoc();
            array_push($resultData, $row);
        }

        $conn->close();

        $resultData = $this->filterAditionalServices($resultData);

        return $resultData;

    }

    public function filterAditionalServices($results) {

        $servicios = [
            "aire_acondicionado",
            "television",
            "servicio_taxi",
            "baño_ducha"
        ];

        foreach ($results as $index => $result) {
            foreach ($result as $key => $value) {
                foreach ($servicios as $servicio) {
                    if($servicio == $key) {
                        $results[$index][$key] = $value ? "../assets/img/check.svg" : "../assets/img/crossed.svg";
                    }
                }
            }
        }

        return $results;
    }

    // gets data from database
    public function getDbData() {

        $resultData = [];

        $conn = \app\configuration\Conectar::conexion();

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT tipo_alojamiento, servicios, precios, estadia, habitaciones, id_class FROM alojamiento";
        $result = $conn->query($sql);

        // output data of each row
        while($row = $result->fetch_assoc()) {
            array_push($resultData, $row);
        }

        $conn->close();

        return $resultData;
    }


}