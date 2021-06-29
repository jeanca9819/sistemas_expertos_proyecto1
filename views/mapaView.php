<?php 
    include_once 'views/header.php';
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
            <h3 style="color: white;">Mapa del sitio</h3>
        <br />
        <br />
        <br />
        <p style="color: white;">A continuación se le presenta el mapa del sitio, con este podrá interactuar con los nodos de la página web.</p>
        <br />
        <br />
        <a href="index.php">
        <button class="btn btn-info">Paquetes</button>
        </a>
        <a href="index.php?c=alojamiento&a=alojamiento">
        <button class="btn btn-info">Alojamiento</button>
        </a>
        <a href="index.php?c=atractivo&a=atractivo">
        <button class="btn btn-info">Atractivos</button>
        </a>
        <a href="index.php?c=vehiculos&a=vehiculosAction">
        <button class="btn btn-info">Vehículos</button>
        </a>
        <a href="index.php?c=nosotros&a=nosotrosAction">
        <button class="btn btn-info">Nosotros</button>
        </a>
        </div>
        <br />
        <br />
    <div style="text-align: center;">
        <img src="assets/img/mapa_sitio.png" width="50%" height="50%">
    </div>
    </div>
</header>



<?php
    include_once 'views/footer.php'; 
?>