<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Foodcat */

$this->title = 'Update Foodcat: ' . $model->cat_id;
$this->params['breadcrumbs'][] = ['label' => 'Foodcats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cat_id, 'url' => ['view', 'id' => $model->cat_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="foodcat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>