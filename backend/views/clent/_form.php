<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Clent */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    .form-control {
        width: 100%!important;
    }
</style>
<div class="clent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'clent_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'clent_list_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_tell')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
