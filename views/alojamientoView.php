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
        "Internet",
        "Cable",
        "Aire Acondicionado",
        "Estacionamiento",
        "Restaurante"
    ],
    "Habitaciones" => 0
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

<div style="display:none;" class="container" id="content">
    <ul class="list-group list-group-flush">
        <li class="list-group-item-action">
            <div class="card mb-3" style="max-width: 1500px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img style="max-width: 350px;" class="card-img-top card-image"
                             src="https://i.pinimg.com/564x/1c/e2/24/1ce224df6062e9655f4ebffedbae109b.jpg"
                             alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Crowne Corobici</h5>
                            <p class="card-text">Las Cabañas Crowne Corobici está ubicadas a 15 minutos del
                                Aeropuerto Internacional Juan Santamaria, a cinco minutos del centro de San José y a una
                                corta distancia a pie del Estadio Nacional de Costa Rica, casa del equipo nacional de soccer
                                y de los conciertos y festivales más grandes del país</p>
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
                             src="https://www.culturacr.net/wp-content/uploads/2019/01/tulemar-3.jpg" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Barceló Tambor</h5>
                            <p class="card-text">El Hotel Barceló Tambor, se encuentra en playa de Tambor, Costa Rica. El hotel destaca por encontrarse en un
                                entorno natural de inigualable belleza frente una playa paradisíaca de la costa del océano Pacífico.</p>
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
                        <img style="max-width: 350px;" class="card-img-top card-image" alt="Responsive image"
                             src="https://img.blogs.es/anexom/wp-content/uploads/2016/08/hoteles-w-920x515.jpg">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Holiday Inn</h5>
                            <p class="card-text">Ubicación del establecimiento Si decides alojarte en Holiday Inn San Jose Escazu de Escazú, estarás cerca de un centro
                                comercial y a menos de diez minutos en coche de Museo de Arte Costarricense y Museo de Ciencias Naturales La Salle.
                                Además, este hotel se encuentra a 8,1 km de Teatro Nacional y a 8,2 km de Museo del Oro.</p>
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
                <h5 class="modal-title" id="exampleModalLongTitle">Titulo del producto</h5>
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
                            <img class="d-block w-100" src="https://i.pinimg.com/564x/1c/e2/24/1ce224df6062e9655f4ebffedbae109b.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/12/72/c3/cabanas-bosques-de-paz.jpg?w=1200&h=-1&s=1" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <iframe width="800" height="400" src="https://www.youtube.com/embed/85MppyLJHz0"  allowfullscreen></iframe>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut delectus dignissimos doloremque eius
                        eligendi excepturi expedita harum, illo incidunt iure minus mollitia quae quam quasi rerum, similique tempore velit vitae.
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Titulo del producto</h5>
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
                            <img class="d-block w-100" src="https://i.pinimg.com/564x/1c/e2/24/1ce224df6062e9655f4ebffedbae109b.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="..." alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <iframe width="800" height="400" src="https://www.youtube.com/embed/85MppyLJHz0"  allowfullscreen></iframe>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut delectus dignissimos doloremque eius eligendi excepturi expedita harum, illo incidunt iure minus mollitia quae quam quasi rerum, similique tempore velit vitae.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Titulo del producto</h5>
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
                            <img class="d-block w-100" src="https://i.pinimg.com/564x/1c/e2/24/1ce224df6062e9655f4ebffedbae109b.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="..." alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <iframe width="800" height="400" src="https://www.youtube.com/embed/85MppyLJHz0"  allowfullscreen></iframe>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut delectus dignissimos doloremque eius eligendi excepturi expedita harum, illo incidunt iure minus mollitia quae quam quasi rerum, similique tempore velit vitae.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

</body>

<?php
include_once 'views/footer.php';
?>

