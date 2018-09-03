<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CatTiendas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cat-tiendas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'txt_clave_tienda')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_clave_bodega')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_nombre')->textInput(['maxlength' => true]) ?>

    

    <div class="form-group">
        <?= Html::submitButton('GUARDAR', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
