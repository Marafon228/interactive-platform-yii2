<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AnyIdea $model */

$this->title = 'Create Any Idea';
$this->params['breadcrumbs'][] = ['label' => 'Any Ideas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="any-idea-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
