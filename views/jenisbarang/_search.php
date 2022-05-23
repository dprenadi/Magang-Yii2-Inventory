<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JenisbarangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jenisbarang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'kd_barang') ?>

    <?= $form->field($model, 'nama_barang') ?>

    <?= $form->field($model, 'satuan') ?>

    <?= $form->field($model, 'merek') ?>

    <?= $form->field($model, 'kd_kategori') ?>

    <?php // echo $form->field($model, 'umur_ekonomi') ?>

    <?php // echo $form->field($model, 'hps') ?>

    <?php // echo $form->field($model, 'gol_inventory') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
