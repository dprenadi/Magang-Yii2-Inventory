<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Inventbarang */

$this->title = 'Update Inventbarang: ' . $model->kd_inventaris;
$this->params['breadcrumbs'][] = ['label' => 'Inventbarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_inventaris, 'url' => ['view', 'id' => $model->kd_inventaris]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inventbarang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
