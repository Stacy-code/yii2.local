<?php

/* @var $this yii\web\View */

/* @var $book app\models\User */


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;


$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;
?>

<section id="booking" class="booking bg-white">
    <div class="container">
        <div class="row clearfix">
            <div class="row">
                <div class="col-12">
                    <?php if (Yii::$app->session->hasFlash('success')): ?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <?php echo Yii::$app->session->getFlash('success'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                    <?php endif; ?>
                    <?php if (Yii::$app->session->hasFlash('error')): ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <?php echo Yii::$app->session->getFlash('error'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="heading heading-2 mb-80 text--center">
                    <h2 class="heading--title">Особисті дані</h2>
                    <div class="divider--line"></div>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>

        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <div class="booking-form">
                    <?php $form = ActiveForm::begin([
                        'fieldConfig' => [
                            'labelOptions' => ['class' => 'mb-0'],
                        ],
                    ]); ?>
                    <?= $form->field($user, 'name', [
                        'template' => "<div class=\"col-xs-12 col-sm-12 col-md-4\">{input}</div>",
                    ])->textInput([
                        'type' => 'text',
                        'class' => 'form-control',
                        'placeholder' => 'Введіть ім\'я',
                    ]) ?>


                    <?= $form->field($user, 'email', [
                        'template' => "<div class=\"col-xs-12 col-sm-12 col-md-4\">{input}</div>",
                    ])->textInput([
                        'type' => 'email',
                        'class' => 'form-control',
                        'placeholder' => 'Введіть електронну адресу',
                    ]) ?>

                    <?= $form->field($user, 'phone', [
                        'template' => "<div class=\"col-md-4\">{input}</div>",
                    ])->textInput([
                        'type' => 'text',
                        'class' => 'form-control',
                        'placeholder' => 'Введіть телефон',
                    ]) ?>


                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <?= Html::submitButton(
                            'Сохранить', [
                                'class' => 'btn btn--secondary btn--rounded'
                            ]
                        ) ?>
                    </div>


                </div>
                <!-- .row end -->
                <?php $form = ActiveForm::end(); ?>
                <!-- form end -->
            </div>
            <!-- .booking-form end -->
        </div>
        <!-- .col-md-8 end -->
    </div>

    <!-- .row end -->
    <div class="divider--shape-1down"></div>
    </div>
    <!-- .container end -->
</section>