<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WastewaterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ระบบบำบัดน้ำเสีย';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wastewater-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('บันทึก', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          
            'date_rec',
            'time_rec',
            'too1',
            'too2',
             'takon',
             'pump',
             'chlorine',
             'pump_chlorine',
             'count_chlorine',
             'ph',
             'do',
             'staff',
             'comment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
