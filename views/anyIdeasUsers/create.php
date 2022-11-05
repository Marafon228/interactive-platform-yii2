<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AnyIdeasUsers $model */

$this->title = 'Create Any Ideas Users';
$this->params['breadcrumbs'][] = ['label' => 'Any Ideas Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="any-ideas-users-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
