<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_pengguna_detail".
 *
 * @property string $ID_PENGGUNA_DETAIL
 * @property string $ID_PENGGUNA
 * @property string $ID_REGION
 * @property string $ID_UNIT
 * @property string|null $JENIS_PEKERJAAN
 *
 * @property Datapengguna $pENGGUNA
 * @property DataRegion $rEGION
 * @property DataUnit $uNIT
 */
class DataPenggunaDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_pengguna_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_PENGGUNA_DETAIL', 'ID_PENGGUNA', 'ID_REGION', 'ID_UNIT'], 'required'],
            [['ID_PENGGUNA_DETAIL', 'ID_PENGGUNA', 'ID_REGION', 'ID_UNIT'], 'string', 'max' => 8],
            [['JENIS_PEKERJAAN'], 'string', 'max' => 255],
            [['ID_PENGGUNA_DETAIL'], 'unique'],
            [['ID_PENGGUNA'], 'exist', 'skipOnError' => true, 'targetClass' => Datapengguna::className(), 'targetAttribute' => ['ID_PENGGUNA' => 'ID_PENGGUNA']],
            [['ID_UNIT'], 'exist', 'skipOnError' => true, 'targetClass' => DataUnit::className(), 'targetAttribute' => ['ID_UNIT' => 'ID_UNIT']],
            [['ID_REGION'], 'exist', 'skipOnError' => true, 'targetClass' => DataRegion::className(), 'targetAttribute' => ['ID_REGION' => 'ID_REGION']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_PENGGUNA_DETAIL' => 'Id  Pengguna  Detail',
            'ID_PENGGUNA' => 'Id  Pengguna',
            'ID_REGION' => 'Id  Region',
            'ID_UNIT' => 'Id  Unit',
            'JENIS_PEKERJAAN' => 'Jenis  Pekerjaan',
        ];
    }

    /**
     * Gets query for [[PENGGUNA]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPENGGUNA()
    {
        return $this->hasOne(Datapengguna::className(), ['ID_PENGGUNA' => 'ID_PENGGUNA']);
    }

    /**
     * Gets query for [[REGION]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getREGION()
    {
        return $this->hasOne(DataRegion::className(), ['ID_REGION' => 'ID_REGION']);
    }

    /**
     * Gets query for [[UNIT]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUNIT()
    {
        return $this->hasOne(DataUnit::className(), ['ID_UNIT' => 'ID_UNIT']);
    }
}
