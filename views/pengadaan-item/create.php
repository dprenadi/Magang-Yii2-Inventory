<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PengadaanItem */

$this->title = 'Create Pengadaan Item';
$this->params['breadcrumbs'][] = ['label' => 'Pengadaan Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengadaan-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
