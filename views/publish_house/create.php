<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PublishHouse */

$this->title = 'Create Publish House';
$this->params['breadcrumbs'][] = ['label' => 'Publish Houses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publish-house-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
