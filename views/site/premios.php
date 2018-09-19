<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = "Premios";

$this->params['classBody'] = "premios";
// site-navbar-small site-top
?>

<div class="contend premios-contend">

    <div class="premios-title">
        <img src="<?=Url::base()?>/webAssets/images/logo-cdg.png" alt="">
        <h2>
            Premios
        </h2>
    </div>
    
    <div class="premios-textos">
        <div class="premios-textos-img">
            <p class="t-left">Certificados de Viaje por la cantidad de <span>$60,000.00.</span></p>
            <img src="<?=Url::base()?>/webAssets/images/premios.png" alt="Premios">
        </div>
        <p class="t-center">Automóviles marca Nissan tipo sedán March Active modelo 2018.</p>
    </div>

</div>
