<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Karyawan */

$this->title = $model->nip;
$this->params['breadcrumbs'][] = ['label' => 'Karyawans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="karyawan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nip' => $model->nip, 'kode_bagian' => $model->kode_bagian, 'golongan' => $model->golongan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nip' => $model->nip, 'kode_bagian' => $model->kode_bagian, 'golongan' => $model->golongan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Back', ['index'], ['class' => 'btn btn-warning']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nip',
            'nama',
            'kode_bagian',
            'alamat',
            'golongan',
        ],
    ]) ?>

</div>
