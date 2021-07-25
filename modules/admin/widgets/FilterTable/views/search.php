<?php

/**
 * @var $this View
 * @var $fields array
 * @var $searchModel SearchInterface
 */

use app\models\SearchInterface;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;


?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <?php $form = ActiveForm::begin(['enableClientValidation'=>false, 'method' => 'get']); ?>
                <div class="form-group row">
                <?php

                foreach ($fields as $field){
                    echo $this->render('fields/'.$field['type'], [
                        'form' => $form,
                        'searchModel' => $searchModel,
                        'field' => $field,

                    ]);
                }
                ?>
                </div>

                <div class="form-group row">
                    <div class="col-md-10">
                        <?= Html::submitButton(
                            'Search', [
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