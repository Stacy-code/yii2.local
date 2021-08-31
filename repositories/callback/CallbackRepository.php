<?php

namespace app\repositories\callback;


use app\models\Callback;
use app\repositories\AbstractRepository;
use Yii;
use yii\db\Transaction;

/**
 * Class UserRepository
 * @package app\repositories\user
 * @property Callback $model
 */
class CallbackRepository extends AbstractRepository
{
    /**
     * @var string $modelClass
     */
    public $modelClass = Callback::class;

    /**
     * @var Callback $entityModel
     */
    public $entityModel;

    /**
     * UserRepository constructor.
     * @param Callback $entity
     * @throws \yii\base\InvalidConfigException
     */
    public function __construct(Callback $entity)
    {
        parent::__construct($entity);
    }




}