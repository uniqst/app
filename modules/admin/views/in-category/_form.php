<?php
use app\modules\admin\models\Category;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\InCategory */
/* @var $form yii\widgets\ActiveForm */
$category = Category::find()->where(['parent_id' => 0])->all();
?>

<div class="in-category-form">

    <?php $form = ActiveForm::begin(); ?>
	<?php
	foreach($category as $cat){
	$items = [
        $cat->id => $cat->name,
    ];
	}
	?>
    <?= $form->field($model, 'category_id')->dropDownList($items) ?>



    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
