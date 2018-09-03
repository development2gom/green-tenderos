<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CatTiendas */

$this->title = 'Tienda';
$this->params['breadcrumbs'][] = ['label' => 'Cat Tiendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-tiendas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
