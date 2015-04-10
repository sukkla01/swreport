<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PrapaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ประปา';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prapa-index">

    <h1>บันทึกข้อมูลระบบผลิตน้ำประปา</h1>
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
            'date_time',
            'num1',
            'num2',
             'chlorinefirst',
             'chlorineennd',
             'staff',
             'comment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
