<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use app\assets\AppAssetClassicTopBarBlank;
use yii\helpers\Url;

AppAssetClassicTopBarBlank::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="<?= Yii::$app->language ?>">
<!-- Etiqueta head -->
<?=$this->render("//components/head")?>
<body class="animsition <?=isset($this->params['classBody'])?$this->params['classBody']:''?>">

  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <?php $this->beginBody();?>
  

  <div class="page" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="page-content">
      
          <?=$content?>
        
      <?php # $this->render("//components/classic/topbar/footerBlank")?>
    </div>
  </div>  

  <?php $this->endBody();?>

  <div class="modal fade modal-aviso" id="examplePositionCenter" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-simple modal-center">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title">Modal Title</h4>
        </div>
        <div class="modal-body">
          <p>One fine body…</p>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-secondary">Save changes</button>
        </div> -->
      </div>
    </div>
  </div>

  <script>
  (function(document, window, $) {
    'use strict';
    var Site = window.Site;
    $(document).ready(function() {
      Site.run();
    });
  })(document, window, jQuery);
  </script>
</body>
</html>
<?php $this->endPage() ?>
