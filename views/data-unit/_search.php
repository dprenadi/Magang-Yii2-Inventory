<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataUnitSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-unit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ID_UNIT') ?>

    <?= $form->field($model, 'ID_REGION') ?>

    <?= $form->field($model, 'NAMA_UNIT') ?>

    <?= $form->field($model, 'SINGKATAN') ?>

    <?= $form->field($model, 'KETERANGAN') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
