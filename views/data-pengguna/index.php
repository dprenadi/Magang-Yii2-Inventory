<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DataPenggunaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Penggunas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-pengguna-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Data Pengguna', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_PENGGUNA',
            'username',
            'password',
            'NAMA_PENGGUNA',
            'JABATAN_PENGGUNA',
            //'ALAMAT_PENGGUNA:ntext',
            //'NO_TELP_PENGGUNA',
            //'EMAIL_PENGGUNA:email',
            //'JENIS_USER',
            //'STATUS_USER',
            //'accessToken',
            //'authKey',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
