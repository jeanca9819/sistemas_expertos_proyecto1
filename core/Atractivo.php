<?php

require_once "configuration\database.php";


class Atractivo
{

    const TIPO_ATRACTIVO_ATTR = 'tipo_atractivo';
    const PRECIOS_ATTR = 'precios';
    const SERVICIOS_ATTR = 'servicios';
    const OCASION_ATTR = 'ocasion';
    const HORARIOS_ATTR = 'horarios';

    public int $tipo_atractivo = 0;
    public int $precios = 0;
    public int $servicios = 0;
    public int $ocasion = 0;
    public int $horarios = 0;
    public array $values = [];

    public function __construct()
    {
        $this->values = [
            self::TIPO_ATRACTIVO_ATTR => $this->tipo_atractivo,
            self::PRECIOS_ATTR => $this->precios,
            self::SERVICIOS_ATTR => $this->servicios,
            self::OCASION_ATTR => $this->ocasion,
            self::HORARIOS_ATTR => $this->horarios,
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
            self::TIPO_ATRACTIVO_ATTR => $this->tipo_atractivo,
            self::PRECIOS_ATTR => $this->precios,
            self::SERVICIOS_ATTR => $this->servicios, 
            self::OCASION_ATTR => $this->ocasion,
            self::HORARIOS_ATTR => $this->horarios,
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

        foreach ($classes as $clase_id => $value) {
            $sql = "SELECT id, nombre, descripcion, detalle, url_imagen_1, url_imagen_2, url_video, url_mapa, camping, mascotas,baños, transporte FROM clase_atractivo WHERE id = $clase_id";
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
            "camping",
            "mascotas",
            "baños",
            "transporte"
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

        $sql = "SELECT tipo_atractivo, precios, servicios, ocasion, horarios, clase_id FROM atractivo";
        $result = $conn->query($sql);

        // output data of each row
        while($row = $result->fetch_assoc()) {
            array_push($resultData, $row);
        }

        $conn->close();

        return $resultData;
    }


}