<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Book', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php
    foreach($data as $d){
        echo($d->name);
//        echo ($d->getImages ()->name);
//        echo $d->image_url;
//        echo($d->getAuthor());
        foreach ($d->getAuthor() as $item) {
            print_r($item->name);

}

        foreach ($d->getPublisher() as $item){
            print_r($item->name);
        }

        foreach ($d->getCategory() as $item){
            print_r($item->name);
        }

    }
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
