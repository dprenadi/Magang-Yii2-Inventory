<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataUnit */

$this->title = 'Update Data Unit: ' . $model->ID_UNIT;
$this->params['breadcrumbs'][] = ['label' => 'Data Units', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_UNIT, 'url' => ['view', 'ID_UNIT' => $model->ID_UNIT]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-unit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
