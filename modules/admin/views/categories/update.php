<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Categories */

$this->title = 'Update Categories: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="categories-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <!-- -->

    <?= $form->field($model, 'id')->hiddenInput()->label(false); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'desc')->textarea(['rows' => 3]) ?>
    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'date')->textInput(['maxlength' => true]) ?>

    <?php foreach ($cats as $key => $cat): ?>
      <?= $form->field($cat, "[$key]id")
        ->hiddenInput()
        ->label(false)
      ?>
      <?= $form->field($cat, "[$key]name")
        ->textInput(['maxlength' => true])
      ?>
    <?php endforeach; ?>
    <!-- -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
