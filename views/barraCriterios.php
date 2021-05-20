<script>
    jQuery(document).ready(function () {
        jQuery('#hideshow').on('click', function (event) {
            jQuery('#content').toggle('show');
        });
    });
</script>


<div class="container" style="padding-top: 120px">
    <div class="barra">
        <form>
            <div class="row">
                <?php
                foreach ($criterios as $key => $criterio) {
                    ?>
                    <div class="col">
                        <div class="form-group">
                            <label style="color: white" for=""><?= $key ?></label>
                            <?php
                            if (is_array($criterio)) {
                                ?>
                                <select class="form-control">
                                    <?php
                                    foreach ($criterio as $opcion) {
                                        ?>
                                        <option><?= $opcion ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <?php
                            } else {
                                ?>
                                <input type="number" class="form-control" id="" placeholder="">
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="col text-right">
                <input type='button' id='hideshow' value='Filtrar'>
            </div>
        </form>
    </div>
</div>

<!--<div class="container" style="padding-top: 120px">-->
<!--    <div class="barra">-->
<!--        <form>-->
<!--            <div class="row">-->
<!--                <div class="col">-->
<!--                    <div class="form-group">-->
<!--                        <label style="color: white" for="">Tipo de alojamiento</label>-->
<!--                        <select class="form-control">-->
<!--                            <option>Cabaña</option>-->
<!--                            <option>Hotel</option>-->
<!--                            <option>Hostal</option>-->
<!--                            <option>Resort</option>-->
<!--                            <option>Bed and Breakfast</option>-->
<!--                        </select>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <div class="col">-->
<!--                        <label style="color: white" for="">Servicios</label>-->
<!--                        <select class="form-control">-->
<!--                            <option>Internet</option>-->
<!--                            <option>Cable</option>-->
<!--                            <option>Aire acondicionado</option>-->
<!--                            <option>Estacionamiento</option>-->
<!--                            <option>Restaurante</option>-->
<!--                        </select>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <div class="col">-->
<!--                        <label style="color: white" for="">Precios</label>-->
<!--                        <select class="form-control">-->
<!--                            <option>Menos de ₡50.000</option>-->
<!--                            <option>₡50.000 - ₡100.000</option>-->
<!--                            <option>₡100.000 - ₡250.000</option>-->
<!--                            <option>Más de ₡250.000</option>-->
<!--                        </select>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    <div class="col">-->
<!--                        <div class="form-group">-->
<!--                            <label style="color: white" for="">Estadia</label>-->
<!--                            <select class="form-control">-->
<!--                                <option>Menos de ₡50.000</option>-->
<!--                                <option>₡50.000 - ₡100.000</option>-->
<!--                                <option>₡100.000 - ₡250.000</option>-->
<!--                                <option>Más de ₡250.000</option>-->
<!--                            </select>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    <div class="col">-->
<!--                        <div class="col">-->
<!--                            <label style="color: white" for="exampleFormControlInput2">Cantidad de Habitaciones</label>-->
<!--                            <input type="number" class="form-control" id="exampleFormControlInput2" placeholder="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col text-right">-->
<!--                <input type='button' id='hideshow' value='Filtrar'>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->

<!-- Fureza bruta para tiempos de deseperación :) -->
<br>
<br>

