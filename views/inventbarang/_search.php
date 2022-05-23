<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InventbarangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inventbarang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'kd_inventaris') ?>

    <?= $form->field($model, 'kd_barang') ?>

    <?= $form->field($model, 'tgl_beli') ?>

    <?= $form->field($model, 'harga') ?>

    <?= $form->field($model, 'kondisi') ?>

    <?php // echo $form->field($model, 'status_barang') ?>

    <?php // echo $form->field($model, 'unit') ?>

    <?php // echo $form->field($model, 'kd_lokasi') ?>

    <?php // echo $form->field($model, 'no_po') ?>

    <?php // echo $form->field($model, 'tgl_po') ?>

    <?php // echo $form->field($model, 'sumber_dana') ?>

    <?php // echo $form->field($model, 'no_spk') ?>

    <?php // echo $form->field($model, 'id_vendor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
