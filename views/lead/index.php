<?php

use yii\helpers\Html;
use yii\grid\GridView;


$this->title = 'Список лидов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lead-index">

    <h2><?= Html::encode($this->title) ?></h2>
    <br />

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'email:email',
            'name',
            'mobile',

            // ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
                'options' => ['style' => 'width: 50px;']
            ],
        ],
    ]); ?>


</div>
