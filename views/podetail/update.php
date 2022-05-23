<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Podetail */

$this->title = 'Update Podetail: ' . $model->nopo;
$this->params['breadcrumbs'][] = ['label' => 'Podetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nopo, 'url' => ['view', 'id' => $model->nopo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="podetail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
