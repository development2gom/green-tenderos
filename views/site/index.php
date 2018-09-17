<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = "Dashboard";

$this->params['classBody'] = "site-navbar-small site-top dashboard";
?>

<div class="pane">

    <div class="pane-head">
        <div class="pane-title">
            <h2><?=$this->title?></h2>
            <div class="row">
                <div id="col-12">
                 <a href="<?=Url::base()?>/site/aviso-privacidad" class="btn btn-primary btn-lg active" role="button">Aviso de Privacidad</a>
                </div>
            </div>
            <div class="row">
                <div id="col-12">
                
                <a href="<?=Url::base()?>/site/terminos-condiciones" class="btn btn-primary btn-lg active" role="button">Terminos y Condiciones</a>
               
                </div>
                </div>
            <div class="row">
                <div id="col-12">
                
                <a href="<?=Url::base()?>/site/ganadores" class="btn btn-primary btn-lg active" role="button">Ganadores</a>
               
                </div>
                </div>
            <div class="row">
                <div id="col-12">
               
                <a href="<?=Url::base()?>/site/testimonios" class="btn btn-primary btn-lg active" role="button">Testimonios</a>
                
                </div>
                </div>
            <div class="row">
                <div id="col-12">
                
                <a href="<?=Url::base()?>/site/premios" class="btn btn-primary btn-lg active" role="button">Premios</a>
                
                </div>
            </div>
        </div>
        
    </div>

   


</div>
