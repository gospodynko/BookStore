<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Book */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="book-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $data->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $data->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>





  <h1> <?php echo($data->name);?></h1>
<p><?php
foreach ($data->getImages() as $image) {
    echo($image->image_url);
        }
?></p>
        <p><?php echo $data->date?></p>
    <p><?php
        foreach ($data->getAuthor() as $item) {
            echo($item->name);

        }?></p>

    <p><?php
        foreach ($data->getPublisher() as $item){
            print_r($item->name);
        }
        ?></p>

   <p><?php
                foreach ($data->getCategory() as $item){
                    print_r($item->name);
            }
            ?></p>

</div>
