


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
                                <input type="number" class="form-control" id="" min="1" placeholder="Cantidad de Habitaciones">
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
<!-- Fureza bruta para tiempos de deseperación :) -->
<br>
<br>

