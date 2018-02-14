<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Karyawan;
use app\models\Bagian;
use app\models\Gaji;



/* @var $this yii\web\View */
/* @var $model app\models\Karyawan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="karyawan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_bagian')->dropDownList(
      		ArrayHelper::map( Bagian::find()->all(), 'kode_bagian','kode_bagian'),[
      				'prompt'=>'Select Kode bagian',

      		]
      ) ?>

    <?= $form->field($model, 'golongan')->dropDownList(
      		ArrayHelper::map( Gaji::find()->all(), 'golongan','golongan'),[
      				'prompt'=>'Select Golongan',

      		]
      ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
