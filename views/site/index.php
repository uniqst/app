<?php
<<<<<<< HEAD

=======
use yii\widgets\LinkPager;
use yii\helpers\Url;
>>>>>>> origin/master
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
use app\models\Category;

use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'Итернет-магазин тезники';

?>

<<<<<<< HEAD
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 categories">
          <?php include "_category";?>
        </div>

        <div class="col-md-9 slider">
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
                        <img src="images/slide-2-image.png" class=" img img-responsive" alt="Chania">
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


    <div class="content_top" style="border-color: #999999">
        <div class="heading">
            <h3>Новые товары</h3>
        </div>

        <div class="see pull-right">
            <p><a href="#">Все товары</a></p>
        </div>
    </div>

    <div class="row products">
      <?php foreach($product as $prod){
            include "_product";
        }?>
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
      <?php foreach($product as $prod){
                  include "_product";

            }?>
    </div>
     

    </div>


    <!--    <div class="content">-->
    <!--        <div class="section group">-->
    <!--            <div class="grid_1_of_4 images_1_of_4">-->
    <!--                <a href="preview.html"><img src="images/feature-pic1.jpg" alt=""></a>-->
    <!--                <h2>Lorem Ipsum is simply </h2>-->
    <!--                <div class="price-details">-->
    <!--                    <div class="price-number">-->
    <!--                        <p><span class="rupees">$620.87</span></p>-->
    <!--                    </div>-->
    <!--                    <div class="add-cart">-->
    <!--                        <h4><a href="preview.html">Add to Cart</a></h4>-->
    <!--                    </div>-->
    <!--                    <div class="clear"></div>-->
    <!--                </div>-->
    <!---->
    <!--            </div>-->
    <!--            <div class="grid_1_of_4 images_1_of_4">-->
    <!--                <a href="preview.html"><img src="images/feature-pic2.jpg" alt=""></a>-->
    <!--                <h2>Lorem Ipsum is simply </h2>-->
    <!--                <div class="price-details">-->
    <!--                    <div class="price-number">-->
    <!--                        <p><span class="rupees">$899.75</span></p>-->
    <!--                    </div>-->
    <!--                    <div class="add-cart">-->
    <!--                        <h4><a href="preview.html">Add to Cart</a></h4>-->
    <!--                    </div>-->
    <!--                    <div class="clear"></div>-->
    <!--                </div>-->
    <!---->
    <!--            </div>-->
    <!--            <div class="grid_1_of_4 images_1_of_4">-->
    <!--                <a href="preview.html"><img src="images/feature-pic3.jpg" alt=""></a>-->
    <!--                <h2>Lorem Ipsum is simply </h2>-->
    <!--                <div class="price-details">-->
    <!--                    <div class="price-number">-->
    <!--                        <p><span class="rupees">$599.00</span></p>-->
    <!--                    </div>-->
    <!--                    <div class="add-cart">-->
    <!--                        <h4><a href="preview.html">Add to Cart</a></h4>-->
    <!--                    </div>-->
    <!--                    <div class="clear"></div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="grid_1_of_4 images_1_of_4">-->
    <!--                <a href="preview.html"><img src="images/feature-pic4.jpg" alt=""></a>-->
    <!--                <h2>Lorem Ipsum is simply </h2>-->
    <!--                <div class="price-details">-->
    <!--                    <div class="price-number">-->
    <!--                        <p><span class="rupees">$679.87</span></p>-->
    <!--                    </div>-->
    <!--                    <div class="add-cart">-->
    <!--                        <h4><a href="preview.html">Add to Cart</a></h4>-->
    <!--                    </div>-->
    <!--                    <div class="clear"></div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!---->
    <!---->
    <!--        </div>-->
    <!--    </div>-->


</div>

=======
        <h2 class="title text-center index-item">Новые товары</h2>
        <div class="row">
       <?php foreach($product as $prod){
         include "_product.php";
        }?>
        </div>
        <div class="clearfix"></div>
        <?=LinkPager::widget(['pagination' => $pagination])?>

             <h2 class="title text-center index-item">Топ продаж</h2>
        <div class="row">
       <?php foreach($top as $prod){
          // echo "<div>".$count[$prod->id]."</div>";

         include "_product.php";
        }?>
        </div>
        <div class="clearfix"></div>
        <?=LinkPager::widget(['pagination' => $pagination])?>
>>>>>>> origin/master
