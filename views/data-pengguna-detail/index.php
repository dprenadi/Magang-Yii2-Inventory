<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DataPenggunaDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Pengguna Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-pengguna-detail-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Data Pengguna Detail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_PENGGUNA_DETAIL',
            'ID_PENGGUNA',
            'ID_REGION',
            'ID_UNIT',
            'JENIS_PEKERJAAN',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
