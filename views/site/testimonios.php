<?php
use yii\helpers\Url;
use app\models\Constantes;
use app\models\EntVideos;
use app\assets\AppAsset;
/* @var $this yii\web\View */

$this->title = "Testimonios";

$this->params['classBody'] = "testimonios";
// site-navbar-small site-top

$this->registerCssFile(
    '@web/webAssets/templates/classic/global/vendor/magnific-popup/magnific-popup.css',
    ['depends' => [AppAsset::className()]]
);

$this->registerCssFile(
    '@web/webAssets/templates/classic/topbar/assets/examples/css/pages/gallery.css',
    ['depends' => [AppAsset::className()]]
);

$this->registerJsFile(
    '@web/webAssets/js/site/testimonios.js',
    ['depends' => [AppAsset::className()]]
);

$this->registerJsFile(
    '@web/webAssets/templates/classic/topbar/assets/examples/js/pages/gallery.js',
    ['depends' => [AppAsset::className()]]
);

$this->registerJsFile(
    '@web/webAssets/templates/classic/global/vendor/magnific-popup/jquery.magnific-popup.min.js',
    ['depends' => [AppAsset::className()]]
);
?>

<div class="contend testimonios-contend">

    <div class="testimonios-title">
        <img src="<?=Url::base()?>/webAssets/images/logo-cdg.png" alt="">
        <h2>
            testimonios
        </h2>
    </div>
    
    <div class="testimonios-textos">

        <div class="testimonios-imagenes-title">

            <div class="testimonios-subtitle">
                <h3>Imágenes</h3>
            </div>

        </div>

        <div class="testimonios-videos-title">

            <div class="testimonios-subtitle">
                <h3>Vídeos</h3>
            </div>

        </div>
        
        <div class="testimonios-imagenes-row">

            <div class="testimonios-imagenes-col">
                <?php
                foreach($imagenes as $imagen){
                    
                ?>
                    
                    <div class="testimonios-imagenes-col-a">
                        <figure class="card-img-top card-imagen-bg overlay-hover overlay" style="background-image: url(<?= Constantes::URL_ADMIN . "/" . $imagen->txt_url?>);">
                            <figcaption class="overlay-panel overlay-background overlay-fade overlay-icon">
                                <a class="icon js-testimonios-imagen wb-image" href="<?= Constantes::URL_ADMIN . "/" . $imagen->txt_url?>"></a>
                            </figcaption>
                        </figure>
                        <p class="card-block"><?= $imagen->txt_nombre ?></p>
                    </div>
                
                <?php
                }
                ?>
            </div>

        </div>

        <div class="testimonios-videos-row">
            
            <div class="testimonios-videos-col">
                <?php
                foreach($videos as $video){
                    
                ?>
                    <div class="testimonios-imagenes-col-b">
                        <?php
                        /**
                         * Separar url de youtube y el id del video
                         */
                        // $arrayUrl = explode('=', $video->txt_url);
                        ?>
                        <!-- <iframe width="420" height="315"
                            src="https://www.youtube.com/embed/<?php // $arrayUrl[1] ?>">
                        </iframe> -->

                        <figure class="card-img-top overlay-hover overlay">
                            <video class="overlay-video overlay-figure overlay-scale" style="background-image: url('http://img.youtube.com/vi/<?= EntVideos::getIdVideoYoutube($video->txt_url) ?>/mqdefault.jpg') ">
                                <source src="http://img.youtube.com/vi/<?= EntVideos::getIdVideoYoutube($video->txt_url) ?>/mqdefault.jpg">
                                <!-- <source src="video.ogg" type="video/ogg">
                                <source src="video.webm" type="video/webm"> -->
                                Tu navegar no soporta la etiqueta de video.
                            </video> 

                            <figcaption class="overlay-panel overlay-background overlay-fade overlay-icon">
                                <a class="icon js-testimonios-video wb-play mfp-iframe" href="<?= $video->txt_url ?>"></a>
                            </figcaption>
                        </figure>
                        <p class="card-block"><?= $video->txt_nombre ?></p>
                    </div>
            
                <?php
            }
            ?>
            </div>

        </div>
        
    </div>
</div>
