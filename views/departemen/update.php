<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Departemen */

$this->title = 'Update Departemen: ' . $model->kd_departemen;
$this->params['breadcrumbs'][] = ['label' => 'Departemens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_departemen, 'url' => ['view', 'id' => $model->kd_departemen]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="departemen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
