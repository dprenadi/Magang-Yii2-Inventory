<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pengajuandetail */

$this->title = 'Update Pengajuandetail: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pengajuandetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengajuandetail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
