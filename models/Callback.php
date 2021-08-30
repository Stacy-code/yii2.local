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
            'name' => 'Ім\'я',
            'email' => 'Пошта',
            'phone' => 'Телефон',
            'message' => 'Відгук',
            'is_published' => 'Is Published',
            'created_at' => 'Created At',
        ];
    }





}
