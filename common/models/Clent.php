<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "clent".
 *
 * @property int $id
 * @property string $clent_name
 * @property string $product_image
 * @property string $clent_list_name
 * @property string $product_tell
 */
class Clent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clent_name',  'clent_list_name', 'product_tell'], 'required'],
            [['clent_name',  'clent_list_name', 'product_tell'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'clent_name' => 'Имя Клиента',
            'clent_list_name' => 'Клиента фамилия',
            'product_tell' => 'Телефон клиента',
        ];
    }
}
