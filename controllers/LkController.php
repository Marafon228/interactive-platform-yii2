<?php

namespace app\controllers;

use yii\web\UploadedFile;
use app\models\Users;
use app\models\Category;
use app\models\Problem;
use app\models\ProblemCreateForm;
use app\models\RegForm;
use app\models\UsersSearch;
use app\models\ProblemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;
use yii\helpers\ArrayHelper;
/**
 * UsersController implements the CRUD actions for Users model.
 */
class LkController extends Controller
{

    public function beforeAction($action)
    {
        // your custom code here, if you want the code to run before action filters,
        // which are triggered on the [[EVENT_BEFORE_ACTION]] event, e.g. PageCache or AccessControl

        if (Yii::$app->users->isGuest){
            $this->redirect(['/site/login']);
            return false;

        }
        if (!parent::beforeAction($action)) {
            return false;
        }

        // other custom code here

        return true; // or false to not run the action
    }

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
            ]
        );
    }

    /**
     * Lists all Users models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProblemSearch();
        $dataProvider = $searchModel->searchForUser($this->request->queryParams, Yii::$app->users->identity->id);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Users model.
     * @param integer $id
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
     * Deletes an existing Users model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if($this->findModel($id)->status == 'Новая'){
            $this->findModel($id)->delete();
            Yii::$app->session->setFlash('success', 'Заявка успешно удалена');
        } else {
            Yii::$app->session->setFlash('danger', 'Заявка не может быть удалена так как её статус был изменён администратором');
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Users model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Users the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Problem::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    public function actionCreate()
    {
        $model = new ProblemCreateForm();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) ) {
                $model->photoBefore = UploadedFile::getInstance($model, 'photoBefore');
                $newFileName =  md5($model->photoBefore->baseName . '.' . $model->photoBefore->extension. time()). '.' . $model->photoBefore->extension;
                $model->photoBefore->saveAs('uploads/' . $newFileName);
                $model->photoBefore = $newFileName;
                $model->idUsers = Yii::$app->users->identity->id;
                $model->save();
                return $this->redirect(['/lk']);
            }
        } else {
            $model->loadDefaultValues();
        }

        $categories = Category::find()->all();
        $categories = ArrayHelper::map($categories, 'id', 'name');
        return $this->render('create', [
            'model' => $model,
            'categories' => $categories,
        ]);
    }
}




