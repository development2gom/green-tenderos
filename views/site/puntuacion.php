<?php

?>

<div class="row">
    <div class="col-4 col-sm-12 col-md-4 col-lg-4">
    
    </div>
    <div class="col-8 col-sm-12 col-md-8 col-lg-8">
        <h5><?= $tienda->txt_nombre ?></h5>
        <p>Actual: <?= $puntuajeActual->num_puntuaje_actual ?></p>
        <p>Antes: <?= $puntuajeActual->num_saldo_anterior ?></p>
        <p>Mes: <?= $puntuajeActual->num_saldo_mes ?></p>
        <p>Total: <?= $puntuajeActual->num_saldo_acumulado ?></p>
        <p>Nivel: <?= $puntuajeActual->nivel->txt_nombre ?></p>
        <p>Siguiente nivel: <?= $puntuajeActual->num_puntos_sig_experiencia ?></p>
    </div>
</div>

