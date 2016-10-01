<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Goods */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-view">

    <h1><?= Html::encode($this->title) ?></h1>



    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <!-- -->
    <div class="category category-default">
      <ul class="cat-group">
        <?php foreach ($cats as $key => $cat): ?>
          <li class="cat-group-item">
            <?php echo Html::encode($cat->name); ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <!-- -->
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'img',
            'desc:ntext',
            'price',
            'date',
        ],
    ]) ?>

</div>
