<?php
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\Service */

use app\modules\admin\widgets\FilterTable\FilterTableWidget;
use yii\grid\GridView;
use yii\helpers\Url;

?>

<div id="layout-wrapper">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
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
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Data Tables</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Таблиці</a></li>
                                    <li class="breadcrumb-item active">Таблиця даних</li>
                                </ol>
                            </div>


                        </div>

                        <a class="btn btn-primary mr-2 text-md "
                           href="<?= Url::to(['service/create']) ?>">Додати послугу</a>
                    </div>
                </div>

                <?= FilterTableWidget::widget([
                    'service' => $this->context->service,

                    'fields' => [
                        [
                            'type' => 'text',
                            'attribute' => 'id',
                            'col' => 'col-md-1',
                        ],
                        [
                            'type' => 'text',
                            'attribute' => 'name',
                            'col' => 'col-md-2',
                        ]
                        ,
                        [
                            'type' => 'int',
                            'attribute' => 'price',
                            'col' => 'col-md-2',
                        ]

                    ]
                ]) ?>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Таблиця послуг</h4>
                                <?= GridView::widget([
                                    'dataProvider' => $dataProvider,
                                    'columns' => [
                                        ['class' => 'yii\grid\SerialColumn'],
                                        // Обычные поля определенные данными содержащимися в $dataProvider.
                                        // Будут использованы данные из полей модели.
                                        'id',
                                        'name',
                                        'price',
                                        'description',


                                        [
                                            'attribute' => null,
                                            'format' => 'raw',
                                            'header' => 'Дії',
                                            'class' => 'yii\grid\DataColumn', // может быть опущено, поскольку является значением по умолчанию
                                            'value' => function ($model) {
                                                $columnView = null;
                                                $columnView = '<div class="btn-group btn-group-sm" role="group"
                                                         aria-label="Large button group">
                                                        <a class="btn btn-secondary mr-2 text-md "
                                                           href="' . Url::to(['service/update', 'id' => $model->id]) . '">Редагувати</a>
                                                        <a class="btn btn-danger"
                                                           href="' . Url::to(['delete', 'id' => $model->id]) . '"
                                                           data-handler="deleteRow"
                                                           data-id="' . $model->id . '">Видалити</a>
                                                    </div>';


                                                return $columnView;
                                            },
                                        ],
                                    ],
                                ]); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
