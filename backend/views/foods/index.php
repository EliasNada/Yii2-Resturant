<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FoodsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foods-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Foods', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'food_id',
            'food_name',
            'food_available',
            'food_price',
            'food_category',
            [
                    'attribute'=>"food_img",
                    'value'=>function($model){
                    return Yii::getAlias('@foodImgPath')."/".$model->food_img;
                    },
                    'format'=>["image",['width'=>'150','height'=>"150"]]
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
