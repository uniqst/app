<?php

namespace app\modules\admin\models;

use Yii;
use app\modules\admin\models\InCategory;
use app\modules\admin\models\Product;
use app\modules\admin\models\Category;
use yii\db\ActiveRecord;



/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $img
 * @property string $name
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }


    public function getProduct()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }

     public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }

    public function getInCategory()
    {  
        return $this->hasMany(InCategory::className(), ['category_id' => 'id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'name'], 'required'],
            [['parent_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '№ категории',
            'parent_id' => 'Родительская категория',
            'name' => 'Название',
        ];
    }
}
