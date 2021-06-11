<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Home';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-home">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the Home page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>
