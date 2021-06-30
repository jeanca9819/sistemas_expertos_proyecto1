<?php

require_once "configuration/database.php";


class Vehiculo
{
    const PASAJEROS = 'pasajeros';
    const TIEMPO = 'tiempo';
    const PRECIO = 'precio';

    public int $pasajeros = 0;
    public int $tiempo = 0;
    public int $precio = 0;

    public array $values = [];

    public function __construct()
    {
        $this->values = [
            self::PASAJEROS => $this->pasajeros,
            self::TIEMPO => $this->tiempo,
            self::PRECIO => $this->precio,
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
            self::PASAJEROS => $this->pasajeros,
            self::TIEMPO => $this->tiempo,
            self::PRECIO => $this->precio,
        ];
        return $this->values;
    }

    // gets data from database
    public function getDbData() {

        $resultData = [];

        $conn = \app\configuration\Conectar::conexion2();

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "CALL determinar_probabilidades_vehiculo($this->precio, $this->tiempo, $this->pasajeros);";
        $result = $conn->query($sql);

        // output data of each row
        while($row = $result->fetch_assoc()) {
            array_push($resultData, $row);
        }

        $conn->close();

        return $resultData;
    }


}