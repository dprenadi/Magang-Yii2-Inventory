<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataPenggunaDetail */

$this->title = 'Update Data Pengguna Detail: ' . $model->ID_PENGGUNA_DETAIL;
$this->params['breadcrumbs'][] = ['label' => 'Data Pengguna Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_PENGGUNA_DETAIL, 'url' => ['view', 'ID_PENGGUNA_DETAIL' => $model->ID_PENGGUNA_DETAIL]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-pengguna-detail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
