<div class="modal fade bd-example-modal-lg" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="carouselHolidayIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselHolidayIndicators" data-slide-to="0" class="active"></li>
                        <?php
                        if ($flag) {
                        ?>
                            <li data-target="#carouselHolidayIndicators" data-slide-to="1"></li>
                            <?php
                        }
                        ?>
                        <li data-target="#carouselHolidayIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img id="img1" class="d-block w-100" src="" alt="First slide">
                        </div>
                        <?php
                            if ($flag) {
                        ?>
                            <div class="carousel-item">
                                <img id="img2" class="d-block w-100" src="" alt="Second slide">
                            </div>
                        <?php
                            }
                            ?>
                        ?>
                        <div class="carousel-item">
                            <div class="video-responsive">
                                <iframe id="video1" width="100%" height="100%" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

                <div class="box">
                    <div class="box-sm red"></div>
                    <div class="box-sm orange"></div>
                    <div class="box-sm yellow "></div>
                    <div class="box-sm green "></div>
                    <div class="box-sm blue "></div>
                    <div class="box-sm purple"></div>
                </div>

                <div class="container">

                    <?= $aditionalContent ?>

                    <div class="row" style="padding-top: 5%">
                        <h5>Ubicación</h5>
                        <iframe id="mapa1" src="" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary data-dismiss" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>