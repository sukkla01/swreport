<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Wastewater */

$this->title = 'Update Wastewater: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Wastewaters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wastewater-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
