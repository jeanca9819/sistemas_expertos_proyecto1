<?php
include_once 'views/header.php';
$counter = 0;

$atributos = [
    "Tipo de atractivo" => "tipo_atractivo",
    "Precios" => "precios",
    "Servicios" => "servicios",
    "Ocasion" => "ocasion",
    "Horarios" => "horarios"
];

$criterios = [
    "Tipo de atractivo" => [
        "Playa" => 1,
        "Montaña" => 2,
        "Ciudad" => 3,
        "Museo" => 4,
        "Cine" => 5,
        "Acuático" => 6,
        "Parques" => 7
    ],
    "Precios" => [
        "₡0 - ₡2500" => 1,
        "₡2500 - ₡10000" => 2,
        "₡10000 - ₡20000" => 3,
        "Más de 20000" => 4
    ],
    "Servicios" => [
        "Camping" => 1,
        "Área de comida" => 2,
        "Mascotas" => 3,
        "Baños" => 4,
        "Transporte" => 5
    ],
    "Ocasion" => [
        "Familiar" => 1,
        "Solitario" => 2,
        "Pareja" => 3,
        "Amigos" => 4
    ],
    "Horarios" => [
        "Mañana" => 1,
        "Tarde" => 2,
        "Noche" => 3
    ],
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
                                    <img style="max-width: 350px;" class="card-img-top card-image" src=<?= $result['url_imagen_1'] ?> alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $result['nombre'] ?></h5>
                                        <p class="card-text"><?= $result['descripcion'] ?></p>

                                        <input type="hidden" placeholder="Type" id="<?= "input" . $result['id'] ?>" value="<?= $result ?>">

                                        <a type="button" id="<?= "link_" . $result['id'] ?>" onclick="getSelectedValue<?= $result['id'] ?>()">Ver más</a>
                                        <a type="button" id="<?= "link_" . $result['id'] ?>" onclick="getSelectedValue<?= $result['id'] ?>()">Ver más</a>
                                        <script>
                                            function getSelectedValue<?= $result['id'] ?>() {
                                                let nombre = "<?= $result['nombre'] ?>";
                                                let detalle = "<?= $result['detalle'] ?>";
                                                let urlImagen1 = "<?= $result['url_imagen_1'] ?>";
                                                let urlImagen2 = "<?= $result['url_imagen_2'] ?>";
                                                let urlVideo = "<?= $result['url_video'] ?>";
                                                //const urlMapa = "<? //= $result['url_mapa '] 
                                                                    ?>//";
                                                //alert(nombre);
                                                $("#example").modal("show");

                                                let inputF = document.getElementById("exampleModalLongTitle");
                                                let paragElem = document.getElementById("detalle");
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

                    $counter = $counter + 1;
                }
                ?>
            </ul>
        </div>
    </section>



    <div class="modal fade bd-example-modal-lg" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Test</h5>
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
                                <img class="d-block w-100" id="img1" src="" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" id="img2" src="" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <div class="video-responsive">
                                    <iframe width="560" height="315" id="video1" src="https://www.youtube.com/embed/f0bc5E24Js4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                        <p id="detalle">
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary data-dismiss" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>




</body>

<?php
include_once 'views/footer.php';
?>