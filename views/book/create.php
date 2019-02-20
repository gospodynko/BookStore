<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Category;
use app\models\PublishHouse;
/* @var $this yii\web\View */
/* @var $model app\models\Book */

$this->title = 'Create Book';
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<div class="book-create">
<?php $form = ActiveForm::begin();?>


    <?php echo $form->field($model,'name')?>


    <?php echo $form->field($book_images, 'image_url[]')->fileInput(['multiple' => true, 'accept' => 'image/*']);    ?>
    <?php echo $form->field($author,'name')->input('name')?>

   <?php echo $form->field($category, 'name')->dropdownList(
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
