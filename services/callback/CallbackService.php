<?php

namespace app\services\callback;

use app\models\Callback;
use app\repositories\callback\CallbackRepository;
use app\services\CoreService;
use app\models\CallbackSearch;

class CallbackService extends CoreService
{

    /**
     * @var Callback $modelClass
     */
    public static $modelClass = Callback::class;

    /**
     * @var string $searchClass
     */
    public static $searchClass = CallbackSearch::class;


    /**
     * @var CallbackRepository $repositoryClass
     */
    public static $repositoryClass = CallbackRepository::class;

    /**
     * @var CallbackRepository $repository
     */
    public $repository;



    /**
     * @var Callback $model
     */
    public static $model;




    /**
     * UserService constructor.
     * @param CallbackRepository $repository
     * @param array $config
     */
    public function __construct(CallbackRepository $repository, $config = [])
    {
        parent::__construct($repository);
        $this->repository = $repository;

    }

    /**
     * @return array
     */
    public static function getCarouselItems():array{
        return self::getRepository()->getModel(['is_published' => Callback::ACTIVE_CALLBACK])->all();
    }

    /**
     * @return bool
     */
    public static function hasCarouselItems():bool{
        return self::getRepository()->getModel(['is_published' => Callback::ACTIVE_CALLBACK])->exists();
    }

}