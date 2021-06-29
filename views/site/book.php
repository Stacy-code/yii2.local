<?php

/* @var $this yii\web\View */

/* @var $book app\models\Book */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Book';
$this->params['breadcrumbs'][] = $this->title;
?>

<section id="booking" class="booking bg-white">
    <div class="container">
         <div class="row clearfix">
             <div class="row">
                 <div class="col-12">
                     <?php if (Yii::$app->session->hasFlash('success')): ?>
                         <div class="alert alert-primary alert-dismissible fade show" role="alert">
                             <?php echo Yii::$app->session->getFlash('success'); ?>
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
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
                    <?= $form->field($book, 'name', [
                        'template' => "<div class=\"col-xs-12 col-sm-12 col-md-4\">{input}</div>",
                    ])->textInput([
                            'type' => 'text',
                        'class' => 'form-control',
                        'name' => 'name',
                        'id' => 'name',
                        'placeholder' => 'Введіть ім\'я',
                    ]) ?>


                    <?= $form->field($book, 'email', [
                        'template' => "<div class=\"col-xs-12 col-sm-12 col-md-4\">{input}</div>",
                    ])->textInput([
                        'type' => 'email',
                        'class' => 'form-control',
                        'name' => 'email',
                        'id' => 'email',
                        'placeholder' => 'Введіть електронну адресу',
                    ]) ?>

                    <?= $form->field($book, 'phone', [
                        'template' => "<div class=\"col-md-4\">{input}</div>",
                    ])->textInput([
                        'type' => 'text',
                        'class' => 'form-control',
                        'name' => 'phone',
                        'id' => 'phone',
                        'placeholder' => 'Введіть телефон',
                    ]) ?>


                    <?= $form->field($book, 'service', [
                        'template' => "<div class=\"col-xs-12 col-sm-12 col-md-4\"><div class=\"form-select\">{input}</div></div>",
                    ])->dropDownList([
                        '0' => 'Чоловіча стрижка',
                        '1' => 'Стрижка бороди',
                        '2' => 'Стрижка вусів',
                        '3' => 'Королівське гоління',
                        '4' => 'Чоловіча стрижка + борода',
                    ],[
                            'class' => 'form-control',
                        'name'=> 'service',
                        'prompt'=>'Виберіть послугу'
                    ],) ?>


                    <?= $form->field($book, 'date', [
                        'template' => "<div class=\"col-xs-12 col-sm-12 col-md-4\">{input}</div>",
                    ])->textInput([
                        'type' => 'datetime-local',
                        'class' => 'form-control',
                        'name' => 'date',
                        'id' => 'date',

                    ]) ?>

                    <?= $form->field($book, 'desires', [
                        'template' => "<div class=\"col-xs-12 col-sm-12 col-md-12\">{input}</div>",
                    ])->textarea([
                        'class' => 'form-control',
                        'name' => 'desires',
                        'id' => 'message',
                        'rows' => 3,
                        'placeholder' => 'Додайте свої побажання',
                    ]) ?>


                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <?= Html::submitButton(
                            'Записатись', [
                                'class' => 'btn btn--secondary btn--rounded'
                            ]
                        )?>
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

    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
            <div class="heading heading-2 mb-80">
                <p class="heading--desc">Резюмуючи вищесказане, якщо ви вирішили піти в барбершоп, то абсолютно точно
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
        <!-- .col-md-6 end -->
    </div>
    <!-- .row end -->
    <div class="divider--shape-1down"></div>
    </div>
    <!-- .container end -->
</section>