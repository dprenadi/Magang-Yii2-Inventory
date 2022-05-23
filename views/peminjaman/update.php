<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Peminjaman */

$this->title = 'Update Peminjaman: ' . $model->no_peminjaman;
$this->params['breadcrumbs'][] = ['label' => 'Peminjamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_peminjaman, 'url' => ['view', 'id' => $model->no_peminjaman]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="peminjaman-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
