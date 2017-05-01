<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = $model->name;

?>
<div class="product-view">


    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
        <?php $arr = [['attribute' => 'brand'], ['attribute' => 'width']];

        print_r($arr);?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',

              [
                'attribute' => 'photo',
                 'value'     => function($data){
                    return '<img src="/web/' . $data->photo . '" style="width: 150px;" />';
                },
                'format' => 'html',
            ],
            // 'category_id',
            [
                'attribute' => 'category_id',
                'value'     => 
                    $model->category->name,
                ],
            'name',
            'description:html',
            'price',
            'price_promo',

        ],
    ]) ?>
        <?= GridView::widget([
        'dataProvider' => new ActiveDataProvider(['query' => $model->getCatOption()]),
           'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            // [
            //     'attribute' => 'inCategory.name',
            //     'value' =>
            // ],
            'value',

        ],
    ]); ?>

</div>
