<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aktivitas_pengguna".
 *
 * @property string $ID_AKTIVITAS
 * @property string $username
 * @property string|null $MODEL
 * @property string|null $KETERANGAN
 *
 * @property Datapengguna $username0
 */
class AktivitasPengguna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aktivitas_pengguna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_AKTIVITAS', 'username'], 'required'],
            [['KETERANGAN'], 'string'],
            [['ID_AKTIVITAS'], 'string', 'max' => 14],
            [['username'], 'string', 'max' => 255],
            [['MODEL'], 'string', 'max' => 50],
            [['ID_AKTIVITAS'], 'unique'],
            [['username'], 'exist', 'skipOnError' => true, 'targetClass' => Datapengguna::className(), 'targetAttribute' => ['username' => 'username']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_AKTIVITAS' => 'Id  Aktivitas',
            'username' => 'Username',
            'MODEL' => 'Model',
            'KETERANGAN' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[Username0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsername0()
    {
        return $this->hasOne(Datapengguna::className(), ['username' => 'username']);
    }
}
