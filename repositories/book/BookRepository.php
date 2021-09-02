<?php

namespace app\repositories\book;


use app\models\Book;
use app\repositories\AbstractRepository;
use Yii;
use yii\db\Transaction;

/**
 * Class UserRepository
 * @package app\repositories\user
 * @property Book $model
 */
class BookRepository extends AbstractRepository
{
    /**
     * @var string $modelClass
     */
    public $modelClass = Book::class;

    /**
     * @var Book $entityModel
     */
    public $entityModel;



    /**
     * UserRepository constructor.
     * @param Book $entity
     * @throws \yii\base\InvalidConfigException
     */
    public function __construct(Book $entity)
    {
        parent::__construct($entity);
    }





}