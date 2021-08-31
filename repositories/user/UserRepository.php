<?php

namespace app\repositories\user;


use app\models\User;
use app\repositories\AbstractRepository;

/**
 * Class UserRepository
 * @package app\repositories\user
 * @property User $model
 */
class UserRepository extends AbstractRepository
{
    /**
     * @var string $modelClass
     */
    public $modelClass = User::class;

    /**
     * @var User $entityModel
     */
    public $entityModel;

    /**
     * UserRepository constructor.
     * @param User $entity
     * @throws \yii\base\InvalidConfigException
     */
    public function __construct(User $entity)
    {
        parent::__construct($entity);
    }




}