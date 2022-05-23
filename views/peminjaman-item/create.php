<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PeminjamanItem */

$this->title = 'Create Peminjaman Item';
$this->params['breadcrumbs'][] = ['label' => 'Peminjaman Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
