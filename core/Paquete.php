<?php

require_once "configuration/database.php";


class Paquete
{
    const TIPO = 'tipo_paquete';
    const PRECIO = 'precio';
    const CERCANIA = 'cercania';
    const ALIMENTACION = 'alimentacion';
    const TRANSPORTE = 'transporte';

    public string $tipo = '';
    public int $precio = 0;
    public string $cercania = '';
    public string $alimentacion = '';
    public string $transporte = '';

    public array $values = [];

    public function __construct()
    {
        $this->values = [
            self::TIPO => $this->tipo,
            self::PRECIO => $this->precio,
            self::CERCANIA => $this->cercania,
            self::ALIMENTACION => $this->alimentacion,
            self::TRANSPORTE => $this->transporte,
        ];
    }

    // assigns user input to model attributes
    public function setData($data) {
        foreach ($data as $key => $value) {
            if(property_exists($this, $key)) {
                if($key == 'precio') {
                    $this->{$key} = (int) $value;
                } else {
                    $this->{$key} = $value;
                }
            }
        }

        $this->values = [
            self::TIPO => $this->tipo,
            self::PRECIO => $this->precio,
            self::CERCANIA => $this->cercania,
            self::ALIMENTACION => $this->alimentacion,
            self::TRANSPORTE => $this->transporte,
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

        $sql = "CALL determinar_probabilidades_paquete('$this->tipo', '$this->precio', '$this->cercania', '$this->alimentacion', '$this->transporte');";
        $result = $conn->query($sql);

        // output data of each row
        while($row = $result->fetch_assoc()) {
            array_push($resultData, $row);
        }

        $conn->close();

        return $resultData;
    }


}