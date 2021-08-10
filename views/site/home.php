<?php

use app\services\callback\CallbackService;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Callback;



/* @var $callback Callback */
/* @var $serviceCallback CallbackService*/
/* @var $callbacks Callback */
/* @var $this yii\web\View */
$this->title = 'Home';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-home">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="wrapper clearfix">

        <!-- Services #2
        ============================================= -->
        <section id="service2" class="services services-1 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="heading text--center mb-70">
                            <h2 class="heading--title">our services</h2>
                            <p class="heading--desc">Duis aute irure dolor in reprehenderit volupte velit esse cillum
                                dolore eu fugiat pariatursint occaecat cupidatat non proident culpa.</p>
                            <div class="divider--line"></div>
                        </div>
                    </div>
                    <!-- .col-md-6 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <!-- Service #1 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="service-panel">
                            <div class="service--img">
                                <img src="http://demo.zytheme.com/hairy/assets/images/services/1.jpg" alt="img">
                            </div>
                            <h3>Haircut Styles</h3>
                            <p>Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore fugiat
                                nulla.</p>
                        </div>
                        <!-- .container end -->
                    </div>
                    <!-- .col-md-4 end -->

                    <!-- Service #2 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="service-panel">
                            <div class="service--img">
                                <img src="http://demo.zytheme.com/hairy/assets/images/services/2.jpg" alt="img">
                            </div>
                            <h3>Beard Trim</h3>
                            <p>Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore fugiat
                                nulla.</p>
                        </div>
                        <!-- .container end -->
                    </div>
                    <!-- .col-md-4 end -->

                    <!-- Service #3 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="service-panel">
                            <div class="service--img">
                                <img src="http://demo.zytheme.com/hairy/assets/images/services/3.jpg" alt="img">
                            </div>
                            <h3>Hot Shave</h3>
                            <p>Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore fugiat
                                nulla.</p>
                        </div>
                        <!-- .container end -->
                    </div>
                    <!-- .col-md-4 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 clearfix mt-70 text--center">
                        <a href="#" class="btn btn--secondary btn--bordered btn--rounded">View More</a>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #service1 end -->

        <!-- pricing #1
        ============================================= -->
        <section id="pricing" class="pricing pricing-1 bg-overlay bg-overlay-dark bg-parallax">
            <div class="bg-section">
                <img src="http://demo.zytheme.com/hairy/assets/images/background/3.jpg" alt="Background"/>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="heading text--center mb-70">
                            <h2 class="heading--title text-white">Our Pricing</h2>
                            <p class="heading--desc text-white">Duis aute irure dolor in reprehenderit volupte velit
                                esse cillum dolore eu fugiat pariatursint occaecat cupidatat non proident culpa.</p>
                            <div class="divider--line"></div>
                        </div>
                    </div>
                    <!-- .col-md-6 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <!-- Pricing #1 -->
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="pricing-panel">
                            <div class="pricing--content">
                                <h4 class="pricing--heading">Haircut</h4>
                                <div class="pricing--divider"></div>
                                <span class="price">$20.00</span>
                            </div>
                            <p class="pricing--desc">Our stylist consults & delivers you a precision haircut.</p>
                        </div>
                        <!-- .panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- Pricing #2 -->
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="pricing-panel">
                            <div class="pricing--content">
                                <h4 class="pricing--heading">Moustache Trim</h4>
                                <div class="pricing--divider"></div>
                                <span class="price">$10.00</span>
                            </div>
                            <p class="pricing--desc">Select & Change your hair color for new experience.</p>
                        </div>
                        <!-- .panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- Pricing #3 -->
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="pricing-panel">
                            <div class="pricing--content">
                                <h4 class="pricing--heading">Beard Trim</h4>
                                <div class="pricing--divider"></div>
                                <span class="price">$15.00</span>
                            </div>
                            <p class="pricing--desc">Keep your beard clean and sharp with an awesome style.</p>
                        </div>
                        <!-- .panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- Pricing #4 -->
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="pricing-panel">
                            <div class="pricing--content">
                                <h4 class="pricing--heading">Hair Wash</h4>
                                <div class="pricing--divider"></div>
                                <span class="price">$6.00</span>
                            </div>
                            <p class="pricing--desc">Relax and have a hot towel for cleaning your face.</p>
                        </div>
                        <!-- .panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- Pricing #5 -->
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="pricing-panel">
                            <div class="pricing--content">
                                <h4 class="pricing--heading">Hair Color</h4>
                                <div class="pricing--divider"></div>
                                <span class="price">$18.00</span>
                            </div>
                            <p class="pricing--desc">Select & Change your hair color for new experience.</p>
                        </div>
                        <!-- .panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- Pricing #6 -->
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="pricing-panel">
                            <div class="pricing--content">
                                <h4 class="pricing--heading">Face Mask</h4>
                                <div class="pricing--divider"></div>
                                <span class="price">$12.00</span>
                            </div>
                            <p class="pricing--desc">Our stylist consults & delivers you a precision haircut.</p>
                        </div>
                        <!-- .panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- Pricing #7 -->
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="pricing-panel">
                            <div class="pricing--content">
                                <h4 class="pricing--heading">Men’s Facial</h4>
                                <div class="pricing--divider"></div>
                                <span class="price">$25.00</span>
                            </div>
                            <p class="pricing--desc">Relax and have a hot towel for cleaning your face.</p>
                        </div>
                        <!-- .panel end -->
                    </div>
                    <!-- .col-md-4 end -->
                    <!-- Pricing #8 -->
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="pricing-panel">
                            <div class="pricing--content">
                                <h4 class="pricing--heading">Line Up</h4>
                                <div class="pricing--divider"></div>
                                <span class="price">$13.00</span>
                            </div>
                            <p class="pricing--desc">Keep your beard clean and sharp with an awesome style.</p>
                        </div>
                        <!-- .panel end -->
                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #pricing1 end -->

        <!-- Team #1
        ============================================= -->
        <section id="team1" class="team team-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="text--center heading heading-2 mb-70">
                            <h2 class="heading--title">Skilled Barbers</h2>
                            <p class="heading--desc mb-0">Duis aute irure dolor in reprehenderit volupte velit esse
                                cillum dolore eu fugiat pariatursint occaecat cupidatat non proident culpa.</p>
                            <div class="divider--line divider--center"></div>
                        </div>
                    </div>
                    <!-- .col-md-6 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <!-- Member #1 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="member">
                            <div class="member-img">
                                <img src="http://demo.zytheme.com/hairy/assets/images/team/grid/1.jpg" alt="member"/>
                                <div class="member-overlay">
                                    <div class="member-social">
                                        <div class="pos-vertical-center">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .memebr-ovelay end -->
                            </div>
                            <!-- .member-img end -->
                            <div class="member-info">
                                <h5>Ryan Printz</h5>
                                <h6>Barber</h6>
                            </div>
                            <!-- .member-info end -->
                        </div>
                        <!-- .member end -->
                    </div>
                    <!-- .col-md-4 end -->

                    <!-- Member #2 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="member">
                            <div class="member-img">
                                <img src="http://demo.zytheme.com/hairy/assets/images/team/grid/2.jpg" alt="member"/>
                                <div class="member-overlay">
                                    <div class="member-social">
                                        <div class="pos-vertical-center">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .memebr-ovelay end -->
                            </div>
                            <!-- .member-img end -->
                            <div class="member-info">
                                <h5>Steve Martin</h5>
                                <h6>Barber</h6>
                            </div>
                            <!-- .member-info end -->
                        </div>
                        <!-- .member end -->
                    </div>
                    <!-- .col-md-4 end -->

                    <!-- Member #3 -->
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="member">
                            <div class="member-img">
                                <img src="http://demo.zytheme.com/hairy/assets/images/team/grid/3.jpg" alt="member"/>
                                <div class="member-overlay">
                                    <div class="member-social">
                                        <div class="pos-vertical-center">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .memebr-ovelay end -->
                            </div>
                            <!-- .member-img end -->
                            <div class="member-info">
                                <h5>Bruce Sam</h5>
                                <h6>Barber</h6>
                            </div>
                            <!-- .member-info end -->
                        </div>
                        <!-- .member end -->
                    </div>
                    <!-- .col-md-4 end -->
                </div>
            </div>
        </section>
        <!-- #team4 end  -->
        <?php if($serviceCallback::hasCarouselItems()): ?>
        <!-- Testimonial #2
        ============================================= -->
        <section id="testimonial2" class="testimonial testimonial-1 bg-overlay bg-overlay-dark bg-parallax text-center">
            <div class="bg-section">
                <img src="http://demo.zytheme.com/hairy/assets/images/testimonial/bg-1.jpg" alt="Background"/>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="text--center heading mb-70">
                            <h2 class="heading--title color-white">Clients Say</h2>
                            <p class="heading--desc mb-0 color-gray">Duis aute irure dolor in reprehenderit volupte
                                velit esse cillum dolore eu fugiat pariatursint occaecat cupidatat non proident
                                culpa.</p>
                            <div class="divider--line divider--center"></div>
                        </div>
                    </div>
                    <!-- .col-md-8 end -->
                </div>


                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div id="testimonial-carousel" class="carousel carousel-dots carousel-white" data-slide="3"
                             data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="true" data-space="30"
                             data-loop="true" data-speed="800">
                            <!-- Testimonial #1 -->




                            <?php foreach ($serviceCallback::getCarouselItems() as $carouselItem): ?>

                                <div class="testimonial-panel">


                                    <div class="testimonial--meta-content">
                                        <h4><?= $carouselItem->name ?></h4>
                                    </div>

                                    <div class="testimonial--body">
                                        <p><?= $carouselItem->message ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>


                            <!-- .testimonial-panel end -->


                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                </div>


                <!-- .container end -->
        </section>
        <!-- #testimonial2 end -->
        <?php endif;?>
        <!-- Callback-form
       ============================================= -->
        <section id="contact1" class="forms">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">

                        <div class="contact-form">
                            <?php $form = ActiveForm::begin([
                                'fieldConfig' => [
                                    'labelOptions' => ['class' => 'mb-0'],
                                ],
                            ]); ?>

                            <div class="row">

                                <?= $form->field($callback, 'name', [
                                    'template' => "<div class=\"col-md-12\">{input}{error}</div>",
                                ])->textInput([
                                    'type' => 'text',
                                    'class' => 'form-control',
                                    'placeholder' => 'Введіть ім\'я',
                                ]) ?>

                                <?= $form->field($callback, 'email', [
                                    'template' => "<div class=\"col-md-6\">{input}{error}</div>",
                                ])->textInput([
                                    'type' => 'email',
                                    'class' => 'form-control',
                                    'placeholder' => 'Введіть електронну адресу',
                                ]) ?>

                                <?= $form->field($callback, 'phone', [
                                    'template' => "<div class=\"col-md-6\">{input}{error}</div>",
                                ])->textInput([
                                    'type' => 'text',
                                    'class' => 'form-control',
                                    'placeholder' => 'Введіть телефон',
                                ]) ?>

                                <?= $form->field($callback, 'message', [
                                    'template' => "<div class=\"col-md-12\">{input}{error}</div>",
                                ])->textarea([
                                    'class' => 'form-control',
                                    'rows' => 3,
                                    'placeholder' => 'Залиште свій відгук',
                                ]) ?>

                                <div class="col-md-12">
                                    <?= Html::submitButton(
                                        'Залишити відгук', [
                                            'class' => 'btn btn--secondary btn--rounded btn--block',
                                        ]
                                    ) ?>
                                </div>

                            </div>

                            <?php $form = ActiveForm::end(); ?>
                        </div>
                    </div>
                    <!-- .col-md-6 end -->
                </div>
            </div>
        </section>
        <!-- Callback-form end -->

    </div>
</div>


