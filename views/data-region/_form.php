<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataRegion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-region-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_REGION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAMA_REGION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KETERANGAN')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
