<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "food".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $name
 * @property integer $price
 * @property string $detail
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 * @property integer $deleted_at
 *
 * @property Category $category
 */
class Food extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'food';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'name', 'price', 'detail', 'image'], 'required'],
            [['category_id', 'price', 'deleted_at'], 'integer'],
            [['detail'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'image'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id'],
            [['file_image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, gif']],
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
            'price' => 'Price',
            'detail' => 'Detail',
            'image' => 'Image',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
