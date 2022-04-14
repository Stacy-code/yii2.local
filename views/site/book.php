<?php

/* @var $this yii\web\View */

/* @var $book app\models\Book */

/* @var $service Service */

/* @var $serviceService ServiceService */


use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;
use app\services\service\ServiceService;
use app\models\Service;



$this->title = 'Book';
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
                    <h2 class="heading--title">Записатись Онлайн</h2>
                    <p class="heading--desc">Встигни записатись до нашого топ-майстра завчасно, щоб завжди виглядати
                        неперевершено! </p>
                    <div class="divider--line"></div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="heading heading-2 mb-80">
                    <p class="heading--desc">Якщо ви вирішили піти в барбершоп, то абсолютно точно
                        можете розраховувати на:</p>
                    <ul>
                        <li>Чудовий сервіс;</li>
                        <li>Миття голови і укладання дорогущими засобами і шампунями;</li>
                        <li>Професійну стрижку;</li>
                        <li>Можливість поговорити з майстром про що завгодно;</li>
                        <li>Отримання цікавого досвіду гоління лезом;</li>
                        <li>Вживання гарячих і міцних напоїв безкоштовно;</li>
                        <li>Відмінні кадри в цікавому антуражі приміщення;</li>
                        <li>Стильний зовнішній вигляд, як підсумок відвідування, за який не шкода віддати більше грошей, ніж
                            в традиційній перукарні.
                        </li>
                    </ul>
                    <div class="divider--line"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <div class="booking-form">
                    <?php $form = ActiveForm::begin([
                        'fieldConfig' => [
                            'labelOptions' => ['class' => 'mb-2'],
                        ],
                    ]); ?>
                    <?= $form->field($book, 'name', [
                        'template' => "<div class=\"col-xs-12 col-sm-12 col-md-4\">{label}{input}{error}</div>",
                    ])->textInput([
                        'type' => 'text',
                        'class' => 'form-control',
                        'placeholder' => 'Введіть ім\'я',
                    ]) ?>


                    <?= $form->field($book, 'email', [
                        'template' => "<div class=\"col-xs-12 col-sm-12 col-md-4\">{label}{input}{error}</div>",
                    ])->textInput([
                        'type' => 'email',
                        'class' => 'form-control',
                        'placeholder' => 'Введіть електронну адресу',
                    ]) ?>

                    <?= $form->field($book, 'phone', [
                        'template' => "<div class=\"col-md-4\">{label}{input}{error}</div>",
                    ])->textInput([
                        'type' => 'text',
                        'class' => 'form-control',
                        'placeholder' => 'Введіть телефон',
                    ]) ?>

                    <?php if ($serviceService::hasServiceItems()): ?>
                    <?= $form->field($book, 'service', [
                        'template' => "<div class=\"col-xs-12 col-sm-12 col-md-4\"><div class=\"form-select\">{label}{input}{error}</div></div>",
                    ])->dropDownList(ArrayHelper::map($serviceService::getServiceItems(), 'name', 'name'), [
                        'class' => 'form-control',
                        'prompt' => 'Виберіть послугу'
                    ]) ?>
                    <?php endif;?>

                    <?=$form->field($book, 'date', [
                        'template' => "<div class=\"col-xs-12 col-sm-12 col-md-4\">{label}{input}{error}</div>",
                    ])->widget(
                        DateTimePicker::class,
                        [
                            'options' => ['placeholder' => ''],
                            'pluginOptions' => [
                                'autoclose' => true,
                            ],

                        ]); ?>



                    <?= $form->field($book, 'desires', [
                        'template' => "<div class=\"col-xs-12 col-sm-12 col-md-12\">{label}{input}{error}</div>",
                    ])->textarea([
                        'class' => 'form-control',
                        'rows' => 3,
                        'placeholder' => 'Додайте свої побажання',
                    ]) ?>


                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <?= Html::submitButton(
                            'Записатись', [
                                'class' => 'btn btn--secondary btn--rounded'
                            ]
                        ) ?>
                    </div>


                </div>
                <?php $form = ActiveForm::end(); ?>

            </div>

        </div>

    </div>

    <div class="divider--shape-1down"></div>
    </div>

</section>