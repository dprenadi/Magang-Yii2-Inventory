<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PodetailSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="podetail-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'nopo') ?>

    <?= $form->field($model, 'item') ?>

    <?= $form->field($model, 'unit') ?>

    <?= $form->field($model, 'harga') ?>

    <?= $form->field($model, 'jenispengadaan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
