<?php
include_once 'views/header.php';

$counter = 0;

$atributos = [
    
    "Precio" => "precio",
    "Pasajeros" => "pasajeros",
    "Tiempo" => "tiempo"
    
];

$criterios = [

    "Precios" => [
        "$0 - $250" => 1,
        "$250 - $500" => 2,
        "$500 - $750" => 3,
        "$750-$1000" => 4
    ],
   
    "Pasajeros" => [
        "4 personas" => 1,
        "8 personas" => 2,
        "12 personas" => 3,
        "16 personas" => 4,
    ],
    

    "Tiempo" => [
        "2 días" => 1,
        "4 días" => 2,
        "6 días" => 3,
        "8 días" => 4,
        "10 días" => 5,
        "12 días" => 6,
        "14 días" => 7,
        "16 días" => 8,
        "18 días" => 9,
        "20 días" => 10,
        "22 días" => 11,
        "24 días" => 12,
        "26 días" => 13,
        "28 días" => 14,
        "30 días" => 15
    ]
];
?>

<header class="masthead">
    <div class="container">
        <div style="text-align: center;">
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
            <h3 style="color: white;">Vehículos</h3>
        </div>
            <?php
                include_once 'views/barraCriterios.php';
            ?>
    </div>
</header>
<br>
<br>
<section id="result">
    <div class="container" style="display:none;" id="content">
            <ul class="list-group list-group-flush">
                <li class="list-group-item-action">
                    <div class="card mb-3" style="max-width: 1500px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img class="card-img-top card-image" style="max-width: 350px;" src="https://i.blogs.es/d5b696/peugeot-206plus-06/450_1000.jpg">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Peugeot - 206</h5>
                                    <p class="card-text">Precio final por día ₡13.704</p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"> Aire acondicionado</li>
                                        <li class="list-group-item">Kilometraje ilimitado</li>
                                        <li class="list-group-item">Transmisión manualli</li>
                                    </ul>
                                    <a data-toggle="modal" data-target="#modal1" href="#" class="btn btn-primary">Seleccionar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item-action">
                    <div class="card mb-3" style="max-width: 1500px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img class="card-img-top card-image" style="max-width: 350px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRA0mSrwKqyHy9JYcCtYW9ywsz1019nUwNi8g&usqp=CAU" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Nissan Versa</h5>
                                    <p class="card-text">Precio final por día ₡31.519</p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"> Aire acondicionado</li>
                                        <li class="list-group-item">Kilometraje ilimitado</li>
                                        <li class="list-group-item">Transmisión manual</li>
                                    </ul>
                                    <a data-toggle="modal" data-target="#modal2" href="#" class="btn btn-primary">Seleccionar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item-action">
                    <div class="card mb-3" style="max-width: 1500px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img class="card-img-top card-image" alt="Responsive image" style="max-width: 350px;" src="https://i0.wp.com/www.blogdecoches.net/wp-content/uploads/2018/03/Los-nuevos-Toyota-Etios-2019-Sed%C3%A1n-y-Hatch-07.jpg?resize=640%2C400&ssl=1">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Toyota - Etios Sedan</h5>
                                    <p class="card-text">Precio final por día ₡31.519</p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"> Aire acondicionado</li>
                                        <li class="list-group-item">Kilometraje ilimitado</li>
                                        <li class="list-group-item">Transmisión manual</li>
                                    </ul>
                                    <a data-toggle="modal" data-target="#modal3" href="#" class="btn btn-primary">Seleccionar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
        
            </ul>
    </div>
</section>

<!-- Este es el modal, por el momento se deja aquí pero hay que hacerlo más modular  -->
<div class="modal fade bd-example-modal-lg" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Peugeot - 206</h5>
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
                            <img class="img-fluid" src="http://img.autoabc.lv/peugeot-206/peugeot-206_2007_Sedans_15112654422_2.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://i.blogs.es/8ac46a/peugeot_206_plus/450_1000.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <div class="video-responsive">
                            <iframe width="901" height="516" src="https://www.youtube.com/embed/vIFbYLgatRs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                <h4> Incluido en el precio:</h4>
                    <p>
                    Cancelación
                    </p>
                    <br>
                    <p>
                    Cambios en la reserva
                    </p>
                    <br>
                    <p>
                    Cobertura en caso de robo
                    </p>
                    <br>
                    <p>
                    Cobertura parcial por colisión (CDW)
                    </p>
                    <br>
                    <p>
                    Impuestos locales
                    </p>
                    <br>
                    <p>
                    Su alquiler incluye kilometraje ilimitado gratuito.
                    </p>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary data-dismiss" data-dismiss="modal">Cerrar</button>
                
            </div>
        </div>
    </div>
</div>



<div class="modal fade bd-example-modal-lg" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Nissan Versa</h5>
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
                            <img class="d-block w-100" src="https://upload.wikimedia.org/wikipedia/commons/2/24/2020_Nissan_Sentra_%28United_States%29.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://http2.mlstatic.com/D_NQ_NP_654256-MLM45642855048_042021-W.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <div class="video-responsive">
                            <iframe width="901" height="516" src="https://www.youtube.com/embed/5vJye0dX5mQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                <h4> Incluido en el precio:</h4>
                    <p>
                    Cancelación
                    </p>
                    <br>
                    <p>
                    Cambios en la reserva
                    </p>
                    <br>
                    <p>
                    Cobertura en caso de robo
                    </p>
                    <br>
                    <p>
                    Cobertura parcial por colisión (CDW)
                    </p>
                    <br>
                    <p>
                    Impuestos locales
                    </p>
                    <br>
                    <p>
                    Su alquiler incluye kilometraje ilimitado gratuito.
                    </p>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary data-dismiss" data-dismiss="modal">Cerrar</button>
               
            </div>
        </div>
    </div>
</div>



<div class="modal fade bd-example-modal-lg" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Toyota - Etios Sedan</h5>
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
                            <img class="d-block w-100" src="https://www.megautos.com/wp-content/uploads/2017/01/Toyota-Etios-2018-delantera.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://www.megautos.com/wp-content/uploads/2017/01/Toyota-Etios-2018-trasera.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <div class="video-responsive">
                            <iframe width="901" height="516" src="https://www.youtube.com/embed/lB0fa4gSHks" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                <h4> Incluido en el precio:</h4>
                    <p>
                    Cancelación
                    </p>
                    <br>
                    <p>
                    Cambios en la reserva
                    </p>
                    <br>
                    <p>
                    Cobertura en caso de robo
                    </p>
                    <br>
                    <p>
                    Cobertura parcial por colisión (CDW)
                    </p>
                    <br>
                    <p>
                    Impuestos locales
                    </p>
                    <br>
                    <p>
                    Su alquiler incluye kilometraje ilimitado gratuito.
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

