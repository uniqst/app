<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\InCategory */

$this->title = 'Create In Category';
$this->params['breadcrumbs'][] = ['label' => 'In Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="in-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
