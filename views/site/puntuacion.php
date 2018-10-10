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
                <h4>Puntos del mes anterior</h4>
                <p><?= $puntuajeActual->num_saldo_anterior ?></p>
            </div>
            <div class="puntuaciones-textos-table-td">
                <h4>Puntos del mes actual</h4>
                <p><?= $puntuajeActual->num_saldo_mes ?></p>
            </div>
            <div class="puntuaciones-textos-table-td">
                <h4>Acumulado total</h4>
                <p><?= $puntuajeActual->num_puntuaje_actual ?></p>
            </div>
            <div class="puntuaciones-textos-table-td">
                <h4>Objetivo</h4>
                <p><?= $puntuajeActual->num_puntos_sig_experiencia ?></p>
            </div>
           
        </div>
    </div>

    <p class="text-white"><?=$puntuajeActual->txt_leyenda?></p>

</div>

