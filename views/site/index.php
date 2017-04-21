<?php

use yii\widgets\LinkPager;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
use app\models\Category;
use app\models\Product;
use app\components\CategoryWidget;
use yii\helpers\Html;

$this->title = 'Итернет-магазин тезники';

//d($category);

?>

<div class="container-fluid">




    <div>
        <div class="slider">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/1397570876_akcia.jpg" class=" img img-responsive" alt="Chania">
                    </div>

                    <div class="item ">
                        <img src="images/1397570876_akcia.jpg" class=" img img-responsive" alt="Chania">
                    </div>

                    <div class="item ">
                        <img src="images/1397570876_akcia.jpg" class=" img img-responsive" alt="Chania">
                    </div>

                    <div class="item ">
                        <img src="images/1397570876_akcia.jpg" class=" img img-responsive" alt="Chania">
                    </div>
                </div>




            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 categories">
            <ul>
                <h3>Категории</h3>
                <?php foreach ($category as $cat) { ?>
<!--                    <li><a href="#">--><?//= $cat->name ?><!--</a></li>-->

                    <div class="btn-group dropdown">
                        <a  href="<?= Url::to(['site/category','id'=>$cat->id ])?>" class="btn" data-label-placement><?=$cat->name ?></a>

                        <a data-toggle="dropdown" data-hover="dropdown" class="btn dropdown-toggle"><span class="fa fa-angle-right" style="position: absolute;right: 10px;font-size: 15px"></span></a>

                        <ul class="dropdown-menu pull-middle pull-right pull-middle-true">
                            <?php
                            $categ = Category::find()->where(['parent_id' => $cat['id']])->all();
                            foreach($categ as $c){
                                //$count = Product::find()->where(['category_id' => $c->id])->count();
                                ?>
                                <li><a href="<?= Url::to(['site/category','id'=>$c['id'] ])?>"><?=$c['name'];?></a></li>
                            <?php }?>
                        </ul>
                    </div>

                <?php } ?>
            </ul>



        </div>

        <div class="col-md-9 prod-window">
            <div class="content_top" style="border-color: #999999">
                <div class="heading">
                    <h3>Новые товары</h3>
                </div>

                <div class="see pull-right">
                    <p><a href="#">Все товары</a></p>
                </div>
            </div>

            <div class="row products">
                <?php foreach ($product as $prod) {
                    include "_product";
                } ?>
            </div>

            <div class="content_top" style="border-color: #999999">
                <div class="heading">
                    <h3>
                        Основные товары
                    </h3>
                </div>

                <div class="see pull-right">
                    <p><a href="#">Смотреть все</a></p>
                </div>
            </div>

            <div class="row products">
                <?php foreach ($product as $prod) {
                    include "_product";
                } ?>
            </div>

       
        </div>


    </div>


</div>

