<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%callback}}".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string|null $message
 * @property int $is_published
 * @property string|null $created_at
 */
class Callback extends \yii\db\ActiveRecord
{

    /**
     * @var bool|self $_callback
     */
    public $_callback = false;


    /**
     * @var int ACTIVE_CALLBACK
     */
    public const ACTIVE_CALLBACK = 1;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%callback}}';
    }

    /**
     * @return array
     */
    public function scenarios(): array
    {
        $scenario['default'] = ['id' ,'name', 'email', 'phone', 'message','is_published','created_at'];
        return $scenario;
    }
    /**
     * {@inheritdoc}
     */
    public function rules():array
    {
        return [
            [['is_published'], 'default', 'value' => 0],
            [['name', 'email', 'phone', 'message'], 'required'],
            [['is_published'], 'integer'],
            [['created_at'], 'safe'],
            [['name', 'email', 'phone'], 'string', 'max' => 255],
            [['message'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels():array
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'message' => 'Message',
            'is_published' => 'Is Published',
            'created_at' => 'Created At',
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
     * @param string $email
     * @return Callback|null
     */
    public static function findByCallbackEmail(string $email)
    {
        return static::findOne(['email' => $email, 'is_published' => self::ACTIVE_CALLBACK]);
    }

    /**
     * @return $this|boolean
     */
    public function getCallback()
    {

        if ($this->_callback === false) {
            $this->_callback = self::findByCallbackEmail($this->email);
        }

        return $this->_callback;

    }
    /**
     * @return bool
     */
    public function callback(): bool
    {

        if ($this->validate()&& $this->getCallback()) {

            return true;
        }
        Yii::$app->session->setFlash('error', 'Не правильно вказані дані!');
        return false;
    }

}
