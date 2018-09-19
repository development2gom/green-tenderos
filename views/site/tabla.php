<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = "Puntuación";

$this->params['classBody'] = "puntuaciones";
// site-navbar-small site-top
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
        <h3>Nombre del usuario</h3>
        <div class="puntuaciones-textos-table">

            <div class="puntuaciones-textos-table-td">
                <h4>Puntos del mes anterior</h4>
                <p>1244</p>
            </div>
            <div class="puntuaciones-textos-table-td">
                <h4>Puntos del mes anterior</h4>
                <p>1244</p>
            </div>
            <div class="puntuaciones-textos-table-td">
                <h4>Puntos del mes anterior</h4>
                <p>1244</p>
            </div>
            <div class="puntuaciones-textos-table-td">
                <h4>Puntos del mes anterior</h4>
                <p>1244</p>
            </div>
           
        </div>
    </div>

</div>
