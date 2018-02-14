<?php

namespace app\controllers;

use Yii;
use app\models\Karyawan;
use app\models\KaryawanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SiskarrController implements the CRUD actions for Karyawan model.
 */
class SiskarrController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Karyawan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KaryawanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Karyawan model.
     * @param string $nip
     * @param string $kode_bagian
     * @param string $golongan
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nip, $kode_bagian, $golongan)
    {
        return $this->render('view', [
            'model' => $this->findModel($nip, $kode_bagian, $golongan),
        ]);
    }

    /**
     * Creates a new Karyawan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Karyawan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nip' => $model->nip, 'kode_bagian' => $model->kode_bagian, 'golongan' => $model->golongan]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Karyawan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $nip
     * @param string $kode_bagian
     * @param string $golongan
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nip, $kode_bagian, $golongan)
    {
        $model = $this->findModel($nip, $kode_bagian, $golongan);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nip' => $model->nip, 'kode_bagian' => $model->kode_bagian, 'golongan' => $model->golongan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Karyawan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $nip
     * @param string $kode_bagian
     * @param string $golongan
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nip, $kode_bagian, $golongan)
    {
        $this->findModel($nip, $kode_bagian, $golongan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Karyawan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nip
     * @param string $kode_bagian
     * @param string $golongan
     * @return Karyawan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nip, $kode_bagian, $golongan)
    {
        if (($model = Karyawan::findOne(['nip' => $nip, 'kode_bagian' => $kode_bagian, 'golongan' => $golongan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
