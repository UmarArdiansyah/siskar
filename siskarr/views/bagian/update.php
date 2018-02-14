<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bagian */

$this->title = 'Update Bagian: ' . $model->kode_bagian;
$this->params['breadcrumbs'][] = ['label' => 'Bagians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_bagian, 'url' => ['view', 'id' => $model->kode_bagian]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bagian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
