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
        <!--        <div class="slider">-->
        <!--            <div id="myCarousel" class="carousel slide" data-ride="carousel">-->

        <!--                <ol class="carousel-indicators">-->
        <!--                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
        <!--                    <li data-target="#myCarousel" data-slide-to="1"></li>-->
        <!--                    <li data-target="#myCarousel" data-slide-to="2"></li>-->
        <!--                    <li data-target="#myCarousel" data-slide-to="3"></li>-->
        <!--                </ol>-->
        <!---->

        <!--                <div class="carousel-inner" role="listbox">-->
        <!--                    <div class="item active">-->
        <!--                        <img src="images/1397570876_akcia.jpg" class=" img img-responsive" alt="Chania">-->
        <!--                    </div>-->
        <!---->
        <!--                    <div class="item ">-->
        <!--                        <img src="images/1397570876_akcia.jpg" class=" img img-responsive" alt="Chania">-->
        <!--                    </div>-->
        <!---->
        <!--                    <div class="item ">-->
        <!--                        <img src="images/1397570876_akcia.jpg" class=" img img-responsive" alt="Chania">-->
        <!--                    </div>-->
        <!---->
        <!--                    <div class="item ">-->
        <!--                        <img src="images/1397570876_akcia.jpg" class=" img img-responsive" alt="Chania">-->
        <!--                    </div>-->
        <!--                </div>-->
        <!---->
        <!---->
        <!---->
        <!---->
        <!--            </div>-->
        <!--        </div>-->

        <div id="slider" class="carousel slide main-carousel" data-ride="carousel">
            <!-- Indicators Starts -->
            <ol class="carousel-indicators" >
                <li data-target="#slider" data-slide-to="0" class="active" style="z-index: 30"></li>
                <li data-target="#slider" data-slide-to="1" style="z-index: 30"></li>
                <li data-target="#slider" data-slide-to="2" style="z-index: 30"></li>
            </ol>
            <!-- Indicators Ends -->
            <!-- Wrapper for Slides Starts -->
            <div class="carousel-inner text-lite-color" role="listbox">
                <!-- Slide #1 Starts -->
                <div class="item sl1 active">

                    <div class="carousel-caption slide1 animated fadeIn">

                        <p class='animated fadeInDown first'><span > 24/7</span> НАШІ СПЕЦІАЛІСТИ</p>
                        <p class="animated zoomIn second">Акция Акция Акция</p>
                        <span ><img class="animated fadeInUp fourth" src="images/pulse-long-white.png"  style="width: auto;height: 20px;margin: 8px 0"></span>
                        <p class='animated fadeInDown third'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur consequuntur cum dignissimos dolorem ea earum.</p>
                    </div>
                </div>

                <div class="item sl2">

                    <div class="carousel-caption slide2 animated fadeInRight">

                        <p class='animated fadeInDown first'> <span>Акция Акция</span></p>
                        <p class="animated zoomIn second">От 19999 грн</p>
                        <span ><img class="animated fadeInUp fourth" src="images/pulse-long-black.png"  style="width: auto;height: 20px;margin: 3px 0 8px"></span>
                        <p class='animated fadeInDown third'>До Ваших послуг: <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></p>
                    </div>
                </div>

                <div class="item sl3">

                    <div class="carousel-caption slide3 animated fadeIn">

                        <p class='animated fadeInDown first'><span >90%</span> скидка</p>
                        <p class="animated zoomIn second">унікальна програма</p>
                        <span ><img class="animated fadeInUp fourth" src="images/pulse-long-white.png"  style="width: auto;height: 20px;margin: 8px 0"></span>
                        <!--                        <p class='animated fadeInDown third'>Застосовуємо унікальну та <b>єдиноефективну,</b> визнану в усьому світі комплекс­ну програму позбавлення від <b>алкогольної</b> залежності</p>-->
                        <p class='animated fadeInDown third'>До Ваших послуг: <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></p>
                    </div>
                </div>
                <!-- Slide #1 Ends -->
                <!--&lt;!&ndash; Slide #2 Starts &ndash;&gt;-->
                <!--<div class="item">-->
                <!--<img src="images/slider/slider-img2.jpg" alt="Image" class="img-responsive">-->
                <!--<div class="carousel-caption slide1 animated fadeIn">-->

                <!--<p class='animated fadeInDown first'><span > 24/7</span> НАШІ СПЕЦІАЛІСТИ ПРАЦЮЮТЬ ЦІЛОДОБОВО</p>-->
                <!--<p class="animated zoomIn second">НЕВІДКЛАДНА ДОПОМОГА</p>-->
                <!--<span ><img class="animated fadeInUp fourth" src="images/pulse-long-white.png"  style="width: auto;height: 20px;margin: 8px 0"></span>-->
                <!--<p class='animated fadeInDown third'>Ми зібрали для Вас найкращих фахівців, які готові допомогти у будь-який момент</p>-->
                <!--</div>-->
                <!--</div>-->

                <!--<div class="item">-->
                <!--<img src="images/slider/slider-img3.jpg" alt="Image" class="img-responsive">-->
                <!--<div class="carousel-caption slide1 animated fadeIn">-->

                <!--<p class='animated fadeInDown first'><span > 24/7</span> НАШІ СПЕЦІАЛІСТИ ПРАЦЮЮТЬ ЦІЛОДОБОВО</p>-->
                <!--<p class="animated zoomIn second">НЕВІДКЛАДНА ДОПОМОГА</p>-->
                <!--<span ><img class="animated fadeInUp fourth" src="images/pulse-long-white.png"  style="width: auto;height: 20px;margin: 8px 0"></span>-->
                <!--<p class='animated fadeInDown third'>Ми зібрали для Вас найкращих фахівців, які готові допомогти у будь-який момент</p>-->
                <!--</div>-->
                <!--</div>-->
                <!--&lt;!&ndash; Slide #3 Ends &ndash;&gt;-->
            </div>
            <!-- Wrapper for Slides Ends -->
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
                    include "_product.php";
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
                    include "_product.php";
                } ?>
            </div>
<!---->
<!--<<<<<<< HEAD-->
<!---->
<!--=======-->
<!--            <div class="row products">-->
<!--                --><?php //foreach ($product as $prod) {
//                    include "_product";
//                } ?>
<!--            </div>-->
<!-- >>>>>> parent of ec4c06c... 1312-->
        </div>


    </div>


</div>

