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
 * @property string $email
 * @property string $phone
 * @property string $service
 * @property string $date
 * @property string $desires
 * @property string $status
 * @property string $created_at
 *
 *
 *
 */
class Book extends ActiveRecord
{
    /**
     * @var bool|self $_book
     */
    public $_book = false;

    /**
     * @return string
     * Назва таблиці
     */
    public static function tableName(): string
    {
        return '{{%book}}';
    }


    /**
     * @return array
     * Правила валідації
     */
    public function rules(): array
    {
        return [
            [['email'], 'email'],
            [['status'], 'default', 'value' => 'new'],
            [['name', 'phone', 'desires'], 'string'],
            [['date'], 'datetime', 'format' => 'php:Y-m-d H:i:s'],
            [['email', 'name', 'phone', 'date', 'service'], 'required'],
        ];
    }

    /**
     * @return array
     */
    public function scenarios(): array
    {
        $scenario['default'] = ['id' ,'email', 'name', 'phone', 'service','date','desires', 'status',  'created_at'];
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
            'name' => 'Ім\'я',
            'email' => 'Електронна адреса',
            'phone' => 'Телефон',
            'service' => 'Послуга',
            'date' => 'Дата',
            'desires' => 'Побажання',
            'status' => 'Статус',
            'created_at' => 'Дата створення',


        ];
    }







}