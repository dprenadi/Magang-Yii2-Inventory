<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PengadaanItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengadaan-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_pengadaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga_beli')->textInput() ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
