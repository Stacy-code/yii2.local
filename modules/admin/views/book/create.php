<?php
/* @var $form yii\bootstrap\ActiveForm */

/* @var $book app\models\Book */

use kartik\datetime\DateTimePicker;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\Book;
use yii\helpers\Url;

?>

<div id="layout-wrapper">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Створити запис:</h4>

                                <?php $form = ActiveForm::begin(); ?>

                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <?=$form->field($book , 'name')?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <?=$form->field($book , 'email')?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <?=$form->field($book , 'phone')?>
                                    </div>
                                </div>

                                <?= $form->field($book, 'service', [
                                    'template' => "<div class=\"form-group row\"><div class=\"col-md-10\">{label}{input}{error}</div></div>",
                                ])->dropDownList([
                                    'Чоловіча стрижка' => 'Чоловіча стрижка',
                                    'Стрижка бороди' => 'Стрижка бороди',
                                    'Стрижка вусів' => 'Стрижка вусів',
                                    'Королівське гоління' => 'Королівське гоління',
                                    'Чоловіча стрижка + борода' => 'Чоловіча стрижка + борода',
                                ],[
                                    'class' => 'form-control',
                                    'prompt'=>'Виберіть послугу'
                                ],) ?>

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
                                    ])?>

                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <?=$form->field($book , 'desires')?>
                                    </div>
                                </div>

                                <?= $form->field($book, 'status', [
                                    'template' => "<div class=\"form-group row\"><div class=\"col-md-10\">{label}{input}{error}</div></div>",
                                ])->dropDownList([
                                    'new' => 'new',
                                    'in progress' => 'in progress',
                                    'done' => 'done',
                                    'failed' => 'failed',

                                ],[
                                    'class' => 'form-control',
                                    'prompt'=>'Виберіть статус'
                                ],) ?>

                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <?= Html::submitButton(
                                            'save', [
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