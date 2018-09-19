<?php
use yii\helpers\Url;
use app\models\Constantes;
/* @var $this yii\web\View */

$this->title = "Testimonios";

$this->params['classBody'] = "testimonios";
// site-navbar-small site-top
?>

<div class="contend testimonios-contend">

    <div class="testimonios-title">
        <img src="<?=Url::base()?>/webAssets/images/logo-cdg.png" alt="">
        <h2>
            testimonios
        </h2>
    </div>
    
    <div class="testimonios-textos">
        
        <div class="testimonios-imagenes-col">
        <?php
        foreach($imagenes as $imagen){
            
        ?>
              
            <div class="testimonios-imagenes-col-a">
            <img src="<?= Constantes::URL_ADMIN . "/imagenes-ganadores/" . $imagen->txt_url?>" alt="">
            </div>
           
        <?php
           }
        ?>
        </div>
        <div class="testimonios-videos-col">
        <?php
        foreach($videos as $video){
            
        ?>
            <div class="row"> 
               <div class="col-12">
            <div class="testimonios-imagenes-col-b">
            <video width="320" height="240" controls>
                <source src="<?= Constantes::URL_ADMIN . "/videos-ganadores/" . $video->txt_url?>" type="video/mp4">
                <source src="<?= Constantes::URL_ADMIN . "/videos-ganadores/" . $video->txt_url?>" type="video/ogg">
                Your browser does not support the video tag.
            </video>
            </div>
            </div>
            </div>
           
        
            <?php
        }
        ?>
        </div>

    </div>

</div>
