<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = 'Создание лида';

$this->registerJsFile('js/site/lead-create.js', ['depends'=>'app\assets\AppAsset']);
?>
<div class="lead-create">

    <h2><?= Html::encode($this->title) ?></h2>
    <br />

    <div class="lead-form">

        <?php $form = ActiveForm::begin([
            'id' => 'lead-create-form',
        ]); ?>

        <div class="row">
            <div class="col-sm-4 form-group form-group-sm">
                <?= $form->field($model, 'email')->textInput([
                    'maxlength' => true,
                    'placeholder' => 'ivan@mail.ru',
                ]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 form-group form-group-sm">
                <?= $form->field($model, 'name')->textInput([
                    'maxlength' => true,
                    'placeholder' => 'Ivan',
                ]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 form-group form-group-sm">
                <?= $form->field($model, 'mobile')->textInput([
                    'maxlength' => true,
                    'placeholder' => '+79651234567',
                ]) ?>
            </div>
        </div>

        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>