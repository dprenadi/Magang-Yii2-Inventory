<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataJabatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-jabatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idjabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gedung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ruang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'divisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bidang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'level')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
