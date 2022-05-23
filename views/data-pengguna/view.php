<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DataPengguna */

$this->title = $model->ID_PENGGUNA;
$this->params['breadcrumbs'][] = ['label' => 'Data Penggunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-pengguna-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_PENGGUNA], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_PENGGUNA], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_PENGGUNA',
            'username',
            'password',
            'NAMA_PENGGUNA',
            'JABATAN_PENGGUNA',
            'ALAMAT_PENGGUNA:ntext',
            'NO_TELP_PENGGUNA',
            'EMAIL_PENGGUNA:email',
            'JENIS_USER',
            'STATUS_USER',
            'accessToken',
            'authKey',
        ],
    ]) ?>

</div>
