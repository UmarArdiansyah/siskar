<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bagian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bagian-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'kode_bagian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
         <?= Html::a('Kembali',['index'], ['class' => 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
