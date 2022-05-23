<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataJabatan */

$this->title = 'Update Data Jabatan: ' . $model->idjabatan;
$this->params['breadcrumbs'][] = ['label' => 'Data Jabatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idjabatan, 'url' => ['view', 'id' => $model->idjabatan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-jabatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
