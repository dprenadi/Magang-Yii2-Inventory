<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataPenggunaDetailSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-pengguna-detail-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ID_PENGGUNA_DETAIL') ?>

    <?= $form->field($model, 'ID_PENGGUNA') ?>

    <?= $form->field($model, 'ID_REGION') ?>

    <?= $form->field($model, 'ID_UNIT') ?>

    <?= $form->field($model, 'JENIS_PEKERJAAN') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
