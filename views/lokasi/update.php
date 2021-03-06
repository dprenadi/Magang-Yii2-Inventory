<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lokasi */

$this->title = 'Update Lokasi: ' . $model->kd_lokasi;
$this->params['breadcrumbs'][] = ['label' => 'Lokasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_lokasi, 'url' => ['view', 'id' => $model->kd_lokasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lokasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
