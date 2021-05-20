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
                            <img class="card-img-top card-image" style="max-width: 350px;" src="https://www.culturacr.net/wp-content/uploads/2019/01/tulemar-3.jpg" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <a href="">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item-action">
                <div class="card mb-3" style="max-width: 1500px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="card-img-top card-image" alt="Responsive image" style="max-width: 350px;" src="https://img.blogs.es/anexom/wp-content/uploads/2016/08/hoteles-w-920x515.jpg">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <a href="">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>


    <!-- Este es el modal, por el momento se deja aquí pero hay que hacerlo más modular  -->
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
                                    <iframe src="https://www.youtube.com/embed/vmhbdu8McQk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                    <button type="button" class="btn btn-primary">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

</body>

<?php
include_once 'views/footer.php';
?>