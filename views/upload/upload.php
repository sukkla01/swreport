<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\models\UploadForm;
?>


<?php
$form = ActiveForm::begin([
            'options' => [
                'enctype' => 'multipart/form-data'
            ]
        ]);
?>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Panel title</h3>
    </div>
    <div class="panel-body"> 
        <?= $form->field($model, 'file')->fileInput(); ?>
        <?= Html::submitInput('ส่งข้อมูล', ['class' => 'btn btn-warning']);
        ?>

    </div>
</div>
<?php
ActiveForm::end();
?>
