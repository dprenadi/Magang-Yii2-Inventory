<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Departemen;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Lokasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lokasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_departemen')->dropDownList(
        ArrayHelper::map(Departemen::find()->all(), 'kd_departemen', 'kd_departemen'),
        ['prompt'=>'Pilih Kode']
            )
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
