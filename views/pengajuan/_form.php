<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pengajuan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengajuan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_pengajuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_pengajuan')->textInput() ?>

    <?= $form->field($model, 'pengaju')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pelaksana')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasikirim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_spk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_add')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idpejabat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglapproval')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
