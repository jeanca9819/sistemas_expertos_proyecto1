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
]
?>

<body>

<header class="masthead">
    <div class="container d-flex h-100 align-items-center mx-auto">
        <?php
            include_once 'views/barraCriterios.php';
        ?>
    </div>
</header>
<br>
<br>

<div class="modal fade bd-example-modal-lg" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="carouselHolidayIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselHolidayIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselHolidayIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselHolidayIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img id="img1" class="d-block w-100" src="" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img id="img2" class="d-block w-100" src="" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <div class="video-responsive">
                                <iframe id="video1" width="560" height="315" src="https://www.youtube.com/embed/f0bc5E24Js4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselHolidayIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselHolidayIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <br>
                <div>
                    <p id="descripcion"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary data-dismiss" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

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
                                        function getSelectedValue<?=$result['id'] ?>() {
                                            let nombre = "<?= $result['nombre'] ?>";
                                            let descripcion = "<?= $result['descripcion'] ?>";
                                            let urlImagen1 = "<?= $result['url_imagen_1'] ?>";
                                            let urlImagen2 = "<?= $result['url_imagen_2'] ?>";
                                            let urlVideo = "<?= $result['url_video'] ?>";
                                            //const urlMapa = "<?//= $result['url_mapa '] ?>//";
                                            $("#example").modal("show");

                                            let inputF = document.getElementById("exampleModalLongTitle");
                                            let paragElem = document.getElementById("descripcion");
                                            let imgElem = document.getElementById("img1");
                                            let img2Elem = document.getElementById("img2");
                                            let videoElem = document.getElementById("video1");
                                            inputF.textContent = nombre;
                                            paragElem.textContent = descripcion;
                                            imgElem.setAttribute("src", urlImagen1);
                                            img2Elem.setAttribute("src", urlImagen2);
                                            videoElem.setAttribute("src", urlVideo);
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

