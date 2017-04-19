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

?>

<div class="container-fluid">


<!--    <div class="categories">-->
<!--        --><?//=  CategoryWidget::widget()?>
<!--    </div>-->



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
                        <img src="images/slide-1-image.png" class=" img img-responsive" alt="Chania">
                    </div>

                    <div class="item ">
                        <img src="images/new-pic4.jpg" class=" img img-responsive" alt="Chania">
                    </div>

                    <div class="item ">
                        <img src="images/new-pic4.jpg" class=" img img-responsive" alt="Chania">
                    </div>

                    <div class="item ">
                        <img src="images/new-pic4.jpg" class=" img img-responsive" alt="Chania">
                    </div>
                </div>




            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 categories">
            <ul>
                <h3>Категории</h3>
                <?php foreach ($category as $cat) { ?>
<!--                    <li><a href="#">--><?//= $cat->name ?><!--</a></li>-->

                    <div class="btn-group">
                        <a href="#" class="btn" data-label-placement><?=$cat->name ?></a>

                        <a data-toggle="dropdown" class="btn dropdown-toggle"><span class="fa fa-angle-right" style="position: absolute;right: 10px;font-size: 15px"></span></a>

                        <ul class="dropdown-menu bullet pull-middle pull-right pull-middle-true">
                            <?php
                            $categ = Category::find()->where(['parent_id' => $cat['id']])->all();
                            foreach($categ as $c){
                                //$count = Product::find()->where(['category_id' => $c->id])->count();
                                ?>
                                <li><a href="#"><?=$c['name'];?></a></li>
                            <?php }?>
                        </ul>
                    </div>

                <?php } ?>
            </ul>

<!--            <ul class="nav nav-pills hidden-xs">-->
<!--                --><?php //$category = Category::find()->where(['parent_id' => 0])->all();?>
<!--                --><?php //foreach($category as $cat){?>
<!--                <li class="dropdown btn-group ">-->
<!--                    <a href="#" data-toggle="dropdown" class="dropdown-toggle btn btn-danger btn-lg">-->
<!--                        --><?//=$cat['name']?>
<!--                        <b class="caret"></b>-->
<!--                    </a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        --><?php
//                        $categ = Category::find()->where(['parent_id' => $cat['id']])->all();
//                        foreach($categ as $c){
//                            $count = Product::find()->where(['category_id' => $c->id])->count();
//                            ?>
<!--                            <li><a href="#">--><?//=$c['name'];?><!--(--><?//=$count?><!--)</a></li>-->
<!--                        --><?php //}?>
<!--                    </ul>-->
<!--                    --><?php //}?>
<!--            </ul>-->






<!--            <div class="btn-group">-->
<!--                <a data-toggle="dropdown" class="btn btn-info dropdown-toggle">Middle Right <span class="caret"></span></a>-->
<!--                <ul class="dropdown-menu bullet pull-middle pull-right pull-middle-true">-->
<!--                    <li><a href="#">Action</a></li>-->
<!--                    <li><a href="#">Another action</a></li>-->
<!--                    <li><a href="#">Something else here</a></li>-->
<!---->
<!--                    <li><a href="#">Separated link</a></li>-->
<!--                    <li><a href="#">Separated link</a></li>-->
<!--                    <li><a href="#">Separated link</a></li>-->
<!--                    <li><a href="#">Separated link</a></li>-->
<!--                </ul>-->
<!--            </div>-->



        </div>

        <div class="col-md-10 ">
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

            <div class="row products">
                <?php foreach ($product as $prod) {
                    include "_product";
                } ?>
            </div>
        </div>


    </div>


</div>

