<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 30%;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .container {
        padding: 2px 16px;
    }

    a {
        text-decoration: none;
    }
    a:hover {
        text-decoration: none;
    }
</style>



<div class="card col-lg-4">
    <img src="<?= "/images/foods/".$model['food_img'] ?>" alt="Avatar" style="width:100%;height: 250px">
    <div class="container">
        <h2><?= Html::encode($model['food_name']) ?> </h2>
        <h5> <?= $model['food_price']." JD" ?></h5>
        <h4><?= Html::encode($model->foodCategory->cat_name) ?></h4>
        <?php
        if ($model['food_available']==1){
            echo Html::a("Order Now!", ['foods/order', 'id' => $model['food_id']]);
        }else
            echo Html::encode("Sold Out")
        ?>
    </div>
</div>
