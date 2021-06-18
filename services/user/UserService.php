<?php

namespace app\services\user;

use app\models\User;
use app\repositories\user\UserRepository;
use app\services\CoreService;

class UserService extends CoreService
{
    /**
     * @var User $modelClass
     */
    public static $modelClass = User::class;

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
        parent::__construct($config);
        $this->repository = $repository;

    }

}