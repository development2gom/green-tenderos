<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CatTiendas */

$this->title = 'Update Cat Tiendas: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Cat Tiendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->txt_clave_tienda, 'url' => ['view', 'id' => $model->txt_clave_tienda]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cat-tiendas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
