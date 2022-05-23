<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Po */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="po-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nopo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nokp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nokon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglpo')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'idvendor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idpejabat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sapproval')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateapproval')->textInput() ?>

    <?= $form->field($model, 'spo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
