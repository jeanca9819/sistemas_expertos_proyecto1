<?php
include_once 'views/header.php';

$criterios = [
    "Tipo de alojamiento" => [
        "Cabaña",
        "Hotel",
        "Hostal",
        "Resort",
        "Bed and Breakfast"
    ],
    "Servicios" => [
        "Internet",
        "Cable",
        "Aire Acondicionado",
        "Estacionamiento",
        "Restaurante"
    ],
    "Precios" => [
        "Menos de ₡50.000",
        "₡50.000 - ₡100.000",
        "₡100.000 - ₡250.000",
        "Más de ₡250.000"
    ],
    "Estadia" => [
        "2 días",
        "3 días",
        "4 días",
        "Más de 5 días"
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
<section id="result">
    <div style="display:none;" class="container" id="content">
        <ul class="list-group list-group-flush">
            <li class="list-group-item-action">
                <div class="card mb-3" style="max-width: 1500px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img style="max-width: 350px;" class="card-img-top card-image"
                                src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/a5/0c/3e/exterior.jpg?w=1200&h=-1&s=1"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Crowne Corobici</h5>
                                <p class="card-text">Crowne Plaza Corobici es una magnífica elección para los viajeros que visiten San Jose,
                                    ya que ofrece un ambiente para familias, además de numerosos servicios diseñados para mejorar tu estancia.</p>
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
                                src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/d3/b4/ef/exterior-view.jpg?w=1000&h=-1&s=1" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Barceló Tambor</h5>
                                <p class="card-text">El Hotel Barceló Tambor, se encuentra en playa de Tambor, Costa Rica. El hotel destaca por encontrarse en un
                                    entorno natural de inigualable belleza frente una playa paradisíaca de la costa del océano Pacífico.</p>
                                <a data-toggle="modal" data-target="#tambor" href="">Ver más</a>
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
                                src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/07/e8/b3/cb/holiday-inn-express-san.jpg?w=1200&h=-1&s=1">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Holiday Inn</h5>
                                <p class="card-text">Ubicación del establecimiento Si decides alojarte en Holiday Inn San Jose Escazu de Escazú, estarás cerca de un centro
                                    comercial y a menos de diez minutos en coche de Museo de Arte Costarricense y Museo de Ciencias Naturales La Salle.
                                    Además, este hotel se encuentra a 8,1 km de Teatro Nacional y a 8,2 km de Museo del Oro.</p>
                                <a data-toggle="modal" data-target="#holiday" href="">Ver más</a>
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
                <h5 class="modal-title" id="exampleModalLongTitle">Crowne Corobici</h5>
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
                            <img class="img-fluid" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/a5/0c/a0/presidential-suite-living.jpg?w=1200&h=-1&s=1" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/e9/3b/cc/guest-room.jpg?w=1200&h=-1&s=1" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <div class="video-responsive">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/VBaSTJDmYlw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                        Como está cerca de la mayoría de los puntos de referencia de San Jose, como Metropolitan
                        Church (Catedral Metropolitana) (2,3 km) y El Sotano (2,4 km), Crowne Plaza Hotel Corobici
                        es un fantástico destino para turistas.
                        <br><br>
                        Disfrutarás de agradables habitaciones que incluyen televisor de pantalla plana, minibar y
                        mesa de escritorio, y podrás estar conectado durante tu estancia, ya que Crowne Plaza Hotel
                        Corobici ofrece wifi gratuito a los huéspedes.
                        <br><br>
                        El hotel tiene recepción abierta 24 horas, servicio de habitaciones y conserje. Además, Crowne
                        Plaza Hotel Corobici ofrece piscina y desayuno incluido para poder relajarte tras un ajetreado
                        día. Hay parking gratis disponible para huéspedes con coche.
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary data-dismiss" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade bd-example-modal-lg" id="tambor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Barceó Tambor</h5>
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
                            <img class="d-block w-100" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/03/f1/28/05/barcelo-tambor-beach.jpg?w=1200&h=-1&s=1" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/f7/90/0d/barcelo-tambor.jpg?w=1200&h=-1&s=1" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <div class="video-responsive">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/LhDMWhLJJbs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                        Las habitaciones de los huéspedes incluyen televisor de pantalla plana, aire acondicionado y frigorífico,
                        y Barcelo Playa Tambor te ayuda a que estés conectado, ya que dispone de internet de pago.
                        <br><br>
                        También puedes aprovechar algunos de los servicios que ofrece el complejo turístico con todo incluido,
                        como servicio de habitaciones y conserje. Además, los huéspedes pueden disfrutar de piscina y desayuno
                        durante su visita. Otra ventaja añadida es que hay parking gratis disponible para los huéspedes.
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary data-dismiss" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade bd-example-modal-lg" id="holiday" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Holiday Inn</h5>
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
                            <img class="d-block w-100" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/a1/78/74/breakfast-bar.jpg?w=1200&h=-1&s=1" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/a1/78/6b/swimming-pool.jpg?w=1200&h=-1&s=1" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <div class="video-responsive">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/f0bc5E24Js4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                        Se ofrece wifi gratuito a los huéspedes y las habitaciones de Holiday Inn Express
                        San Jose Airport incluyen televisor de pantalla plana y aire acondicionado.
                        <br><br>
                        Durante la estancia, disfruta de algunos de los servicios que ofrecen, como recepción abierta 24 horas,
                        servicio de habitaciones y conserje. Los huéspedes de Hotel Holiday Inn Express San Jose Airport también
                        disponen de piscina y desayuno incluido allí mismo. Para viajeros con coche hay parking gratis disponible.
                        <br><br>
                        Para aquellos que estén interesados en visitar puntos de referencia conocidos durante su viaje a
                        Alajuela, Hotel Holiday Inn Express San Jose Airport se encuentra cerca de Teatro Municipal
                        (2,6 km) y Our Lady of the Pillar Cathedral (2,7 km).
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

