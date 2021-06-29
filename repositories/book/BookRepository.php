<?php

namespace app\repositories\book;


use app\models\Book;
use app\repositories\AbstractRepository;

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


    public function processSave(): array
    {

        $result = ['success' => false];
        try {
            $this->entityModel->load($this->dataPost);

            if ($this->entityModel->validate()) {

                $result['success'] = true;
                $this->entityModel->save();

            }

        } catch (\Exception $e) {
            $result['success'] = false;
        }

        return $result;
    }


}