<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Order;
use app\modules\admin\models\OrderItem;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrderController implements the CRUD actions for Order model.
 */
class OrderController extends AdminController
{
    /**
     * @inheritdoc
     */


    /**
     * Lists all Order models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Order::find(),
            'pagination'=>[
            'pageSize' => 15,
            ],
            'sort' => [
            'defaultOrder' => [
                'status' => SORT_ASC,
              ],
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Order model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Order model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Order();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Order model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate()
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionStatistica()
    {       
            $ot = Yii::$app->request->get('ot');
            $do = Yii::$app->request->get('do');
            if(!empty($ot) && !empty($do)){
                $otd = Order::find()->where('update_at <= :ot',[':ot' => $ot])->andWhere('update_at <= :do',[':do' => $do])->sum('qty');
                $otd1 = "<h2>Подано c ".$ot." по ".$do." : ". $otd." товаров<h2>";
            }
            elseif (!empty($ot)){
                $ot1 = Order::find()->where('update_at > :ot',[':ot' => $ot])->sum('qty');
                $ot1 = "<h2>Подано с ".$ot." : ". $ot1." товаров<h2>";
                }
            elseif (!empty($do)){
                $do1 = Order::find()->where('update_at < :do',[':do' => $do])->sum('qty');
                $do1 = "<h2>Подано до ".$do." : ". $do1." товаров<h2>";
            }
            $day = date("Y-m-d");
            $all = Order::find()->where(['status' => '1'])->sum('qty');
            $today = Order::find()->where(['update_at' => $day])->sum('qty');
            return $this->render('statistica', compact('all', 'today', 'today', 'day', 'ot', 'do','ot1', 'do1', 'otd1'));
    }


    /**
     * Deletes an existing Order model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Order model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Order the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Order::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
