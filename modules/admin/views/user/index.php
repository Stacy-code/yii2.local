<?php
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\User */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\User;
use yii\helpers\Url;

?>

<?php if( Yii::$app->session->hasFlash('success') ): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>
<?php endif;?>

<div id="layout-wrapper">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Data Tables</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                    <li class="breadcrumb-item active">Data Tables</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Таблица пользователей</h4>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Имя</th>
                                        <th>Email</th>
                                        <th>Активен</th>
                                        <th>Дата регистрации</th>
                                        <th>Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php if (!empty($users)) : ?>
                                        <?php foreach ($users as $user) : ?>
                                            <tr>
                                                <th scope="row"><?= $user->id?></th>
                                                <td><?= $user->name ?></td>
                                                <td><?= $user->email ?></td>
                                                <td><?= $user->active?></td>
                                                <td><?= $user->created_at?></td>
                                                <td>
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Large button group">
                                                        <a class="btn btn-secondary mr-2 text-md " href="  ?id=<?= $user->id  ?>">Update</a>
                                                        <a class="btn btn-danger" href="<?= Url::to(['delete' , 'id' =>$user->id])?>"
                                                           data-handler="deleteRow" data-id="<?= $user->id?>">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr aria-colspan="5">
                                            <td colspan="5" class="text-center">Немає відгуків для відображення</td>
                                        </tr>
                                    <?php endif; ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function (){
        $(document).on('click' , '[data-handler="deleteRow"]' , function(e){
            e.preventDefault();
            var that = $(this) , url = that.attr('href'),
                id = that.data('id');
            if(typeof url === 'string' && url.length > 0){

                $.ajax({
                    method:'POST',
                    url:url,
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(response){
                        if(response.success){
                            var rowEl = that.closest('tr');
                            if(rowEl.length>0){
                                $(rowEl).remove();
                            }
                        }
                    }
                })

            }else {
                throw new Error('Attribute href must be set!');
            }


        })

    });
</script>
