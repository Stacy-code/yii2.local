<?php
/* @var $form yii\bootstrap\ActiveForm */

/* @var $callback app\models\Callback */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\Callback;
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
                                        <?=$form->field($callback , 'name')?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <?=$form->field($callback , 'email')?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <?=$form->field($callback , 'phone')?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <?=$form->field($callback , 'message')?>
                                    </div>
                                </div>



                                <?= $form->field($callback, 'is_published', [
                                    'template' => "<div class=\"form-group row\"><div class=\"col-md-10\">{label}{input}{error}</div></div>",
                                ])->dropDownList([
                                    '0' => '0',
                                    '1' => '1',

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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>