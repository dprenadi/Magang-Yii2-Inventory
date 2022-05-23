<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Departemen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departemen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_departemen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_departemen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
