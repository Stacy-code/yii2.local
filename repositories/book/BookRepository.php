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

        $result = ['success' => false];
        $this->entityModel->load($this->dataPost);
        if ($this->entityModel->validate()) {
            /**
             * @var Transaction $transaction
             */
            $transaction = Yii::$app->db->beginTransaction();
            try {

                $result['success'] = true;
                $this->entityModel->save();
                $transaction->commit();

            } catch (\Exception $e) {
                $transaction->rollBack();
                $result['success'] = false;
            }
        }else{
            $result['errors'] = $this->entityModel->getErrors();
        }
        return $result;
    }


    public function processSave(): array
    {

        $result = ['success' => false];
        $this->entityModel->load($this->dataPost);
        if ($this->entityModel->validate()) {
            /**
             * @var Transaction $transaction
             */
            $transaction = Yii::$app->db->beginTransaction();
            try {

                $result['success'] = true;
                $this->entityModel->save();
                $transaction->commit();

            } catch (\Exception $e) {
                $transaction->rollBack();
                $result['success'] = false;
            }
        }else{
            $result['errors'] = $this->entityModel->getErrors();
        }

        return $result;
    }


}