<?php
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\User */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\User;
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

                                <h4 class="card-title">Редагувати запис ID: <?=$user->id?></h4>

                                <?php $form = ActiveForm::begin(); ?>

                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <?=$form->field($user , 'name')->textInput(['value' => $user->name])?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10">
                                        <?=$form->field($user , 'email')->textInput([
                                                'value' => $user->email,
                                        ])?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10">
                                       <?=$form->field($user , 'active')->textInput(['value' => $user->active])?>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>