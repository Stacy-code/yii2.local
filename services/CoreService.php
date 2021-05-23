<?php


namespace app\services;

use Yii;
use yii\db\ActiveRecord;
use yii\base\BaseObject;
use app\models\SearchInterface;
use app\repositories\AbstractRepository;
use yii\data\ActiveDataProvider;

/**
 * Class CoreService
 *
 * @property AbstractRepository $repository
 * @property ActiveRecord       $filterModel
 * @property ActiveDataProvider $dataProvider
 */
class CoreService extends BaseObject implements CoreServiceInterface
{
    /**
     * @var self $instance
     */
    private static $instance;

    /**
     * @var ActiveRecord $modelClass
     */
    public static $modelClass;

    /**
     * @var ActiveRecord $searchClass
     */
    public static $searchClass;

    /**
     * @var AbstractRepository $repositoryClass
     */
    public static $repositoryClass;

    /**
     * @var AbstractRepository $repository
     */
    public $repository;

    /**
     * @var ActiveRecord $model
     */
    public static $model;

    /**
     * CoreService constructor.
     *
     * @param AbstractRepository $repository
     * @param array              $config
     */
    public function __construct(AbstractRepository $repository, $config = [])
    {
        parent::__construct($config);
        $this->repository = $repository;
        $this->setInstance($this);
    }

    /**
     * @param CoreService $service
     */
    private function setInstance(CoreService $service): void
    {
        self::$instance = $service;
    }

    /**
     * @return static
     */
    public static function getInstance(): self
    {
        $static = static::class;
        self::$instance = new $static(
            new static::$repositoryClass(new static::$modelClass())
        );
        return self::$instance;
    }

    /**
     * @return AbstractRepository
     */
    public static function getRepository(): AbstractRepository
    {
        return self::getInstance()->repository;
    }

    /**
     * @return ActiveRecord
     */
    public static function getFilterModel(): ActiveRecord
    {
        $filterModel = new static::$searchClass();
        $filterModel->load(Yii::$app->request->get());
        return $filterModel;
    }

    /**
     * @return ActiveDataProvider
     */
    public static function getDataProvider(): ActiveDataProvider
    {
        /** @var SearchInterface $filterModel */
        $filterModel = self::getFilterModel();
        return new ActiveDataProvider([
            'query' => $filterModel->search(
                Yii::$app->request->get()
            ),
            'pagination' => ['pageSize' => 10]
        ]);
    }

    /**
     * @param array $data
     *
     * @return array
     */
    public function create(array $data = []): array
    {
        $result = ['success' => false];
        if (!empty($data)) {
            $result = $this->repository->create($data);
            $result['msg'] = $result['success']
                ? 'Успешно сохранено' : 'Ошибка сохранения';

        }
        return array_merge($result, [
            'msg' => $result['success']
                ? 'Успешно сохранено' : 'Ошибка сохранения'
        ]);
    }

    /**
     * @param ActiveRecord|null $model
     * @param array             $data
     *
     * @return array
     */
    public function update(ActiveRecord $model = null, array $data = []): array
    {
        $result = ['success' => false];
        if (!empty($data)) {
            $result = $this->repository->update($model, $data);
        }
        return array_merge($result, [
            'msg' => $result['success']
                ? 'Успешно сохранено' : 'Ошибка сохранения'
        ]);
    }

    /**
     * @param array $condition
     *
     * @return array
     */
    public function delete(array $condition = []): array
    {
        $result = ['success' => false];
        if (!empty($condition)) {
            $deleteModel = $this->repository
                ->getModel($condition)->one();
            $result = $this->repository->delete($deleteModel);
        }
        return array_merge($result, [
            'msg' => $result['success']
                ? 'Успешно удалено' : 'Ошибка удаления'
        ]);
    }
}