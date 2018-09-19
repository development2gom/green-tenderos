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
                <p>. Rubén Vázquez Galván</p>
                <p>. Marina Aguilar Trejo</p>
                <p>. Eduardo Méndez González</p>
                <p>. Roxana Reyes Herrera</p>
                <p>. Jimena Hernández</p>
            </div>
            <div class="puntuaciones-textos-table-td">
                <p>. Ernesto García Cuevas</p>
                <p>. Lucía Fernanda Pérez</p>
                <p>. Mario Santos López</p>
                <p>. Gabriel Medina Díaz</p>
                <p>. Máximo Santana López</p>
            </div>
                
        </div>
    </div>

</div>
