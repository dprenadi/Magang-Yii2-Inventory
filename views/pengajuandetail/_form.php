<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pengajuandetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengajuandetail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_pengajuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
