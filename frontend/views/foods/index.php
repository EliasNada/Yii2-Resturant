<?php

use yii\grid\DataColumn;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\VarDumper;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\FoodsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foods-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]);
//    VarDumper::dump($dataProvider,100,true);die();
    ?>


    <?=


    ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => 'item',
        'summary'=>'',
        'viewParams' => [
            'fullView' => true,
            'context' => 'main-page',
        ],
    ]);

    ?>

    <?php


//    Yii::$app->redis->set('mykey', 'redis value eksde');
//    echo Yii::$app->redis->get('mykey');
//        VarDumper::dump($dataProvider,100,true);
    ?>


</div>
