<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */

/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $name;
?>

<div class="my-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center my-5">
                    <h1 class="font-weight-bold text-error"><?= $exception->statusCode ?></h1>

                    <h3 class="text-uppercase"><?= nl2br(Html::encode($message)) ?></h3>
                    <div class="mt-5 text-center">
                        <a class="btn btn-primary waves-effect waves-light" href="<?=Url::to('dashboard/index');?>">Back to Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
