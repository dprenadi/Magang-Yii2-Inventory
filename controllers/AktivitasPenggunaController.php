<?php

namespace app\controllers;

use app\models\AktivitasPengguna;
use app\models\AktivitasPenggunaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * AktivitasPenggunaController implements the CRUD actions for AktivitasPengguna model.
 */
class AktivitasPenggunaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
                'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'create', 'update', 'view', 'delete'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            ]
        );
    }

    /**
     * Lists all AktivitasPengguna models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AktivitasPenggunaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AktivitasPengguna model.
     * @param string $ID_AKTIVITAS Id  Aktivitas
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AktivitasPengguna model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AktivitasPengguna();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->ID_AKTIVITAS]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AktivitasPengguna model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $ID_AKTIVITAS Id  Aktivitas
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID_AKTIVITAS]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AktivitasPengguna model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $ID_AKTIVITAS Id  Aktivitas
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AktivitasPengguna model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $ID_AKTIVITAS Id  Aktivitas
     * @return AktivitasPengguna the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID_AKTIVITAS)
    {
        if (($model = AktivitasPengguna::findOne($ID_AKTIVITAS)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
