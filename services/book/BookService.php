<?php

namespace app\services\book;

use app\models\Book;
use app\repositories\book\BookRepository;
use app\services\CoreService;
use app\models\BookSearch;
use Yii;


class BookService extends CoreService
{

    /**
     * @var Book $modelClass
     */
    public static $modelClass = Book::class;

    /**
     * @var string $searchClass
     */
    public static $searchClass = BookSearch::class;


    /**
     * @var BookRepository $repositoryClass
     */
    public static $repositoryClass = BookRepository::class;

    /**
     * @var BookRepository $repository
     */
    public $repository;



    /**
     * @var Book $model
     */
    public static $model;




    /**
     * UserService constructor.
     * @param BookRepository $repository
     * @param array $config
     */
    public function __construct(BookRepository $repository, $config = [])
    {
        parent::__construct($repository);
        $this->repository = $repository;

    }

    /**
     * @return array
     */
    public function getSaveData():array{
        $normalData = Yii::$app->request->post();
        try {
            if(isset($normalData[$this->repository->getShortName()]['date'])){
                $date = $normalData[$this->repository->getShortName()]['date'];
                $normalData[$this->repository->getShortName()]['date'] = Yii::$app->formatter->asDate(
                    $date, "php:Y-m-d H:i:s"
                );
            }
        }
        catch(\Exception $e){
            Yii::error($e->getMessage());
        }

        return $normalData;
    }

}