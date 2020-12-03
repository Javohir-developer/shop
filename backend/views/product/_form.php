<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $category_name =\yii\helpers\ArrayHelper::map(common\models\Category::find()->all(), 'id', 'category_name') ?>
<style>
    .form-control {
        width: 100%!important;
    }
</style>
<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imageFiles')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_about')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categore_id')->dropDownList($category_name, ['prompt' => '-Выберите категорию-',]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
