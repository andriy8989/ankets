<?php

namespace app\controllers;

use app\models\AnketOperator;
use Yii;
use app\models\UAnkets;
use app\models\UAnketsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\AnketTypeFields;
/**
 * UAnketsController implements the CRUD actions for UAnkets model.
 */
class AdministratorController extends Controller
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
     * Lists all UAnkets models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UAnketsSearch();
        //$dataProvider = $searchModel->search(Yii::$app->request->queryParams)->with('anket_type');
        
        $paket_id = 2;
        $operators = UAnkets::find()->with('anketType')->with('anketColums')->with('anketOperators')
               ->where(['paket_id' => $paket_id])->all();
        
        $dataProvider = new ActiveDataProvider([
            'query' => UAnkets::find()->with('anketType')->with('anketColums')->with('anketOperators')
                ->where(['paket_id' => $paket_id])
        ]);


        //$operatorCols = new AnketOperator::find()->with();

        return $this->render('index', [
            'operators' => $operators,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    
    /**
     * Updates an existing UAnkets model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id,$anket_type)
    {
        $rob_type = 4;
        
        $model = $this->findModel($id);
        
        $dataProvider = AnketTypeFields::find()->where(['anket_type_id' => $anket_type, 'rob_visible' => $rob_type])->all();
       
        
        
        if(Yii::$app->request->get('field_name') ){
            $field_name = Yii::$app->request->get('field_name');
            $field_value = Yii::$app->request->get('field_value');
            foreach($field_name as $key => $value){
                $anketsData = \app\models\UAnketsData::find()
                        ->where(['anket_id' => $id, 'field' => $value])
                        ->one();
                
                if(!$anketsData){
                    $anketsData = new \app\models\UAnketsData();
                }
                $anketsData->anket_id = $id;
                $anketsData->field = $value;
                $anketsData->value = $field_value[$key];
                $anketsData->fill_rob = $rob_type;
                $anketsData->save();  
            } 
            
            $uAnkets = \app\models\UAnkets::find()
                        ->where(['id' => $id])
                        ->one();
            if($uAnkets){
                $uAnkets->status = $rob_type;
                $uAnkets->save();
            }
        }
        
        $uanketsData = \app\models\UAnketsData::find()
                ->where(['anket_id' => $id,'fill_rob' => $rob_type])
                        ->all();
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
             
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            
            return $this->render('update', [
                'model' => $model,
                'anket_type' => $anket_type,
                'dataProvider' => $dataProvider,
                'uanketsData' => $uanketsData,
            ]);
        }
        
        
    }

    

    /**
     * Finds the UAnkets model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return UAnkets the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UAnkets::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    
    
    
    
}
