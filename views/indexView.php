<?php 
    include_once 'views/header.php';

$atributos = [
    "Tipo de turismo" => "tipo",
    "Precios" => "precio",
    "Cercanía" => "cercania",
    "Alimentación incluida" => "alimentacion",
    "Transporte incluido" => "transporte"
];

$criterios = [
    "Tipo de turismo" => [
        "Natural"=>"Natural",
        "Urbano"=>"Urbano",
        "Aventura"=>"Aventura",
        "Compras"=>"Compras",
        "Gastronómico"=>"Gastronómico"
    ],
    "Precios" => [
        "₡50.000"=>50000,
        "₡100.000"=>100000,
        "₡250.000"=>250000
    ],
    "Cercanía" => [
        "Menos de 25km"=>"-25",
        "25km - 100km"=>"25-100",
        "Más de 100km"=>"+100"
    ],
    "Alimentación incluida" => [
        "Sí"=>"SI",
        "No"=>"NO"
    ],
    "Transporte incluido" => [
        "Sí"=>"SI",
        "No"=>"NO"
    ]
]
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
            <h3 style="color: white;">Paquetes Turísticos</h3>
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
                                     src=<?= $result['imagen'] ?>
                                     alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $result['descripcion'] ?></h5>
                                    <p class="card-text"><?= $result['descripcion'] ?></p>
                                    <a type="button" id="<?= "link_" . $result['id_paquete'] ?>" onclick="getSelectedValue<?=$result['id_paquete'] ?>()">Ver más</a>
                                    <script>
                                        // This function is ugly and must be changed asap. But developer too lazy... developer must eat and sleep first
                                        // Loads selected result data to modal. The name of the function is associated with the result tha was selected on the list
                                        function getSelectedValue<?=$result['id_paquete'] ?>() {

                                            // Takes the data from the backend php of the selected result
                                            let nombre = "<?= $result['descripcion'] ?>";
                                            let descripcion = "<?= $result['descripcion'] ?>";
                                            let urlImagen1 = "<?= $result['imagen'] ?>";
                                            let urlImagen2 = "<?= $result['imagen'] ?>";
                                            let urlVideo = "<?= $result['video'] ?>";
                                            let urlMapa = "<?= $result['mapa'] ?>";
                                            

                                            // Selects the html elements that are needed to load the result data
                                            let inputF = document.getElementById("modal-title");
                                            let paragElem = document.getElementById("descripcion");
                                            let imgElem = document.getElementById("img1");
                                            let img2Elem = document.getElementById("img2");
                                            let videoElem = document.getElementById("video1");
                                            let mapElem = document.getElementById("mapa1");

                                            // Sets the result data with the html element
                                            inputF.textContent = nombre;
                                            paragElem.textContent = descripcion;
                                            imgElem.setAttribute("src", urlImagen1);
                                            img2Elem.setAttribute("src", urlImagen2);
                                            videoElem.setAttribute("src", urlVideo);
                                            mapElem.setAttribute("src", urlMapa);
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
        


