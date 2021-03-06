<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Metro */

$this->title = $model->getPartner($model->dpid);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Metros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="metro-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->mid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->mid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'mid',
           // 'dpid',
            [
                'label' => 'Delivery Partner',
                'attribute' => 'dpid',
                'value' => $model->getPartner($model->dpid),                
            ],
            //'cityid',
            [
                'label' => 'City',
                'attribute' => 'cityid',
                'value' => $model->getCity($model->dpid),
            ],
          /*  'crtdt',
            'crtby',
            'upddt',
            'updby',  */
        ],
    ]) ?>

</div>
