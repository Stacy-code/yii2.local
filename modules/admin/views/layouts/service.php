<?php

/* @var $this \yii\web\View */

/* @var $content string */


use app\modules\admin\assets\UserAsset;
use yii\helpers\Html;
use yii\helpers\Url;

UserAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body data-sidebar="dark">
<?php $this->beginBody() ?>
<div id="layout-wrapper">
    <?= $this->render('partials/header') ?>

</div>

<?=$content?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
