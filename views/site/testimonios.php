<?php
use yii\helpers\Url;
use app\models\Constantes;
use app\models\EntVideos;
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
            <img src="<?= Constantes::URL_ADMIN . "/" . $imagen->txt_url?>" alt="">
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
                        <?php
                        /**
                         * Separar url de youtube y el id del video
                         */
                        $arrayUrl = explode('=', $video->txt_url);
                        ?>
                        <iframe width="420" height="315"
                            src="https://www.youtube.com/embed/<?= $arrayUrl[1] ?>">
                        </iframe>
                    </div>
                </div>
            </div>
           
        
            <?php
        }
        ?>
        </div>

    </div>

</div>
