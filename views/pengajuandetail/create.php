<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pengajuandetail */

$this->title = 'Create Pengajuandetail';
$this->params['breadcrumbs'][] = ['label' => 'Pengajuandetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengajuandetail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
