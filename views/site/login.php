<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Login';
$this->params['classBody'] = "page-login-v2 layout-full page-dark login-page";

$this->registerJsFile(
    '@web/webAssets/js/site/index.js',
    ['depends' => [\app\assets\AppAsset::className()]]
);
?>

<div class="page-brand-info">
	<!-- <div class="brand">
		<img class="brand-img" src="<?=Url::base()?>/webAssets/images/logo-pepsi.png" alt="PEPSI">
		<h2 class="brand-text font-size-40">PEPSI</h2>
	</div>
	<p class="font-size-16">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
</div>

<div class="page-login-mains animation-slide-left animation-duration-2">

	<div class="brand">
		<img class="brand-img brand-img-xs" src="<?=Url::base()?>/webAssets/images/icono-pepsi.png" alt="PEPSI">
		<!-- <h3 class="brand-text">PEPSI</h3> -->
	</div>

	<!--
	<h3 class="login-title">Iniciar sesión</h3>
	<p class="login-title-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	-->

	<?php 
	$form = ActiveForm::begin([
        'id' => 'form-ajax',
		'enableAjaxValidation' => true,
		'enableClientValidation' => true,
	]);
	?>
		
		<?= $form->field($model, 'txt_clave_tienda')->textInput(["class" => "form-control", 'placeholder'=>'Clave tienda']) ?>

		<?= $form->field($model, 'txt_clave_bodega')->textInput(["class" => "form-control", 'placeholder'=>'Clave bodega']) ?>

		<!-- <div class="form-group">
		<label class="sr-only" for="inputEmail">Email</label>
		<input class="form-control" id="inputEmail" name="email" placeholder="Email" type="email">
		</div>

		<div class="form-group">
		<label class="sr-only" for="inputPassword">Password</label>
		<input class="form-control" id="inputPassword" name="password" placeholder="Password" type="password">
		</div> -->

		<div class="form-group olvide-contrasena">
			<a class="login-link" href="<?= Url::base() ?>/peticion-pass">¿Olvidaste tu contraseña?</a>
		</div>

		<div class="form-group form-group-actions">
			<?= Html::submitButton('<span class="ladda-label">Ingresar</span>', ["data-style" => "zoom-in", 'class' => 'btn btn-secondary btn-block btn-lg mt-20 ladda-button', 'name' => 'login-button']); ?>
		</div>

		<div class="form-group necesito-cuenta">
			<a class="login-link" href="<?= Url::base() ?>/sign-up">Necesito una cuenta</a>
		</div>

	<?php ActiveForm::end(); ?>

	<footer class="page-copyright">		
		<div class="ayuda-soporte">
			<span>¿Necesitas ayuda? escribe a:</span>
			<a class="no-redirect login-link" href="mailto:soporte@2gom.com.mx?Subject=Solicitud%de%Soporte">soporte@2gom.com.mx</a>
		</div>
	</footer>
</div>
    