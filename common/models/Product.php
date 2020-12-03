<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $product_name
 * @property string $product_image
 * @property string $product_price
 * @property string $product_about
 * @property string $categore_id
 */
class Product extends \yii\db\ActiveRecord
{
    public $imageFiles;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_name', 'product_image', 'product_price', 'product_about', 'categore_id'], 'required'],
            [['product_name', 'product_image',  'product_about', 'categore_id'], 'string', 'max' => 225],
            [['product_price'], 'integer'],
            [['imageFiles'], 'file', 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_name' => 'наименование товара',
            'product_image' => 'Изображение продукта',
            'product_price' => 'Цена продукта  $',
            'product_about' => 'О продукте',
            'categore_id' => 'Название категории',
        ];
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'categore_id']);
    }
}
