<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\DataRegion;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\DataUnit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-unit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_UNIT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_REGION')->dropDownList(
        ArrayHelper::map(DataRegion::find()->all(), 'ID_REGION', 'ID_REGION'),
        ['prompt'=>'Pilih Kode']
            )
    ?>


    <?= $form->field($model, 'NAMA_UNIT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SINGKATAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KETERANGAN')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
