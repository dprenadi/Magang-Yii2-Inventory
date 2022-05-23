<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PengadaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengadaans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengadaan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengadaan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_pengadaan',
            'tgl_pengadaan',
            'kd_supplier',
            'jenis_pengadaan',
            'keterangan',
            //'kd_petugas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
