<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Po */

$this->title = 'Update Po: ' . $model->nopo;
$this->params['breadcrumbs'][] = ['label' => 'Pos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nopo, 'url' => ['view', 'id' => $model->nopo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="po-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
