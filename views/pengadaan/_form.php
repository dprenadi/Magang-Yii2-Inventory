<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pengadaan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengadaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_pengadaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_pengadaan')->textInput() ?>

    <?= $form->field($model, 'kd_supplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_pengadaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_petugas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
