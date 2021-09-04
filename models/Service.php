<?php


namespace app\models;


use Yii;
use yii\db\ActiveRecord;


/**
 * Class Book
 * @package app\models
 *
 * @property int $id
 * @property string $name
 * @property integer $price
 * @property string $description
 *
 *
 *
 */
class Service extends ActiveRecord
{
    /**
     * @var bool|self $_service
     */
    public $_service = false;

    /**
     * @return string
     * Назва таблиці
     */
    public static function tableName(): string
    {
        return '{{%service}}';
    }


    /**
     * @return array
     * Правила валідації
     */
    public function rules(): array
    {
        return [
            [['name', 'description'], 'string'],
            [['name', 'price', 'description'], 'required'],
        ];
    }

    /**
     * @return array
     */
    public function scenarios(): array
    {
        $scenario['default'] = [ 'name', 'price', 'description'];
        return $scenario;
    }

    /**
     * @return array
     * Поля
     */
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'name' => 'Назва',
            'price' => 'Ціна',
            'description' => 'Опис',
        ];
    }







}