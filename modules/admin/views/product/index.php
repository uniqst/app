<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список товаров';
?>
<div class="product-index">


    <p>
        <?= Html::a('Создать товар', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
           'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
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
                'value'     => function($data){
                    return $data->category->name;
                },
            ],
            'name',
            // 'description',
            'price',
            // 'price_promo',
            // 'photo',
           
            // 'brand',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
