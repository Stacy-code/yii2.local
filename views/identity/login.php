<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\User */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\User;
use yii\helpers\Url;

?>


<div class="home-btn d-none d-sm-block">
    <a href="<?= Url::to('/') ?>"><i class="mdi mdi-home-variant h2 text-white"></i></a>
</div>
<div>
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-4">
                <div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
                    <div class="w-100">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <div>
                                    <div class="text-center">

                                        <h4 class="font-size-18 mt-4">Увійти</h4>
                                        <p class="text-muted">Раді вітати вас в Omen barbershop!</p>
                                    </div>

                                    <div class="p-2 mt-5">
                                        <?php $form = ActiveForm::begin([
                                            'id' => 'login-form',
                                            'layout' => 'horizontal',
                                            'options' => ['class' => 'form-horizontal'],
                                            'fieldConfig' => [
                                                //'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                                                'labelOptions' => ['class' => 'control-label'],
                                            ],
                                        ]); ?>

                                        <?= $form->field($model, 'email', [
                                            'template' => "<div class=\"auth-form-group-custom mb-4\"><i class=\"ri-mail-line auti-custom-input-icon\"></i>{label}{input}</div>\n<div class=\"col-lg-12 text-danger\">{error}</div>",
                                        ])->textInput([
                                            'autofocus' => true,
                                            'class' => 'form-control',
                                            'placeholder' => 'Введіть електронну адресу',
                                        ]) ?>

                                        <?= $form->field($model, 'password', [
                                            'template' => "<div class=\"auth-form-group-custom mb-4\"><i class=\"ri-lock-2-line auti-custom-input-icon\"></i>{label}{input}</div>\n<div class=\"col-lg-12 text-danger\">{error}</div>",
                                        ])->passwordInput([
                                            'class' => 'form-control',
                                            'placeholder' => 'Введіть пароль',
                                        ]) ?>


                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                   id="rememberMe"  name="User[rememberMe]">
                                            <label class="custom-control-label" for="rememberMe">Запам'ятати мене
                                                </label>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <?= Html::submitButton('Увійти', ['class' => 'btn btn-primary w-md waves-effect waves-light', 'name' => 'login-button']) ?>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <a href="auth-recoverpw.html" class="text-muted"><i
                                                        class="mdi mdi-lock mr-1"></i>Забули пароль?</a>
                                        </div>
                                        <?php ActiveForm::end(); ?>
                                    </div>

                                    <div class="mt-5 text-center">
                                        <p>Не маєте облікового запису? <a href="<?= Url::to('/identity/register') ?>"
                                                                      class="font-weight-medium text-primary">
                                                Зареєструватися </a></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="authentication-bg">
                    <div class="bg-overlay"></div>
                </div>
            </div>
        </div>
    </div>
</div>