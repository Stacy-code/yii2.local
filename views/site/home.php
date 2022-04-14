<?php

use app\services\callback\CallbackService;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use app\models\Callback;
use app\services\service\ServiceService;
use app\models\Service;



/* @var $callback Callback */
/* @var $serviceCallback CallbackService */
/* @var $serviceService ServiceService */
/* @var $service Service */
/* @var $callbacks Callback */
/* @var $this yii\web\View */
$this->title = 'Home';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-home">

    <div id="wrapper" class="wrapper clearfix">

        <section id="service2" class="services services-1 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="heading text--center mb-70">
                            <h2 class="heading--title">Наш сервіс</h2>
                            <p class="heading--desc">Ми не намагаємось заробити, ми намагаємось змінити життя людей</p>
                            <p class="heading--desc">Джефф Безос</p>
                            <div class="divider--line"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="service-panel">
                            <div class="service--img">
                                <img src="http://demo.zytheme.com/hairy/assets/images/services/1.jpg" alt="img">
                            </div>
                            <h3>Чоловіча стрижка</h3>
                            <p>Чоловіча стрижка в нашому барбершопі - це не тільки проста можливіть стати
                                модним і змінити стиль, а й підкреслити вашу індивідуальність і мужність.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="service-panel">
                            <div class="service--img">
                                <img src="http://demo.zytheme.com/hairy/assets/images/services/2.jpg" alt="img">
                            </div>
                            <h3>Стрижка бороди</h3>
                            <p>Борода є важливим елементом чоловічого стилю. Саме тому в нашому барбершопі
                                - майстри підберуть ідеальну форму бороди під вашу форму обличчя, враховуючи
                                побажання клієнта і модні тенденції.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="service-panel">
                            <div class="service--img">
                                <img src="http://demo.zytheme.com/hairy/assets/images/services/3.jpg" alt="img">
                            </div>
                            <h3>Королівське гоління</h3>
                            <p>Відчуйте задоволення від справжнього королівського гоління, після якого
                                ваша шкіра буде ідеально гладкою і ви забудите про роздратування на довгий час.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php if ($serviceService::hasServiceItems()): ?>
        <section id="pricing" class="pricing pricing-1 bg-overlay bg-overlay-dark bg-parallax">
            <div class="bg-section">
                <img src="http://demo.zytheme.com/hairy/assets/images/background/3.jpg" alt="Background"/>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="heading text--center mb-70">
                            <h2 class="heading--title text-white">Наші ціни</h2>
                            <div class="divider--line"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="pricing-panel">
                            <?php foreach ($serviceService::getServiceItems() as $serviceItem): ?>

                            <div class="pricing--content">
                                <h4 class="pricing--heading"><?=$serviceItem->name ?></h4>
                                <div class="pricing--divider"></div>
                                <span class="price"><?=$serviceItem->price ?></span>
                            </div>
                            <p class="pricing--desc"><?=$serviceItem->description ?></p>
                           <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <?php endif;?>


        <section id="team1" class="team team-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="text--center heading heading-2 mb-70">
                            <h2 class="heading--title">Наш майстер</h2>
                           <div class="divider--line divider--center"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= Url::to('/themes/frontend/images/team/grid/1.jpg'); ?>" alt="member"/>
                                <div class="member-overlay">
                                    <div class="member-social">
                                        <div class="pos-vertical-center">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="member-info">
                                <h5>Роман Гученко</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php if ($serviceCallback::hasCarouselItems()): ?>
            <section id="testimonial2"
                     class="testimonial testimonial-1 bg-overlay bg-overlay-dark bg-parallax text-center">
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
                    </div>


                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div id="testimonial-carousel" class="carousel carousel-dots carousel-white" data-slide="3"
                                 data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="true"
                                 data-space="30"
                                 data-loop="true" data-speed="800">
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
                            </div>
                        </div>
                    </div>
            </section>

        <?php endif; ?>
        <section id="contact1" class="forms">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">

                        <div class="contact-form">
                            <?php $form = ActiveForm::begin([
                                'fieldConfig' => [
                                    'labelOptions' => ['class' => 'mb-2'],
                                ],
                            ]); ?>

                            <div class="row">

                                <?= $form->field($callback, 'name', [
                                    'template' => "<div class=\"col-md-12\">{label}{input}{error}</div>",
                                ])->textInput([
                                    'type' => 'text',
                                    'class' => 'form-control',
                                    'placeholder' => 'Введіть ім\'я',
                                ]) ?>

                                <?= $form->field($callback, 'email', [
                                    'template' => "<div class=\"col-md-6\">{label}{input}{error}</div>",
                                ])->textInput([
                                    'type' => 'email',
                                    'class' => 'form-control',
                                    'placeholder' => 'Введіть електронну адресу',
                                ]) ?>

                                <?= $form->field($callback, 'phone', [
                                    'template' => "<div class=\"col-md-6\">{label}{input}{error}</div>",
                                ])->textInput([
                                    'type' => 'text',
                                    'class' => 'form-control',
                                    'placeholder' => 'Введіть телефон',
                                ]) ?>

                                <?= $form->field($callback, 'message', [
                                    'template' => "<div class=\"col-md-12\">{label}{input}{error}</div>",
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
                </div>
            </div>
        </section>

    </div>
</div>


