<?php

use yii\widgets\LinkPager;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
use app\models\Category;

use yii\helpers\Html;
$this->title = 'Итернет-магазин тезники';

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 categories">
          <ul>
                <h3>Категории</h3>
                <?php foreach($category as $cat){?>
                <li><a href="#"><?=$cat->name?></a></li>
                <?php }?>
            </ul>
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
      <?php foreach($top as $prod){
                  include "_product";

            }?>
    </div>
     

    </div>

