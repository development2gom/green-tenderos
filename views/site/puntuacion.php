<?php

use yii\helpers\Url;
use app\models\Constantes;
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

    <div class="col-8 col-sm-12 col-md-12 col-lg-12">
        <?php
        foreach($imagenes as $imagen){
            echo $imagen->txt_url;
        ?>
            <video src="<?= Constantes::URL_ADMIN . "/imagenes-ganadores/" . $imagen->txt_url?>" alt="">
        <?php
        }

        foreach($videos as $video){
            echo $video->txt_url;
        ?>
            <video src="<?= Constantes::URL_ADMIN . "/videos-ganadores/" . $imagen->txt_url?>" alt=""> </video>
            <video width="320" height="240" controls>
                <source src="<?= Constantes::URL_ADMIN . "/videos-ganadores/" . $imagen->txt_url?>" type="video/mp4">
                <source src="<?= Constantes::URL_ADMIN . "/videos-ganadores/" . $imagen->txt_url?>" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        <?php
        }
        ?>
    </div>
</div>

