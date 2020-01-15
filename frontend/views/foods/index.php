<?php

use yii\grid\DataColumn;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\VarDumper;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\FoodsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foods-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//            'food_id',
            'food_name',
//            'food_available',
//            'food_category',
            'foodCategory.cat_name',
//            ['class' => 'yii\grid\ActionColumn'],
            [
                'header' => 'Order',
                'content' => function($model) {
                if($model->food_available==1) {
                    return Html::a("Order Now!", ['foods/order', 'id' => $model->food_id]);
                }else{
                    return Html::encode("Sold Out");
                }
                }
            ],
        ],
    ]);
//        VarDumper::dump($dataProvider,100,true);

    ?>


</div>
