<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="foods-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order_comment')->textArea(['maxlength' => true]) ?>
    <?= $form->field($model, 'ordered_by_id')->hiddenInput(['value'=> Yii::$app->user->id])->label(false) ?>
    <?= $form->field($model, 'ordered_food_id')->hiddenInput(['value'=> Yii::$app->request->get('id')])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Order', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
