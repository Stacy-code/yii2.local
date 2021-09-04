<?php

use yii\helpers\Url;
?>

<header id="navbar-spy" class="header header-topbar header-default header-fixed">
    <div id="top-bar" class="top-bar">
        <div class="container">
            <div class="bottom-bar-border">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 top--contact hidden-xs">
                        <ul class="list-inline mb-0 ">
                            <li>
                                <i class="lnr lnr-clock"></i><span>Пн - Сб  8:30 - 20:00</span>
                            </li>
                            <li>
                                <i class="lnr lnr-phone-handset"></i> <span>+380 93 966 3400</span>
                            </li>
                        </ul>
                    </div><!-- .col-md-6 end -->
                    <div class="col-xs-12 col-sm-6 col-md-6 top--info text-right text-center-xs">
                        <?php if(Yii::$app->user->isGuest) :?>
                        <span class="top--login"><i class="lnr lnr-exit"></i><a href="<?= Url::to('/identity/login')?>">Вхід</a> / <a href="<?= Url::to('/identity/register')?>">Реєстрація</a></span>
                        <?php else : ?>
                           <span class="top--login" > Привіт <?= Yii::$app->user->identity->name?> !</span>



                        <span class="top--login"><i class="lnr lnr-exit"></i><a href="<?= Url::to('/identity/logout')?>">Вихід</a></span>
                        <?php endif; ?>
                        <span class="top--social">
						<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
						<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
						<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
					<a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
					</span>
                    </div><!-- .col-md-6 end -->
                </div>
            </div>
        </div>
    </div>
    <nav id="primary-menu" class="navbar navbar-fixed-top">
        <div class="container">
            <div class="">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="index-2.html">
                        <img class="logo-light"  src="<?=Url::to('/themes/frontend/images/logo/logo-l.png')?>" alt="Logo-light">
                        <img class="logo-dark" src="<?=Url::to('/themes/frontend/images/logo/logo-l.png')?>"  alt="Logo-dark">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                    <ul class="nav navbar-nav nav-pos-right nav-bordered-right snavbar-left">
                        <!-- Home Menu -->
                        <li>
                            <a href="<?= Url::to('/')?>">головна</a>
                        </li>
                        <!-- li end -->
                        <!-- Pages Menu -->
                        <!--   <li class="has-dropdown">
                               <a href="#" data-toggle="dropdown" class="dropdown-toggle link-hover" data-hover="pages">pages</a>
                               <ul class="dropdown-menu">
                                   <li><a href="page-about-us.html">about us</a></li>
                                   <li><a href="page-book-online.html">book online</a></li>
                                   <li><a href="page-our-staff.html">our staff</a></li>
                                   <li><a href="page-services.html">our services</a></li>
                                   <li><a href="page-contact.html">contact us</a></li>
                                   <li><a href="page-404.html">404</a></li>
                               </ul>
                           </li> -->
                           <!-- li end -->
                        <!-- Features Menu-->
                        <!--<li class="has-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">elements</a>
                            <ul class="dropdown-menu">
                                <li><a href="elements-buttons.html">buttons</a></li>
                                <li><a href="elements-columns-grids.html">grid system</a></li>
                                <li><a href="elements-typography.html">typography</a></li>
                                <li><a href="elements-form.html">forms</a></li>
                                <li><a href="elements-heading.html">heading</a></li>
                            </ul>
                        </li> -->
                        <!-- li end -->
                        <!-- Gallery Menu-->
                        <li>
                            <a href="<?= Url::to('/site/gallery')?>">галерея</a>
                        </li>
                        <!-- li end -->
                        <!-- Blog Menu-->
                        <!--   <li class="has-dropdown">
                             <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Blog</a>
                             <ul class="dropdown-menu">
                                 <li class="dropdown-submenu">
                                     <a href="#" data-toggle="dropdown" class="dropdown-toggle">blog grid</a>
                                     <ul class="dropdown-menu">
                                         <li>
                                             <a href="blog-grid.html">fullwidth</a>
                                         </li>
                                         <li>
                                             <a href="blog-grid-sidebar-left.html">left sidebar</a>
                                         </li>
                                         <li>
                                             <a href="blog-grid-sidebar-right.html">right sidebar</a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li class="dropdown-submenu">
                                     <a href="#" data-toggle="dropdown" class="dropdown-toggle">blog masonry</a>
                                     <ul class="dropdown-menu">
                                         <li>
                                             <a href="blog-masonry.html">fullwidth</a>
                                         </li>
                                         <li>
                                             <a href="blog-masonry-sidebar-left.html">left sidebar</a>
                                         </li>
                                         <li>
                                             <a href="blog-masonry-sidebar-right.html">right sidebar</a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li class="dropdown-submenu">
                                     <a href="#" data-toggle="dropdown" class="dropdown-toggle">blog standard</a>
                                     <ul class="dropdown-menu">
                                         <li>
                                             <a href="blog-standard-sidebar-left.html">left sidebar</a>
                                         </li>
                                         <li>
                                             <a href="blog-standard-sidebar-right.html">right sidebar</a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a href="blog-single.html">blog single</a>
                                 </li>
                             </ul>
                         </li> -->
                         <!-- li end -->
                        <!-- my profile Menu -->
                        <?php if(!Yii::$app->user->isGuest) :?>
                        <li class="has-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Мій профіль</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?=Url::to(['/room/profile']) ?>">Особисті дані</a>
                                </li>
                                <li>
                                    <a href="<?=Url::to(['/room/book']) ?>">Мої записи</a>
                                </li>
                            </ul>
                        </li>
                        <?php endif;?>
                        <!-- li end -->
                    </ul>
                    <!-- Module Cart -->
                    <!-- <div class="module module-cart pull-left">
                        <div class="module-icon cart-icon">
                            <i class="lnr lnr-store"></i>
                            <span class="title">shop cart</span>
                            <label class="module-label">2</label>
                        </div>
                        <div class="module-content module-box cart-box">
                            <div class="cart-overview">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            <img class="img-responsive" src="http://demo.zytheme.com/hairy/assets/images/shop/thumb/1.jpg" alt="product"/>
                                        </a>
                                        <div class="product-meta">
                                            <h5 class="product-title"><a href="#">Gel Cream</a></h5>
                                            <p class="product-price">1 × $7.50</p>
                                        </div>
                                        <a class="cart-cancel" href="#">cancel</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-responsive" src="http://demo.zytheme.com/hairy/assets/images/shop/thumb/2.jpg" alt="product"/>
                                        </a>
                                        <div class="product-meta">
                                            <h5 class="product-title"><a href="#">Hair Dryer</a></h5>
                                            <p class="product-price">2 × $35.00</p>
                                        </div>
                                        <a class="cart-cancel" href="#">cancel</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-responsive" src="http://demo.zytheme.com/hairy/assets/images/shop/thumb/3.jpg" alt="product"/>
                                        </a>
                                        <div class="product-meta">
                                            <h5 class="product-title"><a href="#">Beard Razor</a></h5>
                                            <p class="product-price">1 × $39.00</p>
                                        </div>
                                        <a class="cart-cancel" href="#">cancel</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="cart-total">
                                <div class="total-desc">
                                    Subtotal:
                                </div>
                                <div class="total-price">
                                    $100.50
                                </div>
                            </div>
                            <div class="clearfix">
                            </div>
                            <div class="cart--control">
                                <a class="btn btn--primary btn--bordered btn--rounded btn--block" href="#">View Cart & Checkout</a>
                            </div>
                        </div>
                    </div> -->
                    <!-- .module-cart end -->
                    <!-- Module Search -->

                    <!-- .module-search end -->
                    <!-- Module Cart -->
                    <div class="module module-cart pull-left">
                        <div class="module-icon">
                            <a class="btn btn--white btn--bordered btn--rounded" href="<?= Url::to('/site/book')?>">Записатись</a>
                        </div>
                    </div>
                    <!-- .module-cart end -->
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>

</header>
