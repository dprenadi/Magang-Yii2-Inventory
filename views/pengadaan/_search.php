<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PengadaanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengadaan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'no_pengadaan') ?>

    <?= $form->field($model, 'tgl_pengadaan') ?>

    <?= $form->field($model, 'kd_supplier') ?>

    <?= $form->field($model, 'jenis_pengadaan') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'kd_petugas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
