<?php

/* @var $this yii\web\View */
use app\components\CategoryWidget;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\Qwe;
use app\modules\admin\models\InCategory;
use app\modules\admin\models\CatOption;


$this->title = $title->name;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 categories">

        
        <h2><?=$this->title?></h2>
          <?php
       foreach ($cat as $q){
       	echo "<br>".$q->name."<br>";
       	     $cat1 = CatOption::find()->where(['incat_id' => $q->id])->groupBy('value')->all();
              foreach($cat1 as $c){?>
           <input type="checkbox" id="check1"><label for="check1"><?=$c->value?></label><br>
       <?php }
   }
    ?>
		</div>

        <div class="col-md-9 prod-window">
         <div class="row products">
                <?php foreach ($product as $prod) {
                    include "_product";
                } ?>
            </div>
            </div>
			</div>
</div>