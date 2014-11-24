<?php

namespace app\controllers;

use Yii;
use app\models\AnketColum;
use app\models\AnketColumSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AnketColumController implements the CRUD actions for AnketColum model.
 */
class AnketColumController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all AnketColum models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AnketColumSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AnketColum model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AnketColum model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($anket_id,$colum)
    {
        
        $model = new AnketColum();
        $model->anket_id = $anket_id;
        $model->colum_id = $colum;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            
            $model->refresh();
            Yii::$app->response->format = 'json';
            return $this->redirect(['/administrator']);
            /*return [
                'message' => 'Success!!!',
            ];*/
        }
 
        return $this->renderAjax('create', [
                'model' => $model,
            ]);
        
    }

    /**
     * Updates an existing AnketColum model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($anket_id,$colum)
    {
        if($colum === 0){
            $model = AnketColum::find()->where(['anket_id' => $anket_id])->one();
        }else{
            $model = AnketColum::find()->where(['anket_id' => $anket_id, 'colum_id' => $colum])->one();
        }
        if(!$model){
            $model = $this->findModel($anket_id,$colum);
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->refresh();
            Yii::$app->response->format = 'json';
            return $this->redirect(['/administrator']);
        } else {
            return $this->renderAjax('update', [
                'model' => $model,
            ]);
            
        }
    }

    /**
     * Deletes an existing AnketColum model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AnketColum model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AnketColum the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AnketColum::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
