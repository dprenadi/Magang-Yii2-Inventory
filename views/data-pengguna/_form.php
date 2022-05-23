<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataPengguna */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-pengguna-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_PENGGUNA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAMA_PENGGUNA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'JABATAN_PENGGUNA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALAMAT_PENGGUNA')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'NO_TELP_PENGGUNA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EMAIL_PENGGUNA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'JENIS_USER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STATUS_USER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accessToken')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'authKey')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
