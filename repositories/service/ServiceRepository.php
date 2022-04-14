<?php

namespace app\repositories\service;


use app\models\Service;
use app\repositories\AbstractRepository;

class ServiceRepository extends AbstractRepository
{

    /**
     * @var string $modelClass
     */
    public $modelClass = Service::class;

    /**
     * @var Service $entityModel
     */
    public $entityModel;

    /**
     * UserRepository constructor.
     * @param Service $entity
     * @throws \yii\base\InvalidConfigException
     */
    public function __construct(Service $entity)
    {
        parent::__construct($entity);
    }


}