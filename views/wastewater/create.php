<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Wastewater */

$this->title = 'บันทึกระบบบำบัดน้ำเสีย';
$this->params['breadcrumbs'][] = ['label' => 'ระบบบำบัดน้ำเสีย', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wastewater-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
