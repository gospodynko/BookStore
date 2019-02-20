<?php

namespace app\models;

use Yii;
use app\models\BookImages;
/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $name
 */

class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{book}}';
    }

    /**
     * {@inheritdoc}
     */

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }
    public function getImages ()
    {
    return  $this->hasOne(BookImages::class, ['book_id' => 'id'])->all();
    }
    public function getBookToAuthor(){
        return $this->hasMany(BooksRelations::class,['book_id' => 'id']);
    }

    public function getAuthor(){
        return $this->hasMany(Author::class,['id' => 'author_id'])->via('bookToAuthor')->all();
    }

    public function getBookToPublisher (){
        return $this->hasMany(BooksRelations::class,['book_id' => 'id']);
    }

    public function getPublisher (){
        return $this->hasMany(PublishHouse::class,['id' => 'publish_id'])->via('bookToPublisher')->all();
    }

    public function getBookToCategory (){
        return $this->hasMany(BooksRelations::class,['book_id' => 'id']);
}

    public function getCategory () {
            return $this->hasMany(Category::class,['id' => 'category_id'])->via('bookToCategory')->all();
    }

}



