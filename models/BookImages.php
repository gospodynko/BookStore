<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book_images".
 *
 * @property int $id
 * @property int $book_id
 * @property string $image_url
 */
class BookImages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book_images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['book_id', 'image_url'], 'required'],
            [['book_id'], 'integer'],
            [['image_url'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'book_id' => 'Book ID',
            'image_url' => 'Image Url',
        ];
    }
    public function getImages ()
    {
        return  $this->hasOne(Book::class, ['id' => 'book_id'])->one();
    }
}
