<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PengajuanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengajuan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'kd_pengajuan') ?>

    <?= $form->field($model, 'tgl_pengajuan') ?>

    <?= $form->field($model, 'pengaju') ?>

    <?= $form->field($model, 'pelaksana') ?>

    <?= $form->field($model, 'lokasikirim') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'no_spk') ?>

    <?php // echo $form->field($model, 'no_add') ?>

    <?php // echo $form->field($model, 'unit') ?>

    <?php // echo $form->field($model, 'idpejabat') ?>

    <?php // echo $form->field($model, 'tglapproval') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
