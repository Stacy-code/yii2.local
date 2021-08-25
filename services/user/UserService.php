<?php

namespace app\services\user;

use app\models\User;
use app\models\UserSearch;
use app\repositories\user\UserRepository;
use app\services\CoreService;
use Yii;

class UserService extends CoreService
{

    /**
     * @var User $modelClass
     */
    public static $modelClass = User::class;

    /**
     * @var string $searchClass
     */
    public static $searchClass = UserSearch::class;

    /**
     * @var UserRepository $repositoryClass
     */
    public static $repositoryClass = UserRepository::class;

    /**
     * @var UserRepository $repository
     */
    public $repository;



    /**
     * @var User $model
     */
    public static $model;




    /**
     * UserService constructor.
     * @param UserRepository $repository
     * @param array $config
     */
    public function __construct(UserRepository $repository, $config = [])
    {
        parent::__construct($repository);
        $this->repository = $repository;

    }

    /**
     * @return User|null
     */
    public function getProfileModel(): ?User
    {
        self::$model = $this->repository->getModel()
            ->where(['id' => Yii::$app->user->id])->one();
        return self::$model instanceof User
            ? self::$model : null;
    }
}