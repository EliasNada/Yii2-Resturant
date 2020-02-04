<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Foods */

$this->title = $model->food_id;
$this->params['breadcrumbs'][] = ['label' => 'Foods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$url = Yii::getAlias('@foodImgPath')."/".$model->food_img;
$img = '<img src="'.$url.'" width="250" height="250">'

?>
<div class="foods-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->food_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->food_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'food_id',
            'food_name',
            'food_available',
            'food_price',
            'food_category',
            [
                    'attribute'=>"food_img",
                    'value'=> Yii::getAlias('@foodImgPath')."/".$model->food_img,
                    'format'=>["image",['width'=>'150','height'=>"150"]]
            ]
        ],
    ]) ?>

</div>
