<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataJabatan */

$this->title = 'Create Data Jabatan';
$this->params['breadcrumbs'][] = ['label' => 'Data Jabatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-jabatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
