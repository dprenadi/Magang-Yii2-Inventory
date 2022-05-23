<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataPenggunaDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-pengguna-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_PENGGUNA_DETAIL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_PENGGUNA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_REGION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_UNIT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'JENIS_PEKERJAAN')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
