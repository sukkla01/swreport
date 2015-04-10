<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WastewaterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wastewater-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date_rec') ?>

    <?= $form->field($model, 'time_rec') ?>

    <?= $form->field($model, 'too1') ?>

    <?= $form->field($model, 'too2') ?>

    <?php // echo $form->field($model, 'takon') ?>

    <?php // echo $form->field($model, 'pump') ?>

    <?php // echo $form->field($model, 'chlorine') ?>

    <?php // echo $form->field($model, 'pump_chlorine') ?>

    <?php // echo $form->field($model, 'count_chlorine') ?>

    <?php // echo $form->field($model, 'ph') ?>

    <?php // echo $form->field($model, 'do') ?>

    <?php // echo $form->field($model, 'staff') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
