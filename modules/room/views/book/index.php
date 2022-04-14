<?php
use app\modules\admin\widgets\FilterTable\FilterTableWidget;
use yii\grid\GridView;
use yii\helpers\Url;
?>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php

                if (Yii::$app->session->hasFlash('success')): ?>
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <?php echo Yii::$app->session->getFlash('success'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <section id="service2" class="services services-1 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="heading text--center mb-70">
                            <h2 class="heading--title">Ваші записи:</h2>
                            <div class="divider--line"></div>
                        </div>
                    </div>

                </div>
                <div class="col-12">


                    <a class="btn btn--rounded btn--secondary mr-2 text-md "
                       href="<?= Url::to(['/site/book']) ?>">Створити</a>
                </div>
            </div>
            <!-- .container end -->
        </section>


        <?= FilterTableWidget::widget([
            'service' => $this->context->service,
            'fields' => [
                [
                    'type' => 'text',
                    'attribute'  => 'name',
                    'col' => 'col-md-2',
                ]
                ,
                [
                    'type' => 'text',
                    'attribute'  => 'email',
                    'col' => 'col-md-2',
                ]
                ,
                [
                    'type' => 'text',
                    'attribute'  => 'phone',
                    'col' => 'col-md-2',
                ]
                ,
                [
                    'type' => 'text',
                    'attribute'  => 'service',
                    'col' => 'col-md-2',
                ]
                ,
                [
                    'type' => 'text',
                    'attribute'  => 'status',
                    'col' => 'col-md-1',
                ]
            ]
        ])?>

        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Таблица записів</h4>
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],
                                // Обычные поля определенные данными содержащимися в $dataProvider.
                                // Будут использованы данные из полей модели.
                                'name',
                                'email',
                                'phone',
                                'service',
                                'date',
                                'desires',
                                'status', //сделать выпадающий список
                                'created_at',


                                [
                                    'attribute' => null,
                                    'format' => 'raw',
                                    'header' => 'Дії',
                                    'class' => 'yii\grid\DataColumn', // может быть опущено, поскольку является значением по умолчанию
                                    'value' => function ($model) {
                                        $columnView = null;

                                        $columnView = '<div class="btn--group" role="group"
                                                         aria-label="Large button group">
                                                        <a class="btn btn--secondary btn--rounded mr-2 text-md" style="margin: 5px"
                                                           href="'. Url::to(['book/update', 'id' => $model->id]) .'">Update</a>
                                                        <a class="btn btn--rounded btn-danger " style="margin: 5px"
                                                           href="'. Url::to(['delete', 'id' => $model->id]) .'"
                                                           data-handler="deleteRow"
                                                           data-id="'. $model->id .'">Delete</a>
                                                    </div>';




                                        return $columnView;
                                    },
                                ],
                            ],
                        ]); ?>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container-fluid -->

