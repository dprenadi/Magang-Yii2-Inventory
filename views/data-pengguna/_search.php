<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataPenggunaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-pengguna-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ID_PENGGUNA') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'NAMA_PENGGUNA') ?>

    <?= $form->field($model, 'JABATAN_PENGGUNA') ?>

    <?php // echo $form->field($model, 'ALAMAT_PENGGUNA') ?>

    <?php // echo $form->field($model, 'NO_TELP_PENGGUNA') ?>

    <?php // echo $form->field($model, 'EMAIL_PENGGUNA') ?>

    <?php // echo $form->field($model, 'JENIS_USER') ?>

    <?php // echo $form->field($model, 'STATUS_USER') ?>

    <?php // echo $form->field($model, 'accessToken') ?>

    <?php // echo $form->field($model, 'authKey') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
