<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ZoneSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zone-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'zid') ?>

    <?= $form->field($model, 'dpid') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'crtdt') ?>

    <?= $form->field($model, 'crtby') ?>

    <?php // echo $form->field($model, 'upddt') ?>

    <?php // echo $form->field($model, 'updby') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
