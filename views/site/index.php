<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = "Inicio";

$this->params['classBody'] = "dashboard";
// site-navbar-small site-top
?>

<div class="contend dash-contend">

    <!-- <div class="d-contend"> -->
    
        <div class="dash-col dash-menu">
            <a href="<?=Url::base()?>/site/aviso-privacidad" class="btn btn-primary btn-lg active" role="button">Aviso de Privacidad</a>
            <a href="<?=Url::base()?>/site/terminos-condiciones" class="btn btn-primary btn-lg active" role="button">Términos y Condiciones</a>
            <a href="<?=Url::base()?>/site/ganadores" class="btn btn-primary btn-lg active" role="button">Ganadores</a>
            <a href="<?=Url::base()?>/site/testimonios" class="btn btn-primary btn-lg active" role="button">Testimonios</a>
            <a href="<?=Url::base()?>/site/premios" class="btn btn-primary btn-lg active" role="button">Premios</a>
        </div>

        <div class="dash-col dash-sorteos">
            <img src="<?=Url::base()?>/webAssets/images/logo-sorteo.png" alt="Logo Sorteo">

            <ol type="1">
                <li class="one">Ingresa con tu Nud y bodega</li>
                <li class="two">Checa tus puntos</li>
            </ol>
        </div>

        <div class="dash-col dash-actions">
            <div class="dash-actions-image">
                <a href="<?=Url::base()?>/login" class="btn btn-primary">Ingresar</a>
            </div>
        </div>

    <!-- </div> -->

</div>
