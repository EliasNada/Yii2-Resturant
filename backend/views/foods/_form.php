<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Foods */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="foods-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data'],
    ]); ?>

    <?= $form->field($model, 'food_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'food_available')->textInput() ?>

    <?= $form->field($model, 'food_price')->textInput() ?>

    <?= $form->field($model, 'food_category')->textInput() ?>

    <?= $form->field($model, 'food_img')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
