<?php
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\Service */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use kartik\datetime\DateTimePicker;

?>

<div id="layout-wrapper">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Редагувати запис ID: <?=$model->id?></h4>

                                <?php $form = ActiveForm::begin(); ?>

                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <?=$form->field($model , 'name')->textInput(['value' => $model->name])?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <?=$form->field($model , 'price')->textInput(['value' => $model->price])?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <?=$form->field($model , 'description')->textInput(['value' => $model->description])?>
                                    </div>
                                </div>

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