<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Foodcat */

$this->title = 'Create Foodcat';
$this->params['breadcrumbs'][] = ['label' => 'Foodcats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foodcat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
