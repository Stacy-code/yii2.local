<?php
/* @var $form yii\bootstrap\ActiveForm */

/* @var $book app\models\Book */

/* @var $service Service */

/* @var $serviceService ServiceService */

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\Book;
use yii\helpers\Url;
use kartik\datetime\DateTimePicker;
use app\services\service\ServiceService;
use app\models\Service;

?>

<div id="layout-wrapper">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Редагувати запис ID: <?=$book->id?></h4>

                                <?php $form = ActiveForm::begin(); ?>

                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <?=$form->field($book , 'name')->textInput(['value' => $book->name])?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <?=$form->field($book , 'email')->textInput(['value' => $book->email])?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <?=$form->field($book , 'phone')->textInput(['value' => $book->phone])?>
                                    </div>
                                </div>



                                <?php if ($serviceService::hasServiceItems()): ?>
                                <?= $form->field($book, 'service', [
                                    'template' => "<div class=\"form-group row\"><div class=\"col-md-10\">{label}{input}{error}</div></div>",
                                ])->dropDownList(ArrayHelper::map($serviceService::getServiceItems(), 'name', 'name'),[
                                    'class' => 'form-control',
                                    'prompt'=>'Виберіть послугу'
                                ]) ?>
                                <?php endif;?>

                                <?=$form->field($book, 'date', [
                                    'template' => "<div class=\"form-group row\"><div class=\"col-md-10\">{label}{input}{error}</div></div>",
                                ])->widget(
                                    DateTimePicker::class,
                                    [
                                        'size'=>'md',
                                        'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
                                        'convertFormat' => true,
                                        'pluginOptions' => [
                                            'todayHighlight' => true,
                                            'todayBtn' => true,
                                            'format' => 'dd-M-yyyy H:i',
                                            'autoclose' => true,
                                            'startDate'=> date('d-m-Y H:i'),
                                        ],
                                        'bsVersion' => '4.x',
                                    ]) ?>


                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <?=$form->field($book , 'desires')->textInput(['value' => $book->desires])?>
                                    </div>
                                </div>

                                <?= $form->field($book, 'status', [
                                    'template' => "<div class=\"form-group row\"><div class=\"col-md-10\">{label}{input}{error}</div></div>",
                                ])->dropDownList([
                                    'Новий' => 'Новий',
                                    'В прогресі' => 'В прогресі',
                                    'Вирішено' => 'Вирішено',
                                    'Провалено' => 'Провалено',

                                ],[
                                    'class' => 'form-control',
                                    'prompt'=>'Виберіть статус'
                                ],) ?>

                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <?= Html::submitButton(
                                            'Зберегти', [
                                                'class' => 'btn btn-secondary mr-2 '
                                            ]
                                        )?>
                                    </div>
                                </div>

                                <?php $form = ActiveForm::end(); ?>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
            </div> <!-- container-fluid -->
        </div>
    </div>
</div>