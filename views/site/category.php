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


            <h2><?= $this->title ?></h2>
            <form method="get" action="" id="filter">
                <input type="hidden" name="id" value="<?= Yii::$app->request->get('id') ?>" class="btn btn-success">

                <ul class="list-group">
                    <?php
                    foreach ($cat as $q) {
                        echo "<li class='list-group-item' style='font-weight: 900; margin-top: 20px;'>" . $q->name . "</li>";
                        $cat1 = CatOption::find()->where(['incat_id' => $q->id])->groupBy('value')->all();
                        foreach ($cat1 as $c) {
                            ?>
                            <li class="list-group-item"><input type="checkbox"
                                    <?php
                                    if(!empty($value)){
                                        if (in_array($c->id, $value, true)) {
                                            echo "checked";
                                            }
                                            }?>

                                                               name="value[<?= $c->id ?>]" id="check<?=$c->id?>" onclick="this.form.submit();"><label
                                    for="check<?=$c->id?>"><?= $c->value ?></label></li>
                        <?php }
                    }
                    ?>
                 <!--    <input type="submit" class="btn btn-success" style="width: 100%" value="Поиск"> -->
                </ul>
            </form>
        </div>

        <div class="col-md-9 prod-window">
            <div class="row products">
                <?php foreach ($product as $prod) {
                    include "_product.php";
                } ?>
            </div>
        </div>
    </div>
</div>