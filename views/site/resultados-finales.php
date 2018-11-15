<?php

use yii\helpers\Url;
use app\models\Constantes;

$this->title = "Puntuación";

$this->params['classBody'] = "puntuaciones";
?>


<div class="contend puntuaciones-contend">

    <div class="puntuaciones-title">
        <img src="<?=Url::base()?>/webAssets/images/logo-cdg.png" alt="">
        <h2>
            <span>círculo</span>
            <span>de</span>
            <span>puntuaciones</span>
        </h2>
    </div>
    
    <div class="puntuaciones-textos">
        <h3><?=Yii::$app->user->identity->txt_nombre;?></h3>
        <div class="puntuaciones-textos-table">

            <div class="puntuaciones-textos-table-td">
                <h4>Total de puntos al cierre 2018</h4>
                <p><?= number_format($resultadoFinal->num_total, 2, ".", "," )?></p>
            </div>
            <div class="puntuaciones-textos-table-td">
                <h4>No de Folio</h4>
                <p><?= $resultadoFinal->txt_folio ?></p>
            </div>
            <div class="puntuaciones-textos-table-td">
                <h4>Zona</h4>
                <p><?= $resultadoFinal->txt_zona ?></p>
            </div>
            <div class="puntuaciones-textos-table-td">
                <h4>Sorteo</h4>
                <p><?= $resultadoFinal->txt_sorteo ?></p>
            </div>
           
        </div>
    </div>

    <p><?=$resultadoFinal->txt_leyenda?></p>

</div>

