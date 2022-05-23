<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PeminjamanItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peminjaman-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_peminjaman')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_inventaris')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
