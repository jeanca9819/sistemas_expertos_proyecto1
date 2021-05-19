<?php
include_once 'views/header.php';
?>
<header class="masthead">

</header>

<body style="background-color: black">
<div class="container">
    <?php
    include_once 'views/barraCriterios.php';
    ?>
</div>
<br>

<div class="container">
    <ul class="list-group list-group-flush">
        <li class="list-group-item-action">
            <div class="card mb-3" style="max-width: 1500px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="card-img-top card-image"
                             src="https://i.pinimg.com/564x/1c/e2/24/1ce224df6062e9655f4ebffedbae109b.jpg"
                             alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
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
                        <img class="card-img-top card-image"
                             src="https://www.culturacr.net/wp-content/uploads/2019/01/tulemar-3.jpg" alt="...">
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
                        <img class="card-img-top card-image" alt="Responsive image"
                             src="https://img.blogs.es/anexom/wp-content/uploads/2016/08/hoteles-w-920x515.jpg">
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

