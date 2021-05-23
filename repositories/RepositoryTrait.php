<?php


namespace app\repositories;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\base\InvalidConfigException;

/**
 * Trait RepositoryTrait
 *
 * @package app\repositories
 */
trait RepositoryTrait
{
    /**
     * @var ActiveQuery $query
     */
    private $query;

    /**
     * @var ActiveRecord
     */
    protected $entity;

    /**
     * @var ActiveRecord $modelClass
     */
    public $modelClass;

    /**
     * @var array $dataPost
     */
    public $dataPost = [];

    /**
     * @var ActiveRecord|null
     */
    public $entityModel;

    /**
     * @var string $processType
     */
    public $processType;

    /**
     * AbstractRepository constructor.
     *
     * @param ActiveRecord $entity
     *
     * @throws InvalidConfigException
     */
    public function __construct(ActiveRecord $entity)
    {
        if ($entity instanceof ActiveRecord) {
            $this->entity = $entity;
            $this->initRepository();
        } else {
            throw new InvalidConfigException('Model class must be load..');
        }
    }

    /**
     * Init repository query
     */
    private function initRepository(): void
    {
        $this->query = $this->entity::find();
    }
}
