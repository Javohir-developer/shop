<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Clent */

$this->title = 'клиент';
$this->params['breadcrumbs'][] = ['label' => 'Clents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
