<?php

namespace app\models;

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
            [['product_name', 'product_image', 'product_price', 'product_about', 'categore_id'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_name' => 'Product Name',
            'product_image' => 'Product Image',
            'product_price' => 'Product Price',
            'product_about' => 'Product About',
            'categore_id' => 'Categore ID',
        ];
    }
}
