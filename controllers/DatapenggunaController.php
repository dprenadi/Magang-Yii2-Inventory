<?php

namespace app\controllers;

use Yii;
use app\models\DataPengguna;
use app\models\DataPenggunaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * DataPenggunaController implements the CRUD actions for DataPengguna model.
 */
class DataPenggunaController extends Controller
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
     * Lists all DataPengguna models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DataPenggunaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DataPengguna model.
     * @param string $ID_PENGGUNA Id  Pengguna
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
     * Creates a new DataPengguna model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        // $model = new DataPengguna();

        // if ($this->request->isPost) {
        //     if ($model->load($this->request->post()) && $model->save()) {
        //         return $this->redirect(['view', 'id' => $model->ID_PENGGUNA]);
        //     }
        // } else {
        //     $model->loadDefaultValues();
        // }

        // return $this->render('create', [
        //     'model' => $model,
        // ]);

        $model = new DataPengguna();

        if ($model->load(Yii::$app->request->post()) ) {

            $model->password = Yii::$app->security->generatePasswordHash($model->password);

            $model->save();
            return $this->redirect(['view', 'id' => $model->ID_PENGGUNA]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing DataPengguna model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $ID_PENGGUNA Id  Pengguna
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);


        if ($model->load(Yii::$app->request->post()) ) {

            $model->password = Yii::$app->security->generatePasswordHash($model->password);

            $model->save();
            return $this->redirect(['view', 'id' => $model->ID_PENGGUNA]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing DataPengguna model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $ID_PENGGUNA Id  Pengguna
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DataPengguna model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $ID_PENGGUNA Id  Pengguna
     * @return DataPengguna the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID_PENGGUNA)
    {
        if (($model = DataPengguna::findOne($ID_PENGGUNA)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
