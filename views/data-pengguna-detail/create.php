<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataPenggunaDetail */

$this->title = 'Create Data Pengguna Detail';
$this->params['breadcrumbs'][] = ['label' => 'Data Pengguna Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-pengguna-detail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
