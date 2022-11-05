<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Users $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="users-view">

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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fio',
            'date_of_birth',
            'country',
            'city',
            'citizenship',
            'gender',
            'phone',
            'email:email',
            'education:ntext',
            'employment',
            'work_experience',
            'skills:ntext',
            'achievements:ntext',
            'presence_team',
            'role_team',
            'patent',
            'company',
            'email_verified_at:email',
            'password',
            'profile_image',
            'id_current_idea',
            'id_science_idea',
            'remember_token',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
