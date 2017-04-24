<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\modules\admin\models\Category;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'In Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="in-category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create In Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            // 'category_id',
            [
                'attribute' => 'category_id',
                'value'     => function($data){
                    return $data->category->name;
                }
            ],
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
