<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PengajuanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengajuans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengajuan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengajuan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_pengajuan',
            'tgl_pengajuan',
            'pengaju',
            'pelaksana',
            'lokasikirim',
            //'alamat',
            //'no_spk',
            //'no_add',
            //'unit',
            //'idpejabat',
            //'tglapproval',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
