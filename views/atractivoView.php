<?php
include_once 'views/header.php';

$criterios = [
    "Tipo" => [
        "Playa",
        "Montaña",
        "Ciudad",
        "Museo",
        "Cine",
        "Acuático",
        "Parques"
    ],
    "Precios" => [
        "₡0 - ₡2500",
        "₡2500 - ₡10000",
        "₡10000 - ₡20000",
        "Más de 20000"
    ],
    "Servicios" => [
        "Camping",
        "Área de comida",
        "Mascotas",
        "Baños",
        "Transporte"
    ],
    "Ocasión" => [
        "Familiar",
        "Solitario",
        "Pareja",
        "Amigos"
    ],
    "Horarios" => [
        "Mañana",
        "Tarde",
        "Noche"
    ],
]
?>

<body>

    <header class="masthead">

    </header>

    <div class="container">
        <?php
        include_once 'views/barraCriterios.php';
        ?>
    </div>

    <div class="container" style="display:none;" id="content">
        <ul class="list-group list-group-flush">
            <li class="list-group-item-action">
                <div class="card mb-3" style="max-width: 1500px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="card-img-top card-image" style="max-width: 350px;" src="https://d1qqtien6gys07.cloudfront.net/wp-content/uploads/2021/03/ceb9e63e4943c065653bf466775858de.jpg" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Mirador de Orosi</h5>
                                <p class="card-text">El Mirador de Orosi, es un sitio especial para compartir en familia o por qué no, un picnic para celebrar el aniversario con su pareja.
                                    Así que tome rumbo a Cartago y disfrute de un sábado o un domingo muy agradable..</p>
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
                            <img class="card-img-top card-image" style="max-width: 350px;" src="https://images.costarica.org/wp-content/uploads/2014/12/Tamarindo-Beach-View.jpg" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Playa Tamarindo</h5>
                                <p class="card-text">Playa muy popular y de gran belleza ubicada en Santa Cruz de Guanacaste. Combina la arena blanca, con buenas olas para el surf, y un paisaje increíble rodeado de montañas.</p>
                                <a data-toggle="modal" data-target="#tamarindo" href="">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item-action">
                <div class="card mb-3" style="max-width: 1500px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="card-img-top card-image" alt="Responsive image" style="max-width: 350px;" src="https://www.periodistadigital.com/wp-content/uploads/2019/04/playa-tortuguero.jpg?width=1200&enable=upscale">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Playa Tortuguero</h5>
                                <p class="card-text">Costa Rica es un verdadero paraíso de tortugas marinas popular en todo el mundo. Diferentes especies anidan durante varias épocas del año y en muchos lugares a lo largo de las playas de Costa Rica. Conózcolas</p>
                                <a data-toggle="modal" data-target="#tortuguero" href="">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>


    <!--MIRADOR Este es el modal, por el momento se deja aquí pero hay que hacerlo más modular  -->
    <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Mirador de Orosi</h5>
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
                                <img class="d-block w-100" src="https://blog.nativu.com/wp-content/uploads/2020/09/mirador-ujarras.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://media-cdn.tripadvisor.com/media/photo-m/1280/16/84/b3/49/great-for-picnics.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <div class="video-responsive">
                                    <iframe src="https://www.youtube.com/embed/tNy8WWWVEdU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                            El Mirador de Orosi, es un sitio especial para compartir en familia, un picnic para celebrar el aniversario con su pareja.
                            Pertenece al Instituto Costarricense de Turismo (ICT).
                            Así que tome rumbo a Cartago y disfrute de un sábado o un domingo muy agradable.
                            Se encuentra a 35 kilómetros de San José, a 1 hora y 20 minutos en carro, dependiendo del tráfico.
                            Disfrute de su excelente clima y ese aire frío que tanto anda buscando. Además al ser un lugar del Instituto Costarricense de Turismo (ICT).
                        </p>
                        <p>Horario de visita: Todos los días de 8:00 a.m. a 4:30 p.m</p>
                        <p>Precio: Entrada gratuita.</p>
                        <p>Servicios: Area de juegos infantiles, zonas verdes, servicios sanitarios, la Ley 7600 de Igualdad de Oportunidades para personas con necesidades especiales, espacios adecuados para desplazarse, ranchos con parrilla, agua potable, seguridad, mesas de picnic, parqueo, autobus.</p>
                        <p>Dirección: De la iglesia de Paraíso de Cartago, 3k al sur, carretera a Orosi.</p>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary data-dismiss" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!--TAMARINDO Este es el modal, por el momento se deja aquí pero hay que hacerlo más modular  -->
    <div class="modal fade bd-example-modal-lg" id="tamarindo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Playa Tamarindo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselTamarindoIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselTamarindoIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselTamarindoIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselTamarindoIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://cf.bstatic.com/images/hotel/max1280x900/201/201840956.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://www.govisitcostarica.co.cr/images/photos/exlg-tables-beach-tamarindo.JPG" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <div class="video-responsive">
                                    <iframe src="https://www.youtube.com/embed/12NiLNlQCbE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselTamarindoIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselTamarindoIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <br>
                    <div>
                        <p>
                            Playa muy popular y de gran belleza ubicada en Santa Cruz de Guanacaste. Combina la arena blanca, con buenas olas para el surf, y un paisaje increíble rodeado de montañas, puede sentarse bajo los árboles a descansar, hacer una caminata o disfrutar de los increíbles atardeceres.
                            Tamarindo es el punto de encuentro para disfrutar de distintas actividades
                        </p>
                        <p>Horario de visita: Todos los días de 8:00 a.m. a 4:30 p.m</p>
                        <p>Precio: Entrada gratuita.</p>
                        <p>Servicios: Es una playa muy accesible, pues presenta una gran cantidad de hoteles, cabinas, hosteles, restaurantes y sodas. También se dan clases de surf y hay distintas opciones de tours. </p>
                        <p>Dirección: Costa Pacífica Norte, provincia de Guanacaste.</p>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary  data-dismiss" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!--TORTUGUERO Este es el modal, por el momento se deja aquí pero hay que hacerlo más modular  -->
    <div class="modal fade bd-example-modal-lg" id="tortuguero" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Playa Tortuguero</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselTortugueroIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselTortugueroIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselTortugueroIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselTortugueroIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://www.tortugueroinfo.com/spa/tortuguero_costa_rica/foto-tortuguero-tour-bote.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://www.tortugueroinfo.com/spa/tortuguero_costa_rica/foto-selva-monos-tortuguero.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <div class="video-responsive">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/IO-9xCtupcw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselTortugueroIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselTortugueroIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <br>
                    <div>
                        <p>
                            Costa Rica es un verdadero paraíso de tortugas marinas popular en todo el mundo. Diferentes especies anidan durante varias épocas del año y en muchos lugares a lo largo de las playas de Costa Rica.
                        </p>
                        <p>Horario de visita: Todos los días de 6:00 a.m. a 4:00 p.m</p>
                        <p>Precio: Adultos ₡1130 y niños ₡565.</p>
                        <p>Servicios: Es una playa muy accesible, pues presenta una gran cantidad de hoteles, cabinas, hosteles, restaurantes y sodas. También se dan clases de surf y hay distintas opciones de tours y voluntariado. </p>
                        <p>Dirección: En la costa del Caribe, provincia de Limón, aproximadamente 80km al noreste de la ciudad del mismo nombre.</p>

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