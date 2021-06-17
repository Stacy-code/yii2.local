<?php


namespace app\models;


use Yii;
use yii\base\Exception;
use yii\db\ActiveRecord;
use yii\db\mssql\PDO;
use yii\web\IdentityInterface;

/**
 * Class User
 * @package app\models
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $auth_key
 * @property string $reset_key
 * @property int $active
 * @property string $created_at
 * @property string $updated_at
 *
 *
 *
 */
class User extends ActiveRecord implements IdentityInterface
{

    /**
     * @var string LOGIN_SCENARIO
     */
    public const LOGIN_SCENARIO = 'login';
    public const REGISTER_SCENARIO = 'register';

    /**
     * @var int ACTIVE_USER
     */
    public const ACTIVE_USER = 1;

    /**
     * @var bool $rememberMe
     */
    public $rememberMe = true;

    /**
     * @var string $passwordConfirm
     */
    public $passwordConfirm;

    /**
     * @var bool|self $_user
     */
    public $_user = false;

    /**
     * @return string
     * Назва таблиці
     */
    public static function tableName(): string
    {
        return '{{%user}}';
    }


    /**
     * @return array
     * Правила валідації
     */
    public function rules(): array
    {
        return [
            [['active'], 'integer'],
            [['email'], 'email'],
            [['active'], 'default', 'value' => 1],
            [['email', 'password', 'auth_key'], 'string', 'max' => 255],
            [['email', 'password'], 'required', 'on' => self::LOGIN_SCENARIO],
            [['email', 'name', 'password', 'passwordConfirm'], 'required', 'on' => self::REGISTER_SCENARIO],
            [['name', 'auth_key', 'reset_key', 'active', 'rememberMe'], 'safe', 'on' => self::LOGIN_SCENARIO],
            [['auth_key', 'reset_key', 'active'], 'safe', 'on' => self::REGISTER_SCENARIO],
            ['passwordConfirm', 'compare', 'compareAttribute' => 'password' ,'on' => self::REGISTER_SCENARIO],
        ];
    }

    /**
     * @return array
     * Поля
     */
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'passwordConfirm' => 'Confirmed password',
            'auth_key' => 'Auth key',
            'reset_key' => 'Reset key',
            'active' => 'Active',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at'

        ];
    }

    /**
     * @return array
     */
    public function scenarios(): array
    {
        $scenario = parent::scenarios();
        $scenario[self::LOGIN_SCENARIO] = [
            'email', 'password'
        ];
        $scenario[self::REGISTER_SCENARIO] = [
            'email', 'name', 'password', 'passwordConfirm', 'active'
        ];
        return $scenario;
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
     * @return User|null
     */
    public static function findByUserEmail(string $email)
    {
        return static::findOne(['email' => $email, 'active' => self::ACTIVE_USER]);
    }

    /**
     * @return $this|boolean
     */
    public function getUser()
    {

        if ($this->_user === false) {
            $this->_user = self::findByUserEmail($this->email);
        }

        return $this->_user;

    }

    /**
     * Get user password hash
     *
     * @param string|null $email
     *
     * @return string|null
     */
    public function getHash(string $email = null): ?string
    {
        $hash = self::find()->select('password')->where([
            'email' => $email,
            'active' => self::ACTIVE_USER
        ])->asArray()->one();
        return $hash['password'];
    }

    /**
     * Validate login password
     *
     * @param string $password
     *
     * @return boolean
     */
    public function validatePassword(string $password): bool
    {
        return Yii::$app->security->validatePassword($password, $this->getHash($this->email));
    }

    /**
     * @throws Exception
     * Генерирует ключ
     */
    public function generateAuthKey(): void
    {
        $this->auth_key = Yii::$app->security->generateRandomString(32);
    }


    /**
     * @return bool
     * @throws Exception
     */
    public function register(): bool
    {
        $this->scenario = 'register';


        if ($this->validate()) {
            $this->password = Yii::$app->security->generatePasswordHash($this->password);
            return $this->save(false);
        }

        return false;
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool
     * @throws Exception
     */
    public function login(): bool
    {
        $this->scenario = 'login';
        if ($this->validate() && $this->getUser() && $this->validatePassword($this->password)) {

            if ($this->rememberMe) {
                $user = $this->getUser();
                $user->generateAuthKey();
                $user->save();
            }
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
        }
        Yii::$app->session->setFlash('error', 'Не верный логин или пароль!');
        return false;
    }



}