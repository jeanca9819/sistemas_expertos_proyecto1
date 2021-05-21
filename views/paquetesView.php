<?php
include_once 'views/header.php';

$criterios = [
    "Tipo de turismo" => [
        "Natural",
        "Urbano",
        "Aventura",
        "Compras",
        "Gastronómico"
    ],
    "Precios" => [
        "Menos de ₡50.000",
        "₡50.000 - ₡100.000",
        "₡100.000 - ₡250.000",
        "Más de ₡250.000"
    ],
    "Cercanía" => [
        "Menos de 25km",
        "25km - 100km",
        "Más de 100km"
    ],
    "Alimentación incluida" => [
        "Sí",
        "No"
    ],
    "Transporte incluido" => [
        "Sí",
        "No"
    ]
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

<section id="result">
    <div style="display:none;" class="container" id="content">
        <ul class="list-group list-group-flush">
            <li class="list-group-item-action">
                <div class="card mb-3" style="max-width: 1500px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img style="max-width: 350px;" class="card-img-top card-image"
                                src="https://nyacknewsandviews.com/wp-content/uploads/2021/01/la-fortuna-waterfall_0.jpg"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Paquete a La Fortuna</h5>
                                <h6 class="card-subtitle">Alojamiento (2 noches), 2 personas + Atractivos</h6>
                                <p class="card-text">Precio: ₡200.000</p>
                                <p class="card-text">Empresa Turística: Costa Rica Nature Escape </p>
                                <a data-toggle="modal" data-target="#exampleModalCenter" href="">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item-action">
                <div class="card mb-3" style="max-width: 1500px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img style="max-width: 350px;" class="card-img-top card-image"
                                src="https://www.govisitcostarica.co.cr/images/photos/mob-beautiful-suspension-bridge-monteverde.jpg" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Paquete a Monte Verde</h5>
                                <h6 class="card-subtitle">Alojamiento (1 noche), 4 personas + Atractivos</h6>
                                <p class="card-text">Precio: ₡350.000</p>
                                <p class="card-text">Empresa Turística: Brazos Abiertos Costa Rica </p>
                                <a data-toggle="modal" data-target="#monte" href="">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item-action">
                <div class="card mb-3" style="max-width: 1500px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img style="max-width: 350px;" class="card-img-top card-image" alt="Responsive image"
                                src="http://hablemosdeislas.com/wp-content/uploads/2018/07/isla-del-coco-7-e1530912069771.jpg">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Paquete a Isla del Coco</h5>
                                <h6 class="card-subtitle">Alojamiento (1 noche), 3 personas + Alimentación</h6>
                                <p class="card-text">Precio: ₡250.000</p>
                                <p class="card-text">Empresa Turística: Turismo Inteligente</p>
                                <a data-toggle="modal" data-target="#coco" href="">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>


<!-- Este es el modal, por el momento se deja aquí pero hay que hacerlo más modular  -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Paquete a La Fortuna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="https://cf.bstatic.com/images/hotel/max1024x768/279/279786633.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://rutascostarica.viajes/images/destinos/arenal/actividades/canopy.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <div class="video-responsive">
                            <iframe width="1280" height="720" src="https://www.youtube.com/embed/055B5UCUjHk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <br>
                <div>
                    <p>
                        La Fortuna es una pequeña comunidad de Costa Rica, al noroeste de la capital, San José. 
                        <br><br>
                        Es conocida como una vía de acceso al Parque Nacional Volcán Arenal, que abarca 2 volcanes.
                        <br><br>
                        Este paquete incluye alojamiento en Hotel Selina para 2 personas (2 noches). 
                        <br><br>
                        Disfrutarás de los atractivos como el recorrido por la Catarata La Fortuna y los Puentes
                        Colgantes de Arenal.
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary data-dismiss" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade bd-example-modal-lg" id="monte" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Paquete a Monte Verde</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="carouselTamborIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselTamborndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselTamborndicators" data-slide-to="1"></li>
                        <li data-target="#carouselTamborndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://elestablo.com/wp-content/uploads/2019/12/El-Establo-Mountain-Hotel.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://blog.selvatura.com/wp-content/uploads/2020/03/selvatura-park-canopy-tour-007.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <div class="video-responsive">
                            <iframe width="1280" height="720" src="https://www.youtube.com/embed/qY09U0OkgOY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselTamborIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselTamborIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <br>
                <div>
                    <p>
                        Monteverde es una ciudad en el noroeste montañoso de Costa Rica. Es reconocida por sus bosques biodiversos en las nubes.
                        <br><br>
                        Este paquete incluye alojamiento en El Establo Mountain Hotel para 4 personas (1 noche). 
                        <br><br>
                        Disfrutarás de los atractivos como canopy, bungee y excursiones. 
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary data-dismiss" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade bd-example-modal-lg" id="coco" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Paquete a Isla del Coco</h5>
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
                            <img class="d-block w-100" src="https://www.visitcentroamerica.com/wp-content/uploads/2018/01/ver-centroamerica-costa-rica-parque-nacional-isla-del-coco-3.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://media-cdn.tripadvisor.com/media/photo-s/0c/1b/3d/0d/20160721-130909-largejpg.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <div class="video-responsive">
                                <iframe width="1280" height="720" src="https://www.youtube.com/embed/jYRD9hsw9UQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                    <p>
                        La Isla del Coco es una isla situada en el océano Pacífico perteneciente al Cantón de Puntarenas de la provincia homónima,
                        de la República de Costa Rica, que la declaró parque nacional.
                        <br><br>
                        Este paquete incluye alojamiento en The Cove at Playa Ocotal para 3 personas (1 noche) e incluye almuerzo. 
                        <br><br>
                        El The Cove at Playa Ocotal, se encuentra en Coco, a 4,1 km del Hard Rock Cafe Guanacaste. 
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