<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = "Términos y Condiciones";

$this->params['classBody'] = "terminos-condiciones";
// site-navbar-small site-top
?>

<div class="contend tc-contend">

    <div class="tc-title">
        <img src="<?=Url::base()?>/webAssets/images/logo-cdg.png" alt="">
        <h2>
            <span class="tc-title-aviso">Términos</span>
            <span class="tc-title-de">y</span>
            <span class="tc-title-privacidad">Condiciones</span>
        </h2>
    </div>
    
    <div class="tc-textos">

        <a href="<?=Url::base()?>/webAssets/pdf/terminos-condiciones.pdf" target="blank" class="tc-textos-item">
            <img src="<?=Url::base()?>/webAssets/images/pdf.png" alt="">
            <span>Descargar Término y Condiciones</span>
        </a>

    </div>

</div>
