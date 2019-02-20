<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books_relations".
 *
 * @property int $id
 * @property int $book_id
 * @property int $author_id
 * @property int $publish_id
 * @property int $category_id
 */
class BooksRelations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books_relations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['book_id', 'author_id', 'publish_id', 'category_id'], 'required'],
            [['book_id', 'author_id', 'publish_id', 'category_id'], 'integer'],
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
            'author_id' => 'Author ID',
            'publish_id' => 'Publish ID',
            'category_id' => 'Category ID',
        ];
    }
}
