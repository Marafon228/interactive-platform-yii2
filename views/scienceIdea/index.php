<?php

use app\models\ScienceIdea;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ScienceIdeaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Science Ideas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="science-idea-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Science Idea', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'inn',
            'address',
            'nomination',
            'direction',
            //'revenue',
            //'project_readiness_stage',
            //'experience_participation',
            //'name',
            //'link_project',
            //'presentation',
            //'business_plan',
            //'copies_security_documents',
            //'confirmation_project_development',
            //'media_file',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ScienceIdea $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
