<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PrapaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prapa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date_rec') ?>

    <?= $form->field($model, 'date_time') ?>

    <?= $form->field($model, 'num1') ?>

    <?= $form->field($model, 'num2') ?>

    <?php // echo $form->field($model, 'chlorinefirst') ?>

    <?php // echo $form->field($model, 'chlorineennd') ?>

    <?php // echo $form->field($model, 'staff') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
