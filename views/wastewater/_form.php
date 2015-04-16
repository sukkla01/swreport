<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Wastewater */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wastewater-form">

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

     <?= $form->field($model, 'time_rec')->textInput(['maxlength' => true, 'value' =>date('H:m:s')]) ?>

    <?= $form->field($model, 'too1')->textInput() ?>

    <?= $form->field($model, 'too2')->textInput() ?>

    <?= $form->field($model, 'takon')->textInput() ?>

    <?= $form->field($model, 'pump')->dropDownList([ 'สูบ' => 'สูบ', 'ไม่สูบ' => 'ไม่สูบ', ], ['prompt' => '-กรุณาเลือก-']) ?>

    <?= $form->field($model, 'chlorine')->textInput() ?>

    <?= $form->field($model, 'pump_chlorine')->dropDownList([ 'เติม' => 'เติม', 'ไม่เติม' => 'ไม่เติม', ], ['prompt' => '-กรุณาเลือก-']) ?>

    <?= $form->field($model, 'count_chlorine')->textInput() ?>

    <?= $form->field($model, 'ph')->textInput() ?>

    <?= $form->field($model, 'do')->textInput() ?>

    <?= $form->field($model, 'staff')->textInput(['maxlength' => true, 'value' => Yii::$app->user->displayName]) ?>

    <?= $form->field($model, 'comment')->textarea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
