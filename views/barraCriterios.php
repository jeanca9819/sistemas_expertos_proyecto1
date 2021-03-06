<div class="container" style="padding-top: 120px">
    <div class="barra">
        <form name="<?= $_GET['c'] ?? 'paquetes' ?>" method="post">
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
                                <select class="form-control" name=<?= $atributos[$key] ?>>
                                    <?php
                                    foreach ($criterio as $text => $value) {
                                        ?>
                                        <option value=<?= $value ?>><?= $text ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <?php
                            } else {
                                ?>
                                <input name=<?= $atributos[$key] ?> type="number" class="form-control" id="" min="1" placeholder="Cantidad">
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
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
        </form>
    </div>
</div>
<br>
<br>

