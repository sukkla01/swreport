<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Prapa */

$this->title = 'บันทึกประปา';
$this->params['breadcrumbs'][] = ['label' => 'ประปา', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prapa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
