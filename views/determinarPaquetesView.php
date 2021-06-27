<?php 
//Se agrega el encabezado, en este caso es el menú estático.
    include_once 'views/header.php';
?>

<header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                <div class="card">
                    <div class="card-header">
                        Paquetes turísticos
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Instrucciones</h4>
                        <p class="card-text">A continuación se le presentan opciones que debe completar según su preferencia.</p>
                        <p class="card-text">Esto nos ayudará a dar una mejor recomendación.</p>
                        <br />
                        <form class="margen_form" name="ingresada">
                            Tipo de turismo: <select name="turismo" value="Turismo">
                                <option value="1">Turismo Natural</option>
                                <option value="2">Turismo Urbano</option>
                                <option value="3">Turismo de Aventura</option>
                                <option value="4">Turismo de Compras</option>
                                <option value="4">Turismo Gastronómico</option>
                                </select><br>
                                <br />
                            Precio: <select name="precio" value="Precio">
                                <option value="1">Menos de ₡50.000</option>
                                <option value="2">₡50.000 - ₡100.000</option>
                                <option value="3">₡100.000 - ₡250.000</option>
                                <option value="4">Más de ₡250.000</option>
                                </select><br>
                                <br />
                            Cercanía: <select name="cercania" value="Cercania">
                                <option value="1">Menos de 25km</option>
                                <option value="2">25km - 100km</option>
                                <option value="3">Más de 100km</option>
                                </select><br>
                                <br />
                            Alimentación incluida: <select name="alimentacion" value="Alimentacion">
                                <option value="1">Sí</option>
                                <option value="2">No</option>
                                </select><br>
                                <br />
                            Transporte incluido: <select name="transporte" value="Transporte">
                                <option value="1">Sí</option>
                                <option value="2">No</option>
                                </select><br>
                                <br />

                            <input value="Buscar" class="btn btn-success" onclick="location.href='index.php?c=resultadosPaquetes&a=resultadosPaquetesAction'" type="button">
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </header>

<?php 
    include_once 'views/footer.php'; 
?>