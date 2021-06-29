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


    /**
     * @inheritDoc
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        //todo достать пользователя по токену
    }


    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    /**
     * @param string $email
     * @return Book|null
     */
     public static function findByBookEmail(string $email)
     {
          return static::findOne(['email' => $email]);
      }

    /**
     * @return $this|boolean
     */
      public function getBook()
      {

          if ($this->_book === false) {
             $this->_book = self::findByBookEmail($this->email);
          }

        return $this->_book;

      }
    /**
     * @return bool
     */
    public function book(): bool
    {

        if ($this->validate()) {

            return true;
        }
        Yii::$app->session->setFlash('error', 'Не правильно вказані дані!');
        return false;
    }


}