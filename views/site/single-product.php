<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use app\models\Product;
use app\models\Category;

//d($prod);

$this->title = $title;
$this->params['breadcrumbs'][] = $this->title;
?>
<?php

/* @var $this yii\web\View */

$this->title = $prod->name;

$this->params['breadcrumbs'];
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 categories hidden-sm hidden-xs">
            <ul>
                <h3>Категории</h3>
                <?php foreach ($category as $cat) { ?>
                <!--                    <li><a href="#">--><?//= $cat->name ?><!--</a></li>-->

                <div class="btn-group dropdown">
                    <a  href="<?= Url::to(['site/catalog','id'=>$cat->id ])?>" class="btn" data-label-placement><?=$cat->name ?></a>

                    <a data-toggle="dropdown" data-hover="dropdown" class="btn dropdown-toggle"><span class="fa fa-angle-right" style="position: absolute;right: 10px;font-size: 15px"></span></a>

                    <ul class="dropdown-menu pull-middle pull-right pull-middle-true">
                        <?php
                        $categ = Category::find()->where(['parent_id' => $cat['id']])->all();
                        foreach($categ as $c){
                                //$count = Product::find()->where(['category_id' => $c->id])->count();
                            ?>
                            <li><a href="<?= Url::to(['site/catalog','id'=>$c['id'] ])?>"><?=$c['name'];?></a></li>
                            <?php }?>
                        </ul>
                    </div>

                    <?php } ?>
                </ul>

            </div>
            <div class="col-md-9 description" >

             <div class="col-md-6">


                 <div class="flexslider">
                     <ul class="slides">
                         <li data-thumb="<?=Url::to(['web/'.$prod->photo])?>">
                             <img src="<?=Url::to(['web/'.$prod->photo])?>" />

                         </li>
                         <li data-thumb="<?=Url::to(['web/'.$prod->photo])?>">
                             <img src="<?=Url::to(['web/'.$prod->photo])?>" />

                         </li>
                         <li data-thumb="<?=Url::to(['web/'.$prod->photo])?>">
                             <img src="<?=Url::to(['web/'.$prod->photo])?>" />

                         </li>
                         <li data-thumb="<?=Url::to(['web/'.$prod->photo])?>">
                             <img src="<?=Url::to(['web/'.$prod->photo])?>" />

                         </li>
                     </ul>
                 </div>

             </div>
             <div class="col-md-6 single-right">
                <h3><?=$prod->name?></h3>

                <?php if ($prod->price_promo != 0){?>
                <span class="textimg text-danger"><span style="text-decoration: line-through; "><?=$prod->price?> грн</span><span class="text-success"> <?=$prod->price_promo?> грн</span></span>
                <?php  } else {?>
                <span class="textimg text-success"><?=$prod->price?> грн</span>
                <?php  }?>

                <div  style="margin-top: 30px;margin-bottom: 60px">
                    <a class="add-to-cart btn btn-danger" data-id="<?= $prod->id ?>" href="#">Добавить в корзину</a>
                </div>


                <!--                <div class="rating1">-->
                <!--          <span class="starRating">-->
                <!--            <input id="rating5" type="radio" name="rating" value="5">-->
                <!--            <label for="rating5">5</label>-->
                <!--            <input id="rating4" type="radio" name="rating" value="4">-->
                <!--            <label for="rating4">4</label>-->
                <!--            <input id="rating3" type="radio" name="rating" value="3" checked>-->
                <!--            <label for="rating3">3</label>-->
                <!--            <input id="rating2" type="radio" name="rating" value="2">-->
                <!--            <label for="rating2">2</label>-->
                <!--            <input id="rating1" type="radio" name="rating" value="1">-->
                <!--            <label for="rating1">1</label>-->
                <!--          </span>-->
                <!--                </div>-->
                <!--                <div class="description">-->
                <!--                    <h5><i>Описание</i></h5>-->
                <!--                    <p>--><?//=$prod->description ?><!--</p>-->
                <!--                </div>-->
                <div class="color-quality">
                    <!--                    <div class="color-quality-left">-->
                    <!--                        <h5>Color : </h5>-->
                    <!--                        <ul>-->
                    <!--                            <li><a href="#"><span></span></a></li>-->
                    <!--                            <li><a href="#" class="brown"><span></span></a></li>-->
                    <!--                            <li><a href="#" class="purple"><span></span></a></li>-->
                    <!--                            <li><a href="#" class="gray"><span></span></a></li>-->
                    <!--                        </ul>-->
                    <!--                    </div>-->
                    <!--                    <div class="color-quality-right">-->
                    <!--                        <h5>Quality :</h5>-->
                    <!--                        <div class="quantity">-->
                    <!--                            <div class="quantity-select">-->
                    <!--                                <div class="entry value-minus1">&nbsp;</div>-->
                    <!--                                <div class="entry value1"><span>1</span></div>-->
                    <!--                                <div class="entry value-plus1 active">&nbsp;</div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--quantity-->
                    <!--                        <script>-->
                    <!--                            $('.value-plus1').on('click', function(){-->
                    <!--                                var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;-->
                    <!--                                divUpd.text(newVal);-->
                    <!--                            });-->
                    <!---->
                    <!--                            $('.value-minus1').on('click', function(){-->
                    <!--                                var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;-->
                    <!--                                if(newVal>=1) divUpd.text(newVal);-->
                    <!--                            });-->
                    <!--                        </script>-->
                    <!--quantity-->

                    <!--                    </div>-->
                    <div class="clearfix"> </div>
                </div>
                <!--                <div class="occasional">-->
                <!--                    <h5>RAM :</h5>-->
                <!--                    <div class="colr ert">-->
                <!--                        <div class="check">-->
                <!--                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>3 GB</label>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="colr">-->
                <!--                        <div class="check">-->
                <!--                            <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>2 GB</label>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="colr">-->
                <!--                        <div class="check">-->
                <!--                            <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>1 GB</label>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    <div class="clearfix"> </div>-->
                <!--                </div>-->
                <!--                <div class="simpleCart_shelfItem">-->
                <!--                    <p><span>$460</span> <i class="item_price">$450</i></p>-->
                <!--                    <form action="#" method="post">-->
                <!--                        <input type="hidden" name="cmd" value="_cart">-->
                <!--                        <input type="hidden" name="add" value="1">-->
                <!--                        <input type="hidden" name="w3ls_item" value="Smart Phone">-->
                <!--                        <input type="hidden" name="amount" value="450.00">-->
                <!--                        <button type="submit" class="w3ls-cart">Add to cart</button>-->
                <!--                    </form>-->
                <!--                </div>-->
            </div>

            <div class="clearfix"> </div>

            <div>

                <!-- Nav tabs -->
                <div class="product-tabs" >
                    <ul class="nav nav-tabs " role="tablist" >
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Описание</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Характеристики</a></li>
                        <!--                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>-->
                        <!--                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>-->
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content" >
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <?=$prod->description ?>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <table class="table">
                                <?php foreach ($incat as $in){ ?>
                                <tr>
                                    <td><?=$in->name?></td>
                                    <td><?=$in->catOption->value?></td>
                                </tr>
                                <?php }?>
                            </table>

                        </div>
                        <!--                    <div role="tabpanel" class="tab-pane" id="messages">...</div>-->
                        <!--                    <div role="tabpanel" class="tab-pane" id="settings">...</div>-->
                    </div>
                </div>

              <!--   <div class="content_top">
                    <div class="heading">
                        <h3>Related Products</h3>
                    </div>

                    <div class="see pull-right">
                        <p><a href="#">See all Products</a></p>
                    </div>
                </div>
                <div class="row products">
                    <div class="col-sm-6 col-md-3">
                        <div class="product">

                            <a href="preview.html"><img src="images/feature-pic1.jpg" alt=""></a>
                            <h2>Lorem Ipsum is simply </h2>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$620.87</span></p>
                                </div>
                                <div class="add-cart">
                                    <span class="pull-right"><a href="preview.html">Add to Cart</a></span>
                                </div>
                                <div class="clearfix"></div>
                            </div>


                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="product">

                            <a href="preview.html"><img src="images/feature-pic1.jpg" alt=""></a>
                            <h2>Lorem Ipsum is simply </h2>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$620.87</span></p>
                                </div>
                                <div class="add-cart">
                                    <span class="pull-right"><a href="preview.html">Add to Cart</a></span>
                                </div>
                                <div class="clearfix"></div>
                            </div>


                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="product">

                            <a href="preview.html"><img src="images/feature-pic1.jpg" alt=""></a>
                            <h2>Lorem Ipsum is simply </h2>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$620.87</span></p>
                                </div>
                                <div class="add-cart">
                                    <span class="pull-right"><a href="preview.html">Add to Cart</a></span>
                                </div>
                                <div class="clearfix"></div>
                            </div>


                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="product">

                            <a href="preview.html"><img src="images/feature-pic1.jpg" alt=""></a>
                            <h2>Lorem Ipsum is simply </h2>
                            <div class="price-details">
                                <div class="price-number">
                                    <p><span class="rupees">$620.87</span></p>
                                </div>
                                <div class="add-cart">
                                    <span class="pull-right"><a href="preview.html">Add to Cart</a></span>
                                </div>
                                <div class="clearfix"></div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div> -->




    </div>





</div>

</div>
</div>
