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
               <span class="glyphicon glyphicon-earphone" style="margin-right: 3px;font-size: 16px"></span>+38 067 555 10 50

            </div>

            <div class="pull-right">
                Register Login Delivery Checkout My Account
            </div>
        </div>
        <div class="container-fluid padding-lrg header-top">
            <div class="pull-left" style="min-height: 75px">
                Need help? call us 1-22-3456789

            </div>

            <div class="pull-right">
                Register Login Delivery Checkout My Account
            </div>
        </div>
    </div>
    
        <?
        
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
    <div class="wrap container-fluid" style="color:#325252;padding-top: 20px">
<!--        <div class="section group">-->
<!--            <div class="col_1_of_4 span_1_of_4">-->
<!--                <h4>Information</h4>-->
<!--                <ul>-->
<!--                    <li><a href="about.html">About Us</a></li>-->
<!--                    <li><a href="contact.html">Customer Service</a></li>-->
<!--                    <li><a href="#">Advanced Search</a></li>-->
<!--                    <li><a href="delivery.html">Orders and Returns</a></li>-->
<!--                    <li><a href="contact.html">Contact Us</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="col_1_of_4 span_1_of_4">-->
<!--                <h4>Why buy from us</h4>-->
<!--                <ul>-->
<!--                    <li><a href="about.html">About Us</a></li>-->
<!--                    <li><a href="contact.html">Customer Service</a></li>-->
<!--                    <li><a href="#">Privacy Policy</a></li>-->
<!--                    <li><a href="contact.html">Site Map</a></li>-->
<!--                    <li><a href="#">Search Terms</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="col_1_of_4 span_1_of_4">-->
<!--                <h4>My account</h4>-->
<!--                <ul>-->
<!--                    <li><a href="contact.html">Sign In</a></li>-->
<!--                    <li><a href="index.html">View Cart</a></li>-->
<!--                    <li><a href="#">My Wishlist</a></li>-->
<!--                    <li><a href="#">Track My Order</a></li>-->
<!--                    <li><a href="contact.html">Help</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="col_1_of_4 span_1_of_4">-->
<!--                <h4>Contact</h4>-->
<!--                <ul>-->
<!--                    <li><span>+91-123-456789</span></li>-->
<!--                    <li><span>+00-123-000000</span></li>-->
<!--                </ul>-->
<!---->
<!--            </div>-->
<!--        </div>-->

        <div class="col-md-5">
<h4>Company name</h4>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at commodi ea eum fugit inventore ipsum numquam repellendus soluta vel. </p>
        </div>
        <div class="col-md-3 col-md-offset-1">
<h4>Контакты</h4>
            <span>email@email.com.ua</span><br>
            <span>+380934445556</span><br>
        </div>
        <div class="col-md-3">
           <h4>Социальные сети</h4>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-facebook"></i>
            <i class="fa fa-youtube"></i>
            <i class="fa fa-skype"></i>

        </div>

    </div>
    <div class="copy_right">
        <p>Company Name © Все права защищены | Разработчики сайта:<a href="http://www.uniq-st.com" target="_blank"> uniq-st.com</a></p>
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
