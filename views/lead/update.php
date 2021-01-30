<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = 'Изменение лида';
$this->params['breadcrumbs'][] = ['label' => 'Список лидов', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="lead-update">

    <h2><?= Html::encode($this->title) ?></h2>
    <br />

    <div class="lead-form">

        <?php $form = ActiveForm::begin(); ?>

        <div class="row">
            <div class="col-sm-4 form-group form-group-sm">
                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 form-group form-group-sm">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 form-group form-group-sm">
                <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>
            </div>
        </div>

        <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
