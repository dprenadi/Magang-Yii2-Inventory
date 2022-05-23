<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Inventbarang */

$this->title = 'Create Inventbarang';
$this->params['breadcrumbs'][] = ['label' => 'Inventbarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventbarang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
