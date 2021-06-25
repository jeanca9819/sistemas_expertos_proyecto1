<?php
//arreglo que contiene los datos consultados en la base de datos 
$arrConsultaBD = array();
//arreglo que contiene lo que el  usario consulta
$arrConsultaUsuario = array();

if ($_POST) {
    // incluye el archivo en donde se entabla la conexion con la base de datos
    require_once("conexion.php");
    //ESTILO DE APRENDIZAJE
    //valida que los datos del la información del usuario para calcular el estilo de aprendizaje no se encuentre vacío
    if (!empty($_POST['ec']) && !empty($_POST['or']) && !empty($_POST['ca']) && !empty($_POST['ea'])) {
        //Toma  los valores que llegaron en el post y los asigna a una variable
        $EC = $_POST['ec'];
        $OR = $_POST['or'];
        $CA = $_POST['ca'];
        $EA = $_POST['ea'];

        //Realiza la consulta a la base con los parametros necesarios para comparar y posteriormente calcular el estilo de aprendizaje
        $query_select = mysqli_query($conection, "SELECT ec,orr, ca , ea, estilo FROM recinto_estilo");
        $num_rows = mysqli_num_rows($query_select);
        if ($num_rows > 0) {
            $arrConsultaBD = mysqli_fetch_all($query_select);
            //Asigna la información dada por el usuario, a un arreglo en el mismo orden que se realiza la consulta en la base.  
            $arrConsultaUsuario[0] = $EC;
            $arrConsultaUsuario[1] = $OR;
            $arrConsultaUsuario[2] = $CA;
            $arrConsultaUsuario[3] = $EA;
            //llama al método que calcula la distancia de euclides y este le retorna el resultado
            $resultado = calculoDistanciaEuclides($arrConsultaUsuario, $arrConsultaBD);
            //manda el resultado en la posición del arreglo donde se encuentra la información solicitada 
            print_r("Resultado:" . $resultado[4]);
        }
    }
    
}

/*ALGORITMO DE EUCLIDES
Toma la informacion del usuario que se encuentra en el arrConsultaUsuario y la compara contra los resultados 
arrojados según el tipo de consulta del usuario que se encuentran en el arreglo arrConsultaBD*/
function calculoDistanciaEuclides($arrConsultaUsuario, $arrConsultaBD)
{
    //se encuentra la información de una fila del arrConsultaBD
    $usuario = array();
    //contiene las distancias generadas por la formula de euclides
    $distanciaEuclides = array();

    //valida que ambos arreglos ocntengan información
    if (!empty($arrConsultaBD) && count($arrConsultaUsuario) != 0) {

        //recorre el arreglo que contiene todos los registros consultados en la base
        for ($i = 0; $i < count($arrConsultaBD); $i++) {

            //toma la cada fila del arrConsultaBD (para verlo como un arreglo)
            $usuario = $arrConsultaBD[$i];
            //variable que contiene la distancia calculada del usuario contra la fila consultada
            $distancia = 0;
            //recorre el arreglo con la información del usuario
            for ($j = 0; $j < count($arrConsultaUsuario); $j++) {
                //resta cada valor según los prametros consultados y los eleva a la 2, posteriormente suma este resultado
                $distancia += pow($arrConsultaUsuario[$j] - $usuario[$j], 2);
            }
            //toma el valor de la distancia dentro de una raíz y lo calcula
            $distancia = sqrt($distancia);

            //se guarda el resultado de esta distancia en el arreglo que contiene el resultado de las distancias para cada fila
            $distanciasEuclides[$i] = $distancia;
        }
        //calcula el que tiene el menor resultado en el arreglo ue contiene las distancias calculadas
        $distanciaMinima = min($distanciasEuclides);
        //variable que contiene la posicon donde se encuentra la distancia minima
        $posicionDistanciaMinima = 0;
        //se recorre el arrelo que contiene las distancias calculadas y las comparara una a una para ver cual coincide con el resultado de la distancia minima de la variable=>distancia minima
        for ($k = 0; $k < count($distanciasEuclides); $k++) {
            if ($distanciasEuclides[$k] == $distanciaMinima) {
                $posicionDistanciaMinima = $k;
            }
        }
        //retorna el resultado
        return $resultado = $arrConsultaBD[$posicionDistanciaMinima];
    }
}
