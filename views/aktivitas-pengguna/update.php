<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AktivitasPengguna */

$this->title = 'Update Aktivitas Pengguna: ' . $model->ID_AKTIVITAS;
$this->params['breadcrumbs'][] = ['label' => 'Aktivitas Penggunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_AKTIVITAS, 'url' => ['view', 'id' => $model->ID_AKTIVITAS]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aktivitas-pengguna-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
