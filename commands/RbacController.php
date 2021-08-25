<?php
namespace app\commands;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        $permissionModuleAdmin = $auth->createPermission('accessModuleAdmin');
        $permissionModuleAdmin->description = 'Access to module admin';
        $auth->add($permissionModuleAdmin);


        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $permissionModuleAdmin);

        $manager = $auth->createRole('manager');
        $auth->add($manager);
        $auth->addChild($manager, $permissionModuleAdmin);
        //$auth->addChild($manager, $permissionModuleAdmin );



        // Назначение ролей пользователям. 1 и 2 это IDs возвращаемые IdentityInterface::getId()
        // обычно реализуемый в модели User.
        $auth->assign($admin, 1);
    }
}