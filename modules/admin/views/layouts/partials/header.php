<?php
use \yii\helpers\Url;

?>

<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?=Url::to('/themes/backend/images/logo-sm-dark.png') ?>" alt="" height="22">
                                </span>
                    <span class="logo-lg">
                                    <img src="<?=Url::to('/themes/backend/images/logo-dark.png') ?>" alt="" height="20">
                                </span>
                </a>

                <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?=Url::to('/themes/backend/images/logo-sm-light.png') ?>" alt="" height="22">
                                </span>
                    <span class="logo-lg">
                                    <img src="<?=Url::to('/themes/backend/images/logo-light.png') ?>" alt="" height="20">
                                </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="ri-search-line"></span>
                </div>
            </form>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ml-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ri-search-line"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                     aria-labelledby="page-header-search-dropdown">
                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect"
                        id="page-header-notifications-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ri-notification-3-line"></i>
                    <span class="noti-dot"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                     aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Notifications </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small"> View All</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="ri-shopping-cart-line"></i>
                                                </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Your order is placed</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <img src="<?=Url::to('/themes/backend/images/users/avatar-3.jpg') ?>"
                                     class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">James Lemire</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">It will seem like simplified English.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="ri-checkbox-circle-line"></i>
                                                </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle mr-1"></i> View More..
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-none d-xl-inline-block ml-1">Kevin</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="ri-user-line align-middle mr-1"></i> Profile</a>
                    <a class="dropdown-item text-danger" href="#"><i
                                class="ri-shut-down-line align-middle mr-1 text-danger"></i> Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="vertical-menu">

    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Меню</li>

                <li>
                    <a  href="<?= Url::to('/admin/book/index')?>" class="">
                        <i class="ri-table-2"></i>
                        <span>Список записей</span>
                    </a>
                </li>


                <li>
                    <a href="<?= Url::to('/admin/user/index')?>" class=" waves-effect">
                        <i class="ri-table-2"></i>
                        <span>Список пользователей</span>
                    </a>
                </li>

                <li>
                    <a href="<?= Url::to('/admin/calendar/index')?>" class=" waves-effect">
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