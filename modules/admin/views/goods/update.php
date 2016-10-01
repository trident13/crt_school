<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Goods */

$this->title = 'Update Goods: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="goods-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <!-- начало -->

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
        <!-- конец -->

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

</div>
