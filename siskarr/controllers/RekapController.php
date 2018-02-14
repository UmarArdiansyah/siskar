<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class RekapController extends Controller {
  public function actionIndex()
  {
    $query = Yii::$app->db->createCommand("Select * From karyawan a,bagian b,gaji c where a.kode_bagian = b.kode_bagian AND a.golongan = c.golongan") //Masukkan QUERY
    ->queryAll();

    return $this->render('index', [
      'query' => $query
    ]);
  }
}