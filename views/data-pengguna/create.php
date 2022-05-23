<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataPengguna */

$this->title = 'Create Data Pengguna';
$this->params['breadcrumbs'][] = ['label' => 'Data Penggunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-pengguna-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
