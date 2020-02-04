<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Orders */

$this->title = $model->order_id;
$this->params['breadcrumbs'][] = ['label' => 'Foods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="foods-view">

    <h1><?= Html::encode($this->title) ?></h1>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'order_id',
            'order_comment',
            'order_quantity',
            'orderedBy.username',
            'orderedFood.food_name',
            [
                    'label'=>"Ordered Food Price",
                    'value'=>$model->orderedFood->food_price . ' JD'
            ],
            [
                'label' => '<h3>Total</h3>',
                'value' => $model->order_quantity * $model->orderedFood->food_price . ' JD',
            ],
        ],
    ]) ?>

</div>
