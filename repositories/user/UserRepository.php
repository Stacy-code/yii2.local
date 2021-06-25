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

    public function processDelete(): array
    {
        $result = [
            'success' => false,
        ];
        try {
            $result['success'] = true;
            $this->entityModel->delete();

        } catch (\Exception $e) {
            $result['success'] = false;
        }
        return $result;
    }

    public function processUpdate(): array
    {
        $result = [
            'success' => false,
        ];
        try {
            $result['success'] = true;
            $this->entityModel->update();

        } catch (\Exception $e) {
            $result['success'] = false;
        }
        return $result;
    }


}