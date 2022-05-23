<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataJabatanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-jabatan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'idjabatan') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'gedung') ?>

    <?= $form->field($model, 'ruang') ?>

    <?= $form->field($model, 'divisi') ?>

    <?php // echo $form->field($model, 'bidang') ?>

    <?php // echo $form->field($model, 'level') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
