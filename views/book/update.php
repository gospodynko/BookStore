<?php

use app\models\Category;
use app\models\PublishHouse;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Book */

$this->title = 'Update Book: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="book-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin();?>


    <?php echo $form->field($model,'name')->label('Имя')?>
    <?php var_dump ($model->getAuthor());?>


    <?php echo $form->field($book_images, 'image_url[]')->fileInput(['multiple' => true, 'accept' => 'image/*'])->label('file');    ?>
<!--    --><?php //echo $form->field($model->getAuthor(),'name')->label('Автор')?>
<!--            --><?php //var_dump ($model->getAuthor());?>
    <?php echo $form->field($model->getCategory(), 'name')->dropdownList(
        Category::find()->select(['name', 'id'])->indexBy('id')->column(),
        ['prompt'=>'Select Category']
    );?>

    <?php echo $form->field($publisher, 'name')->dropdownList(
        PublishHouse::find()->select(['name', 'id'])->indexBy('id')->column(),
        ['prompt'=>'Select Publisher']
    );
    ?>
    <div class="form-group">

        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
    </div>
</div>

<?php ActiveForm::end();?>

</div>
