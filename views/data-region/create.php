<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataRegion */

$this->title = 'Create Data Region';
$this->params['breadcrumbs'][] = ['label' => 'Data Regions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-region-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
