<?php

namespace app\services\book;

use app\models\Book;
use app\repositories\book\BookRepository;
use app\services\CoreService;
use app\models\BookSearch;

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

}