<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Inventbarang */

$this->title = $model->kd_inventaris;
$this->params['breadcrumbs'][] = ['label' => 'Inventbarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="inventbarang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kd_inventaris], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kd_inventaris], [
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
            'kd_inventaris',
            'kd_barang',
            'tgl_beli',
            'harga',
            'kondisi',
            'status_barang',
            'unit',
            'kd_lokasi',
            'no_po',
            'tgl_po',
            'sumber_dana',
            'no_spk',
            'id_vendor',
        ],
    ]) ?>

</div>
