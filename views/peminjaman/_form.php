<?php

use app\models\Petugas;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Peminjaman */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peminjaman-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_peminjaman')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_peminjaman')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'tgl_akan_kembali')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'tgl_kembali')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'kd_pegawai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_kembali')->dropDownList([ 'Pinjam' => 'Pinjam', 'Kembali' => 'Kembali', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kd_petugas')->dropDownList(
        ArrayHelper::map(Petugas::find()->all(), 'kd_petugas', 'kd_petugas'),
        ['prompt'=>'Pilih Kode']
            )
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
