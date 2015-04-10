<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Prapa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prapa-form">

    <?php $form = ActiveForm::begin(); ?>

    
     <?= $form->field($model, 'date_rec')->widget(DatePicker::className(), [
                'language' => 'th',
                'dateFormat' => 'yyyy-MM-dd',
                //'value'=>$date1,
                'clientOptions' => [
                    'changeMonth' => true,
                    'changeYear' => true,
                ],
                'options' => ['class' => 'form-control']
            ]);
            ?>
    
    <?= $form->field($model, 'date_time')->textInput(['maxlength' => true, 'value' =>date('H:m:s')]) ?>

    <?= $form->field($model, 'num1')->textInput() ?>

    <?= $form->field($model, 'num2')->textInput() ?>

    <?= $form->field($model, 'chlorinefirst')->textInput() ?>

    <?= $form->field($model, 'chlorineennd')->textInput() ?>

    <?= $form->field($model, 'staff')->textInput(['maxlength' => true, 'value' => Yii::$app->user->displayName]) ?>

    <?= $form->field($model, 'comment')->textarea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
