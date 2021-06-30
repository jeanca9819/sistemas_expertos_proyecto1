<?php
include_once 'views/header.php';
$counter = 0;

$flag = true;

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
];

$aditionalContent = '<div class="row"><h5>Otras Caracteristicas Adicionales</h5></div>

<div class="row">
    <div class="col-sm">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <img id="img-aire" width="5%" src="">&nbsp;&nbsp;Camping
            </li>
            <li class="list-group-item">
                <img id="img-taxi" width="5%" src="">&nbsp;&nbsp;Mascotas
            </li>
        </ul>
    </div>

    <div class="col-sm">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <img id="img-tele" width="5%" src="">&nbsp;&nbsp;Baños
            </li>
            <li class="list-group-item">
                <img id="img-ducha" width="5%" src="">&nbsp;&nbsp;Transporte
            </li>
        </ul>
    </div>
</div>';

?>

<body>

<header class="masthead">
    <div class="container">
        <div style="text-align: center;">
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
            <h3 style="color: white;">Atractivos</h3>
        </div>
            <?php
                include_once 'views/barraCriterios.php';
            ?>
    </div>
</header>
<br>
<br>

<?=
include_once 'views/generalModal.php'
?>

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
            <img style="max-width: 350px;" class="card-img-top card-image"
                 src=<?= $result['url_imagen_1'] ?>
                 alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?= $result['nombre'] ?></h5>
                <p class="card-text"><?= $result['descripcion'] ?></p>
                <a type="button" id="<?= "link_" . $result['id'] ?>" onclick="getSelectedValue<?=$result['id'] ?>()">Ver más</a>
                <script>
                    // This function is ugly and must be changed asap. But developer too lazy... developer must eat and sleep first
                    // Loads selected result data to modal. The name of the function is associated with the result tha was selected on the list
                    function getSelectedValue<?=$result['id'] ?>() {

                        // Takes the data from the backend php of the selected result
                        let nombre = "<?= $result['nombre'] ?>";
                        let descripcion = "<?= $result['descripcion'] ?>";
                        let urlImagen1 = "<?= $result['url_imagen_1'] ?>";
                        let urlImagen2 = "<?= $result['url_imagen_2'] ?>";
                        let urlVideo = "<?= $result['url_video'] ?>";
                        let urlMapa = "<?= $result['url_mapa'] ?>";
                        let camping = "<?= $result['camping'] ?>";
                        let mascotas = "<?= $result['mascotas'] ?>";
                        let bano = "<?= $result['baños'] ?>";
                        let transporte = "<?= $result['transporte'] ?>";

                        // Selects the html elements that are needed to load the result data
                        let inputF = document.getElementById("modal-title");
                        let paragElem = document.getElementById("descripcion");
                        let imgElem = document.getElementById("img1");
                        let img2Elem = document.getElementById("img2");
                        let videoElem = document.getElementById("video1");
                        let mapElem = document.getElementById("mapa1");
                        let imgAire = document.getElementById("img-aire");
                        let imgTaxi = document.getElementById("img-taxi");
                        let imgTele = document.getElementById("img-tele");
                        let imgDucha = document.getElementById("img-ducha");

                        // Sets the result data with the html element
                        inputF.textContent = nombre;
                        paragElem.textContent = descripcion;
                        imgElem.setAttribute("src", urlImagen1);
                        img2Elem.setAttribute("src", urlImagen2);
                        videoElem.setAttribute("src", urlVideo);
                        mapElem.setAttribute("src", urlMapa);
                        imgAire.setAttribute("src", camping);
                        imgTaxi.setAttribute("src", mascotas);
                        imgTele.setAttribute("src", bano);
                        imgDucha.setAttribute("src", transporte);

                        $("#example").modal("show");
                    }
                </script>
            </div>
        </div>
    </div>
</div>
</li>
<?php
}
?>
</ul>
</div>
</section>
</body>

<?php
include_once 'views/footer.php';
?>

