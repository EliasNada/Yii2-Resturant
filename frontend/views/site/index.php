<?php

/* @var $this yii\web\View */
/* @var $arrayDataProvider yii\data\ActiveDataProvider */


use yii\helpers\VarDumper;
use yii\widgets\ListView;
use yii\helpers\Html;

$this->title = 'Home';
?>

<h1>Welcome</h1>

<?=

ListView::widget([
    'dataProvider' => $arrayDataProvider,
    'itemView' => function ($model){
        return Html::a(Html::encode($model['cat_name']),['../foods', 'cat' => $model['cat_id']]);
    },
    'itemOptions' => ['class' => 'col-xs-6 col-sm-3'],
    'summary'=>"",
    'viewParams' => [
        'fullView' => true,
        'context' => 'main-page',
    ],
]);
// 'xd'
?>
<hr />
<?php //= Html::a("View All", ['../foods']); ?>


<?php // VarDumper::dump($arrayDataProvider,100,true); ?>
