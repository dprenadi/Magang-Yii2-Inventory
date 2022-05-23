<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AktivitasPengguna */

$this->title = 'Create Aktivitas Pengguna';
$this->params['breadcrumbs'][] = ['label' => 'Aktivitas Penggunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aktivitas-pengguna-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
