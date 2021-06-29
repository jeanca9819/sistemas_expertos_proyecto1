<?php
include_once 'views/header.php';

$atributos = [
    "Tipo de alojamiento" => "tipo_alojamiento",
    "Servicios" => "servicios",
    "Precios" => "precios",
    "Estadia" => "estadia",
    "Habitaciones" => "habitaciones"
];

$criterios = [
    "Tipo de alojamiento" => [
        "Cabaña" => 1,
        "Hotel" => 2,
        "Hostal" => 3,
        "Resort" => 4,
        "Bed and Breakfast" => 5
    ],
    "Servicios" => [
        "Internet" => 1,
        "Cable" => 2,
        "Aire Acondicionado" => 3,
        "Estacionamiento" => 4,
        "Restaurante" => 5
    ],
    "Precios" => [
        "Menos de ₡50.000" => 1,
        "₡50.000 - ₡100.000" => 2,
        "₡100.000 - ₡250.000" => 3,
        "Más de ₡250.000" => 4
    ],
    "Estadia" => [
        "1 días" => 1,
        "2 días" => 2,
        "3 días" => 3,
        "4 días" => 4,
        "Más de 5 días" => 5
    ],
    "Habitaciones" => 0
];

    $aditionalContent = '<div class="row"><h5>Otras Caracteristicas Adicionales</h5></div>

                    <div class="row">
                        <div class="col-sm">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <img id="img-aire" width="5%" src="">&nbsp;&nbsp;Aire Acondicionado
                                </li>
                                <li class="list-group-item">
                                    <img id="img-taxi" width="5%" src="">&nbsp;&nbsp;Servicio de Taxi
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <img id="img-tele" width="5%" src="">&nbsp;&nbsp;Television
                                </li>
                                <li class="list-group-item">
                                    <img id="img-ducha" width="5%" src="">&nbsp;&nbsp;Baño / Ducha
                                </li>
                            </ul>
                        </div>
                    </div>';

?>

<body>

<header class="masthead">
    <div class="container">
        <div style="text-align: center;">
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
            <h3 style="color: white;">Alojamientos</h3>
        </div>
            <?php
                include_once 'views/barraCriterios.php';
            ?>
    </div>
</header>
<br>
<br>

<?=
    include_once 'views/generalModal.php'
?>

<section id="result">
    <div style="" class="container" id="content">

        <ul class="list-group list-group-flush">
            <?php
                foreach ($results as $result) {
                ?>
                <li class="list-group-item-action">
                    <div class="card mb-3" style="max-width: 1500px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img style="max-width: 350px;" class="card-img-top card-image"
                                     src=<?= $result['url_imagen_1'] ?>
                                     alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $result['nombre'] ?></h5>
                                    <p class="card-text"><?= $result['descripcion'] ?></p>
                                    <a type="button" id="<?= "link_" . $result['id'] ?>" onclick="getSelectedValue<?=$result['id'] ?>()">Ver más</a>
                                    <script>
                                        // This function is ugly and must be changed asap. But developer too lazy... developer must eat and sleep first
                                        // Loads selected result data to modal. The name of the function is associated with the result tha was selected on the list
                                        function getSelectedValue<?=$result['id'] ?>() {

                                            // Takes the data from the backend php of the selected result
                                            let nombre = "<?= $result['nombre'] ?>";
                                            let descripcion = "<?= $result['descripcion'] ?>";
                                            let urlImagen1 = "<?= $result['url_imagen_1'] ?>";
                                            let urlImagen2 = "<?= $result['url_imagen_2'] ?>";
                                            let urlVideo = "<?= $result['url_video'] ?>";
                                            let urlMapa = "<?= $result['url_mapa'] ?>";
                                            let aireAcondicionado = "<?= $result['aire_acondicionado'] ?>";
                                            let television = "<?= $result['television'] ?>";
                                            let servicioTaxi = "<?= $result['servicio_taxi'] ?>";
                                            let banoDucha = "<?= $result['baño_ducha'] ?>";

                                            // Selects the html elements that are needed to load the result data
                                            let inputF = document.getElementById("modal-title");
                                            let paragElem = document.getElementById("descripcion");
                                            let imgElem = document.getElementById("img1");
                                            let img2Elem = document.getElementById("img2");
                                            let videoElem = document.getElementById("video1");
                                            let mapElem = document.getElementById("mapa1");
                                            let imgAire = document.getElementById("img-aire");
                                            let imgTaxi = document.getElementById("img-taxi");
                                            let imgTele = document.getElementById("img-tele");
                                            let imgDucha = document.getElementById("img-ducha");

                                            // Sets the result data with the html element
                                            inputF.textContent = nombre;
                                            paragElem.textContent = descripcion;
                                            imgElem.setAttribute("src", urlImagen1);
                                            img2Elem.setAttribute("src", urlImagen2);
                                            videoElem.setAttribute("src", urlVideo);
                                            mapElem.setAttribute("src", urlMapa);
                                            imgAire.setAttribute("src", aireAcondicionado);
                                            imgTaxi.setAttribute("src", servicioTaxi);
                                            imgTele.setAttribute("src", television);
                                            imgDucha.setAttribute("src", banoDucha);

                                            $("#example").modal("show");
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php
                }
            ?>
        </ul>
    </div>
</section>
</body>

<?php
include_once 'views/footer.php';
?>

