<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Login';
$this->params['classBody'] = "login-page";
// page-login-v2 layout-full page-dark 

$this->registerJsFile(
    '@web/webAssets/js/site/index.js',
    ['depends' => [\app\assets\AppAsset::className()]]
);
?>

<div class="contend login-contend">

	<div class="login-title animation-slide-top animation-duration-1">
		<img src="<?=Url::base()?>/webAssets/images/logo-sorteo.png" alt="">
	</div>

	<div class="login-form animation-slide-top animation-duration-2">

		<h3>Ingresa</h3>
		
		<?php 
		$form = ActiveForm::begin([
			'id' => 'form-ajax'
		]);
		?>
			
			<?= $form->field($model, 'txt_clave_tienda')->textInput(["class" => "form-control", 'placeholder'=>'Clave tienda'])->label(false) ?>

			<?= $form->field($model, 'txt_clave_bodega')->textInput(["class" => "form-control", 'placeholder'=>'Clave bodega'])->label(false) ?>

			<div class="form-group form-group-check">
				<ul class="unstyled centered">
					<li>
						<input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1">
						<label for="styled-checkbox-1">
							<span>He leído y acepto el aviso de privacidad</span>
						</label>
						<div class="styled-mask js-mask-check"></div>
					</li>
				</ul>
			</div>

			<div class="form-group form-group-actions">
				<?= Html::submitButton('<span class="ladda-label">Ingresar</span>', ["data-style" => "zoom-in", 'class' => 'btn btn-primary ladda-button', 'name' => 'login-button']); ?>
			</div>

		<?php ActiveForm::end(); ?>

	</div>

</div>


<div class="modal modal-aviso fade" id="modal-aviso" aria-labelledby="modal-aviso" role="dialog" tabindex="-1" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-simple modal-center">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title">Aviso de Privacidad</h4>
			</div>
			<div class="modal-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada, nibh eget fringilla porttitor, dolor nulla mollis augue, id bibendum odio ante eu lacus. Sed ut neque commodo, finibus nulla et, commodo nibh. Aliquam ut leo interdum, vulputate tortor in, ullamcorper tortor. Praesent eleifend porta dapibus. Donec rutrum, lorem non commodo tincidunt, neque nibh congue lacus, eu malesuada magna ante in lorem. Maecenas commodo nisl eget dolor iaculis, ac facilisis tortor rutrum. Nam ut lobortis nibh. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam a quam interdum, feugiat orci vel, finibus lorem. Etiam suscipit orci nec arcu viverra tempus. Etiam in laoreet est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque placerat, nulla vel molestie ullamcorper, est mauris rutrum purus, vitae laoreet nisl metus sit amet risus. </p>
				<p>Nullam a arcu faucibus, molestie arcu eu, venenatis quam. Donec et urna sed urna blandit vulputate. Etiam euismod aliquet felis, sed sodales ipsum scelerisque non. Quisque aliquet pellentesque est at euismod. Morbi massa lorem, pretium nec molestie pharetra, interdum quis purus. Quisque rhoncus risus quis mauris consequat, et cursus dui feugiat. Proin blandit ultricies mi, quis tristique tellus. Duis vulputate imperdiet diam, nec facilisis est vestibulum vitae. Curabitur quam odio, ultrices vel est volutpat, molestie congue neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut arcu nunc, posuere sit amet auctor in, accumsan nec turpis. Nunc eget rhoncus sapien. Praesent ut eros non leo pharetra euismod. Donec et risus vestibulum, eleifend risus vel, finibus purus. Curabitur vel tellus est. </p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary" id="btn-acepto-terminos">Acepto el Aviso de Privacidad</button>
			</div>
		</div>
	</div>
</div>