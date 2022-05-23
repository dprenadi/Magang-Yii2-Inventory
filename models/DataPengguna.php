<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datapengguna".
 *
 * @property string $ID_PENGGUNA
 * @property string $username
 * @property string $password
 * @property string|null $NAMA_PENGGUNA
 * @property string|null $JABATAN_PENGGUNA
 * @property string|null $ALAMAT_PENGGUNA
 * @property string|null $NO_TELP_PENGGUNA
 * @property string|null $EMAIL_PENGGUNA
 * @property string|null $JENIS_USER
 * @property string|null $STATUS_USER
 * @property string $accessToken
 * @property string $authKey
 *
 * @property AktivitasPengguna[] $aktivitasPenggunas
 * @property DataPenggunaDetail[] $dataPenggunaDetails
 */
class Datapengguna extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'datapengguna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_PENGGUNA', 'username', 'password', 'accessToken', 'authKey'], 'required'],
            [['ALAMAT_PENGGUNA'], 'string'],
            [['ID_PENGGUNA'], 'string', 'max' => 8],
            [['username', 'password', 'NAMA_PENGGUNA', 'JABATAN_PENGGUNA', 'NO_TELP_PENGGUNA', 'EMAIL_PENGGUNA'], 'string', 'max' => 255],
            [['JENIS_USER', 'STATUS_USER'], 'string', 'max' => 1],
            [['accessToken', 'authKey'], 'string', 'max' => 50],
            [['ID_PENGGUNA'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_PENGGUNA' => 'Id  Pengguna',
            'username' => 'Username',
            'password' => 'Password',
            'NAMA_PENGGUNA' => 'Nama  Pengguna',
            'JABATAN_PENGGUNA' => 'Jabatan  Pengguna',
            'ALAMAT_PENGGUNA' => 'Alamat  Pengguna',
            'NO_TELP_PENGGUNA' => 'No  Telp  Pengguna',
            'EMAIL_PENGGUNA' => 'Email  Pengguna',
            'JENIS_USER' => 'Jenis  User',
            'STATUS_USER' => 'Status  User',
            'accessToken' => 'Access Token',
            'authKey' => 'Auth Key',
        ];
    }
    public static function findIdentity($ID_PENGGUNA) 
    {
        return self::findOne($ID_PENGGUNA);
    }
 
    public static function findIdentityByAccessToken($token, $userType = null) 
    {
        return self::findOne(['accessToken' => $token]);
    }
 
    public static function findByUsername($username) 
    {
        return self::findOne(['username' => $username]);
    }
 
    
    public function getId() 
    {
        return $this->ID_PENGGUNA;
    }
 
    public function getAuthKey() 
    {
        return $this->authKey;
    }
 

    public function validateAuthKey($authKey) 
    {
        return $this->authKey === $authKey;
    }
 
    public function validatePassword($password) 
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->password);
        // return $this->password ===  ($password);
    }

    /**
     * Gets query for [[AktivitasPenggunas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAktivitasPenggunas()
    {
        return $this->hasMany(AktivitasPengguna::className(), ['username' => 'username']);
    }

    /**
     * Gets query for [[DataPenggunaDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataPenggunaDetails()
    {
        return $this->hasMany(DataPenggunaDetail::className(), ['ID_PENGGUNA' => 'ID_PENGGUNA']);
    }
}
