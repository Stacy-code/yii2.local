<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\modules\admin\assets\AdminAsset;
use yii\helpers\Html;

AdminAsset::register($this);
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

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Меню</li>

                    <li>
                        <a href="" class="">
                            <i class="ri-table-2"></i>
                            <span>Список записей</span>
                        </a>
                    </li>

                    <li>
                        <a href="calendar.html" class=" waves-effect">
                            <i class="ri-calendar-2-line"></i>
                            <span>Календарь</span>
                        </a>
                    </li>
                    <li>
                        <a href="barber.html" class=" waves-effect">
                            <i class="ri-barbers-2-line"></i>
                            <span>Сотрудники</span>
                        </a>
                    </li>

                    <li>
                        <a href="apps-chat.html" class=" waves-effect">
                            <i class="ri-chat-1-line"></i>
                            <span>Чат</span>
                        </a>
                    </li>

                    <li>
                        <a href="callback.html" class=" waves-effect">
                            <i class=""></i>
                            <span>Отзывы</span>
                        </a>
                    </li>


                    <li class="menu-title">Редактор страницы</li>
                    <li>
                        <a href="" class="">
                            <i class="ri-gallery-line"></i>
                            <span>Галерея</span>
                        </a>
                    </li>
                    <li>
                        <a href="add-news.html" class=" waves-effect">
                            <i class="ri-news-1-line"></i>
                            <span>Новости</span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Nazox</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
 </div>
    <!-- end main content-->

</div>

<?=$content?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

