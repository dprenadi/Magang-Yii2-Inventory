<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\JenisBarang;
use app\models\Lokasi;
use app\models\Po;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Inventbarang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inventbarang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_inventaris')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_barang')->dropDownList(
        ArrayHelper::map(JenisBarang::find()->all(), 'kd_barang', 'kd_barang'),
        ['prompt'=>'Pilih Kode']
            )
    ?>

    <?= $form->field($model, 'tgl_beli')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'harga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kondisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_lokasi')->dropDownList(
        ArrayHelper::map(Lokasi::find()->all(), 'kd_lokasi', 'kd_lokasi'),
        ['prompt'=>'Pilih Kode']
            )
    ?>
    
    <?= $form->field($model, 'no_po')->dropDownList(
        ArrayHelper::map(Po::find()->all(), 'no_po', 'no_po'),
        ['prompt'=>'Pilih Kode']
            )
    ?>

    <?= $form->field($model, 'tgl_po')->textInput() ?>

    <?= $form->field($model, 'sumber_dana')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_spk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_vendor')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
