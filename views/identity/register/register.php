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
    <a href="<?= Url::to('/home') ?>"><i class="mdi mdi-home-variant h2 text-white"></i></a>
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
                                        <div>
                                            <a href="index.html" class="logo"><img src="assets/images/logo-dark.png" height="20" alt="logo"></a>
                                        </div>

                                        <h4 class="font-size-18 mt-4">Register account</h4>
                                        <p class="text-muted">Get your free Nazox account now.</p>
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
                                            'placeholder' => 'Enter email',
                                        ]) ?>

                                        <?= $form->field($model, 'name', [
                                            'template' => "<div class=\"auth-form-group-custom mb-4\"><i class=\"ri-user-2-line auti-custom-input-icon\"></i>{label}{input}</div>\n<div class=\"col-lg-12 text-danger\">{error}</div>",
                                        ])->textInput([
                                            'autofocus' => true,
                                            'class' => 'form-control',
                                            'placeholder' => 'Enter name',
                                        ]) ?>


                                        <?= $form->field($model, 'password', [
                                            'template' => "<div class=\"auth-form-group-custom mb-4\"><i class=\"ri-lock-2-line auti-custom-input-icon\"></i>{label}{input}</div>\n<div class=\"col-lg-12 text-danger\">{error}</div>",
                                        ])->passwordInput([
                                            'class' => 'form-control',
                                            'placeholder' => 'Enter password',
                                        ]) ?>

                                        <?= $form->field($model, 'passwordConfirm', [
                                            'template' => "<div class=\"auth-form-group-custom mb-4\"><i class=\"ri-lock-2-line auti-custom-input-icon\"></i>{label}{input}</div>\n<div class=\"col-lg-12 text-danger\">{error}</div>",
                                        ])->passwordInput([
                                            'class' => 'form-control',
                                            'placeholder' => 'Enter again password',
                                        ]) ?>

                                        <div class="mt-4 text-center">
                                            <?= Html::submitButton('Зареєструватися', ['class' => 'btn btn-primary w-md waves-effect waves-light', 'name' => 'login-button']) ?>
                                        </div>

                                            <div class="mt-4 text-center">
                                                <p class="mb-0">By registering you agree to the Nazox <a href="#" class="text-primary">Terms of Use</a></p>
                                            </div>
                                        <?php ActiveForm::end(); ?>
                                    </div>

                                    <div class="mt-5 text-center">
                                        <p>Already have an account ? <a href="<?= Url::to('/identity/login') ?>" class="font-weight-medium text-primary"> Login</a> </p>
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



