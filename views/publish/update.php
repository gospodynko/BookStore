<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PublishHouse */

$this->title = 'Update Publish House: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Publish Houses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="publish-house-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
