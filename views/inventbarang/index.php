<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\InventbarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inventbarangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventbarang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inventbarang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_inventaris',
            'kd_barang',
            'tgl_beli',
            'harga',
            'kondisi',
            //'status_barang',
            //'unit',
            //'kd_lokasi',
            //'no_po',
            //'tgl_po',
            //'sumber_dana',
            //'no_spk',
            //'id_vendor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
