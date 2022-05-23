<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataRegion */

$this->title = 'Update Data Region: ' . $model->ID_REGION;
$this->params['breadcrumbs'][] = ['label' => 'Data Regions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_REGION, 'url' => ['view', 'ID_REGION' => $model->ID_REGION]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-region-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
