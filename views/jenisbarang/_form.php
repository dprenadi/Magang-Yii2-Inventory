<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Kategori;

/* @var $this yii\web\View */
/* @var $model app\models\Jenisbarang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jenisbarang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'satuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'merek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_kategori')->dropDownList(
        ArrayHelper::map(Kategori::find()->all(), 'kd_kategori', 'kd_kategori'),
        ['prompt'=>'Pilih Kode Kategori']
            )
    ?>

    <?= $form->field($model, 'umur_ekonomi')->textInput() ?>

    <?= $form->field($model, 'hps')->textInput() ?>

    <?= $form->field($model, 'gol_inventory')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
