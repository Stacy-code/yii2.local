<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Gallery';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-gallery">
 <body>
    <div class="preloader">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="wrapper clearfix">

        <!-- Page Title #1
        ============================================= -->
        <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
            <div class="bg-section">
                <img src="http://demo.zytheme.com/hairy/assets/images/page-titles/6.jpg" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="title text-center">
                            <div class="title--heading">
                                <h1>3 Columns</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb">
                                <li><a href="index-3.html">Home</a></li>
                                <li><a href="index-3.html">gallery</a></li>
                                <li class="active">3 Columns</li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #page-title end -->

        <!-- gallery 3 Column
        ============================================= -->
        <section id="gallery" class="gallery gallery-grid gallery-3col">
            <div class="container">
                <div class="row">
                    <!-- gallery Filter
                    ============================================= -->
                    <div class="col-xs-12 col-sm-12 col-md-12 gallery-filter">
                        <ul class="list-inline mb-0">
                            <li><a class="active-filter" href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".filter-Hairstyle">Hairstyle</a></li>
                            <li><a href="#" data-filter=".filter-Beard">Beard</a></li>
                            <li><a href="#" data-filter=".filter-Lineup">Lineup</a></li>
                            <li><a href="#" data-filter=".filter-Shave">Shave</a></li>
                        </ul>
                    </div>
                    <!-- .gallery-filter end -->
                </div>
                <div id="gallery-all">
                    <!-- gallery #1 -->
                    <div class="col-xs-12 col-sm-6 col-md-4 gallery-item filter-Lineup">
                        <div class="gallery--img">
                            <img src="http://demo.zytheme.com/hairy/assets/images/gallery/3col/1.jpg" alt="gallery Item">
                            <div class="gallery--hover">
                                <div class="gallery--action">
                                    <div class="pos-vertical-center">
                                        <div class="gallery--title">
                                            <h4><a href="#">Modern Haircut</a></h4>
                                        </div>
                                        <div class="gallery--cat">
                                            <a href="#">Hairstyle</a> <a href="#">Lineup</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .gallery-action end -->
                            </div>
                            <!-- .gallery-hover end -->
                        </div>
                        <!-- .gallery-img end -->
                    </div>
                    <!-- . gallery-item end -->

                    <!-- gallery #2 -->
                    <div class="col-xs-12 col-sm-6 col-md-4 gallery-item filter-Beard">
                        <div class="gallery--img">
                            <img src="http://demo.zytheme.com/hairy/assets/images/gallery/3col/2.jpg" alt="gallery Item">
                            <div class="gallery--hover">
                                <div class="gallery--action">
                                    <div class="pos-vertical-center">
                                        <div class="gallery--title">
                                            <h4><a href="#">vintage mustache</a></h4>
                                        </div>
                                        <div class="gallery--cat">
                                            <a href="#">Hairstyle</a><a href="#">Lineup</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .gallery-action end -->
                            </div>
                            <!-- .gallery-hover end -->
                        </div>
                        <!-- .gallery-img end -->
                    </div>
                    <!-- . gallery-item end -->

                    <!-- gallery #3 -->
                    <div class="col-xs-12 col-sm-6 col-md-4 gallery-item filter-Hairstyle filter-Shave">
                        <div class="gallery--img">
                            <img src="http://demo.zytheme.com/hairy/assets/images/gallery/3col/3.jpg" alt="gallery Item">
                            <div class="gallery--hover">
                                <div class="gallery--action">
                                    <div class="pos-vertical-center">
                                        <div class="gallery--title">
                                            <h4><a href="#">elegant long beard</a></h4>
                                        </div>
                                        <div class="gallery--cat">
                                            <a href="#">Hairstyle</a><a href="#">interior</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .gallery-action end -->
                            </div>
                            <!-- .gallery-hover end -->
                        </div>
                        <!-- .gallery-img end -->
                    </div>
                    <!-- . gallery-item end -->

                    <!-- gallery #4 -->
                    <div class="col-xs-12 col-sm-6 col-md-4 gallery-item filter-Hairstyle">
                        <div class="gallery--img">
                            <img src="http://demo.zytheme.com/hairy/assets/images/gallery/3col/4.jpg" alt="gallery Item">
                            <div class="gallery--hover">
                                <div class="gallery--action">
                                    <div class="pos-vertical-center">
                                        <div class="gallery--title">
                                            <h4><a href="#">special haircut</a></h4>
                                        </div>
                                        <div class="gallery--cat">
                                            <a href="#">Hairstyle</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .gallery-action end -->
                            </div>
                            <!-- .gallery-hover end -->
                        </div>
                        <!-- .gallery-img end -->
                    </div>
                    <!-- . gallery-item end -->

                    <!-- gallery #5 -->
                    <div class="col-xs-12 col-sm-6 col-md-4 gallery-item filter-Lineup">
                        <div class="gallery--img">
                            <img src="http://demo.zytheme.com/hairy/assets/images/gallery/3col/5.jpg" alt="gallery Item">
                            <div class="gallery--hover">
                                <div class="gallery--action">
                                    <div class="pos-vertical-center">
                                        <div class="gallery--title">
                                            <h4><a href="#">LONG BEARD</a></h4>
                                        </div>
                                        <div class="gallery--cat">
                                            <a href="#">Lineup</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .gallery-action end -->
                            </div>
                            <!-- .gallery-hover end -->
                        </div>
                        <!-- .gallery-img end -->
                    </div>
                    <!-- . gallery-item end -->

                    <!-- gallery #6 -->
                    <div class="col-xs-12 col-sm-6 col-md-4 gallery-item filter-Hairstyle">
                        <div class="gallery--img">
                            <img src="http://demo.zytheme.com/hairy/assets/images/gallery/3col/6.jpg" alt="gallery Item">
                            <div class="gallery--hover">
                                <div class="gallery--action">
                                    <div class="pos-vertical-center">
                                        <div class="gallery--title">
                                            <h4><a href="#">special haircut</a></h4>
                                        </div>
                                        <div class="gallery--cat">
                                            <a href="#">Hairstyle</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .gallery-action end -->
                            </div>
                            <!-- .gallery-hover end -->
                        </div>
                        <!-- .gallery-img end -->
                    </div>
                    <!-- . gallery-item end -->

                    <!-- gallery #7 -->
                    <div class="col-xs-12 col-sm-6 col-md-4 gallery-item filter-Shave">
                        <div class="gallery--img">
                            <img src="http://demo.zytheme.com/hairy/assets/images/gallery/3col/7.jpg" alt="gallery Item">
                            <div class="gallery--hover">
                                <div class="gallery--action">
                                    <div class="pos-vertical-center">
                                        <div class="gallery--title">
                                            <h4><a href="#">mustuche style</a></h4>
                                        </div>
                                        <div class="gallery--cat">
                                            <a href="#">Hairstyle</a><a href="#">Lineup</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .gallery-action end -->
                            </div>
                            <!-- .gallery-hover end -->
                        </div>
                        <!-- .gallery-img end -->
                    </div>
                    <!-- . gallery-item end -->

                    <!-- gallery #8 -->
                    <div class="col-xs-12 col-sm-6 col-md-4 gallery-item filter-Hairstyle">
                        <div class="gallery--img">
                            <img src="http://demo.zytheme.com/hairy/assets/images/gallery/3col/8.jpg" alt="gallery Item">
                            <div class="gallery--hover">
                                <div class="gallery--action">
                                    <div class="pos-vertical-center">
                                        <div class="gallery--title">
                                            <h4><a href="#">Hipster Style</a></h4>
                                        </div>
                                        <div class="gallery--cat">
                                            <a href="#">Hairstyle</a><a href="#">Lineup</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .gallery-action end -->
                            </div>
                            <!-- .gallery-hover end -->
                        </div>
                        <!-- .gallery-img end -->
                    </div>
                    <!-- . gallery-item end -->

                    <!-- gallery #9 -->
                    <div class="col-xs-12 col-sm-6 col-md-4 gallery-item filter-Lineup">
                        <div class="gallery--img">
                            <img src="http://demo.zytheme.com/hairy/assets/images/gallery/3col/9.jpg" alt="gallery Item">
                            <div class="gallery--hover">
                                <div class="gallery--action">
                                    <div class="pos-vertical-center">
                                        <div class="gallery--title">
                                            <h4><a href="#"> Hipster Style</a></h4>
                                        </div>
                                        <div class="gallery--cat">
                                            <a href="#">Hairstyle</a><a href="#">Lineup</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .gallery-action end -->
                            </div>
                            <!-- .gallery-hover end -->
                        </div>
                        <!-- .gallery-img end -->
                    </div>
                    <!-- . gallery-item end -->


                </div>
                <!-- .row end -->
                <!-- .row end -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 clearfix mt-30 text--center">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li>
                                <a class="pagination-next" href="#" aria-label="Next">
                                    <span aria-hidden="true">next <i class="fa fa-angle-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #gallery end -->

    </div>
    <!-- #wrapper end -->

    <!-- Footer Scripts
    ============================================= -->

    </body>
    <code><?= __FILE__ ?></code>
</div>
