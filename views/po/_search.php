<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="po-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'nopo') ?>

    <?= $form->field($model, 'nokp') ?>

    <?= $form->field($model, 'nokon') ?>

    <?= $form->field($model, 'tglpo') ?>

    <?= $form->field($model, 'idvendor') ?>

    <?php // echo $form->field($model, 'idpejabat') ?>

    <?php // echo $form->field($model, 'sapproval') ?>

    <?php // echo $form->field($model, 'dateapproval') ?>

    <?php // echo $form->field($model, 'spo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
