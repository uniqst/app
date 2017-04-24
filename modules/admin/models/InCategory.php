<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "in_category".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $name
 * @property string $value
 */
class InCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'in_category';
    }

    public function getCatOption()
    {
        return $this->hasOne(CatOption::className(), ['incat_id' => 'id']);
    }

     public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }


     public function getAllOption()
    {
        return CatOption::find()->where(['incat_id' => $this->id])->groupBy('value')->all(); 
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id'], 'integer'],
            [['name', 'value'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'name' => 'Name',
            'value' => 'Value',
        ];
    }
}
