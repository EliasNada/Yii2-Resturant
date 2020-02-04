<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\VarDumper;

$this->title = 'Make Order';
$this->params['breadcrumbs'][] = ['label' => 'Foods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="foods-create">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('order_form', [
            'model' => $model,
        ]) ?>


    </div>

