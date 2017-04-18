<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Modal;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Category;
use app\models\Product;
use app\models\Pages;
use app\components\CategoryWidget;
use app\components\MenuWidget;


AppAsset::register($this);

$q = Yii::$app->request->get('q');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <link
        href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700|Roboto+Condensed:300,400,700&amp;subset=cyrillic"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="header">
        <div class="container-fluid padding-lrg header-desc">
            <div class="pull-left">
                Need help? call us 1-22-3456789

            </div>

            <div class="pull-right">
                Register Login Delivery Checkout My Account
            </div>
        </div>
        <div class="container-fluid padding-lrg header-top">
            <div class="pull-left" style="min-height: 75px">
                Need help? call us 1-22-3456789

<<<<<<< HEAD
            </div>

            <div class="pull-right">
                Register Login Delivery Checkout My Account
            </div>
        </div>
    </div>
    
=======
    <?php
    $category =$this->params['key'] ;
    ?>
    <div class="container">
<!-- 
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]); 
         ?>
 -->
  <ul class="nav nav-pills hidden-xs">
      <?php $category = Category::find()->where(['parent_id' => 0])->all();?>
        <?php foreach($category as $cat){?>
 <li class="dropdown btn-group ">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle btn btn-danger btn-lg">
      <?=$cat['name']?>
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
    <?php
    $categ = Category::find()->where(['parent_id' => $cat['id']])->all();
    foreach($categ as $c){
        $count = Product::find()->where(['category_id' => $c->id])->count();
    ?>
      <li><a href="#"><?=$c['name'];?>(<?=$count?>)</a></li>
    <?php }?>
        </ul>
        <?php }?>
       </ul>
</ul>

        <div class="row content">
        <div class="col-md-2">
         <form>
          <div class="form-group">
           <label>Категории</label>
          <select class="selectpicker form-control">
              <option value="">Все категории</option>
                  <?php foreach($category as $cat){?>
                  <optgroup label="<?=$cat['name']?>" style="font-size: 20px;">
                    <?php
                  $categ = Category::find()->where(['parent_id' => $cat['id']])->all();
                  foreach($categ as $c){ 
                    $count = Product::find()->where(['category_id' => $c->id])->count();?>
                    <option><a href="#"><?=$c['name']?>(<?=$count?>)</a></option>
                  <?php }?>
                  </optgroup>
             <?php }?>
            </select>
          </div>
          <div class="formgroup">
            <label>Вес</label>
            <select name="" class="form-control">
              <option value="0">Все веса</option>
              <option value="">1</option>
              <option value="">2</option>
              <option value="">3</option>
              <option value="">4</option>
              <option value="">5</option>
            </select>
          </div>
          <div class="form-group">   
           <label>Цена</label>
           <div class="clearfix"></div>
           <input type="text" class="form-control" id="from" placeholder="От" style="display: inline; width: 48%">
           <input type="text" class="form-control" placeholder="До" style="display: inline; width: 48%">
          </div>
             <div class="form-group">
             <?php $product = Product::find()->groupBy('brand')->all();?>
           <label>Бренд</label>
              <select class="selectpicker form-control">
              <option value="">Все Бренды</option>
                  <?php foreach($product as $prod){?>
                      <option><?=$prod['brand']?></option>
                  <?php }?>
            </select>
          </div>
          <button type="submit" class="btn btn-success" style="width: 100%">Показать</button>
          </form>
        </div>
        <div class="col-md-10">
        <?= $content;
>>>>>>> origin/master
        
    <?php
    NavBar::begin([
        'options' => [

        ],
        'innerContainerOptions' => ['class' => 'main-nav'],
    ]);
      $pages = Pages::find()->all();
      $menuItems = [['label' => 'Главная' , 'url' => '/']];
        foreach ($pages as $page) {
                    $menuItems[] = ['label' => $page->label , 'url' => Url::to(['site/pages', 'alias' => $page->alias])];
                }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar'],
          'items' => 
            $menuItems,
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            '<form class="navbar-form navbar-left" method="get" action="/site/search">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Search" name="q" value="'.$q.'">
                        </div>
                         <button type="submit" class="btn btn-default">Искать</button>
             </form>'
        ],
    ]);
    NavBar::end();
    ?>

    <div class="content">
        <div class="container-fluid" style="margin-top: 20px;">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </div>
         <?= $content ?>
    </div>
</div>

<div class="footer">
    <div class="wrap container">
        <div class="section group">
            <div class="col_1_of_4 span_1_of_4">
                <h4>Information</h4>
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Customer Service</a></li>
                    <li><a href="#">Advanced Search</a></li>
                    <li><a href="delivery.html">Orders and Returns</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>Why buy from us</h4>
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Customer Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="contact.html">Site Map</a></li>
                    <li><a href="#">Search Terms</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>My account</h4>
                <ul>
                    <li><a href="contact.html">Sign In</a></li>
                    <li><a href="index.html">View Cart</a></li>
                    <li><a href="#">My Wishlist</a></li>
                    <li><a href="#">Track My Order</a></li>
                    <li><a href="contact.html">Help</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>Contact</h4>
                <ul>
                    <li><span>+91-123-456789</span></li>
                    <li><span>+00-123-000000</span></li>
                </ul>
                <div class="social-icons">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="#" target="_blank"><img src="images/facebook.png" alt=""/></a></li>
                        <li><a href="#" target="_blank"><img src="images/twitter.png" alt=""/></a></li>
                        <li><a href="#" target="_blank"><img src="images/skype.png" alt=""/> </a></li>
                        <li><a href="#" target="_blank"> <img src="images/dribbble.png" alt=""/></a></li>
                        <li><a href="#" target="_blank"> <img src="images/linkedin.png" alt=""/></a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copy_right">
        <p>Company Name © All rights Reseverd | Design by <a href="http://w3layouts.com">W3Layouts</a></p>
    </div>
</div>
<?php
     Modal::Begin([
        'header' => '<h2>Корзина</h2>',
        'id' => 'cart',
        'size' => 'modal-lg',
        'footer' => '<button class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
        <a href="'.Url::to(["cart/view"]).'" class="btn btn-success">Оформить заказ</a>
        <button class="btn btn-danger" onclick="clearCart()" >Очистить корзину</button>'
        ]);
     Modal::End();
?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
