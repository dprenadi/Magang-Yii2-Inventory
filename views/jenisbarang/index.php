<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\JenisbarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jenisbarangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenisbarang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jenisbarang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_barang',
            'nama_barang',
            'satuan',
            'merek',
            'kd_kategori',
            'umur_ekonomi',
            'hps',
            'gol_inventory',
            'keterangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
