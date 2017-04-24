<?php

/* @var $this yii\web\View */
use app\components\CategoryWidget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use app\models\Qwe;
use app\modules\admin\models\InCategory;
use app\modules\admin\models\CatOption;
use app\modules\admin\models\Product;
use app\modules\admin\models\Category;
use yii\db\ActiveQuery;

$this->title = $categ->name;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row" style="margin-top: -20px;">
        <div class="col-md-3 categories" >

            
            <h3 style="margin-top: 25px;"><?= $this->title ?></h3>
            <?php 
            if($categ->parent_id == 0):?>
                <?php foreach($cat as $c):?>
                  <div class="btn-group dropdown">
                        <a  href="<?= Url::to(['site/category','id'=>$c->id ])?>" class="btn" data-label-placement><?=$c->name ?></a>
                        <a data-toggle="dropdown" data-hover="dropdown" class="btn dropdown-toggle"><span class="fa fa-angle-right" style="position: absolute;right: 10px;font-size: 15px"></span></a>
                    </div>
                <?php endforeach;?>
            <?php else:?>
            <form method="get" action="">
                <input type="hidden" name="id" value="<?= Yii::$app->request->get('id') ?>" class="btn btn-success">
                
                <ul class="list-group">
                    <?php foreach ($categ->inCategory as $c): ?>
                        <h4 class='list-group-item-heading'><?= $c->name ?></h4>
                         <?php foreach($c->allOption as $option ): ?>
                      
                            <?php if (!empty($value))
                                if (in_array($option->value, array_keys($value)))
                                    $checked = "checked";
                                else
                                    $checked = "";
                            ?>    
                        <p class="list-group-item-text"> <input type="checkbox" <?=$checked?> onclick="this.form.submit();"
                                 name="value[<?= $option->value ?>]" id="check<?= $option->value ?>">
                                <label for="check<?= $option->value ?>"><?= $option->value ?></label></p>
                        <?php endforeach; ?>
                   <?php endforeach; ?>
            </ul>
</form>
<?php endif;?>
</div>

<div class="col-md-9 prod-window">
    <div class="row products">
        <?php
            echo $this->render('_product', [
                    'product' => $product,
                    'value' => $value,
                ]); 
        ?>
    </div>
</div>
</div>
</div>