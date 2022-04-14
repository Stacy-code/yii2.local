<?php

namespace app\services\service;

use app\models\Service;
use app\models\ServiceSearch;
use app\repositories\service\ServiceRepository;
use app\services\CoreService;
use Yii;

class ServiceService extends CoreService
{

    /**
     * @var Service $modelClass
     */
    public static $modelClass = Service::class;

    /**
     * @var string $searchClass
     */
    public static $searchClass = ServiceSearch::class;

    /**
     * @var ServiceRepository $repositoryClass
     */
    public static $repositoryClass = ServiceRepository::class;

    /**
     * @var ServiceRepository $repository
     */
    public $repository;



    /**
     * @var Service $model
     */
    public static $model;




    /**
     * UserService constructor.
     * @param ServiceRepository $repository
     * @param array $config
     */
    public function __construct(ServiceRepository $repository, $config = [])
    {
        parent::__construct($repository);
        $this->repository = $repository;

    }

//    /**
//     * @return Service|null
//     */
//    public function getProfileModel(): ?Service
//    {
//
//        self::$model = $this->repository->getModel()
//            ->where(['id' => Yii::$app->user->id])->one();
//        return self::$model instanceof Service
//            ? self::$model : null;
//    }

    /**
     * @return array
     */
    public static function getServiceItems():array{
        return self::getRepository()->getModel()->all();
    }

    /**
     * @return bool
     */
    public static function hasServiceItems():bool{
        return self::getRepository()->getModel()->exists();
    }

}