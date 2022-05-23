<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_unit".
 *
 * @property string $ID_UNIT
 * @property string $ID_REGION
 * @property string|null $NAMA_UNIT
 * @property string|null $SINGKATAN
 * @property string|null $KETERANGAN
 *
 * @property DataPenggunaDetail[] $dataPenggunaDetails
 * @property DataRegion $rEGION
 */
class DataUnit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_unit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_UNIT', 'ID_REGION'], 'required'],
            [['KETERANGAN'], 'string'],
            [['ID_UNIT', 'ID_REGION'], 'string', 'max' => 8],
            [['NAMA_UNIT'], 'string', 'max' => 50],
            [['SINGKATAN'], 'string', 'max' => 10],
            [['ID_UNIT'], 'unique'],
            [['ID_REGION'], 'exist', 'skipOnError' => true, 'targetClass' => DataRegion::className(), 'targetAttribute' => ['ID_REGION' => 'ID_REGION']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_UNIT' => 'Id  Unit',
            'ID_REGION' => 'Id  Region',
            'NAMA_UNIT' => 'Nama  Unit',
            'SINGKATAN' => 'Singkatan',
            'KETERANGAN' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[DataPenggunaDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataPenggunaDetails()
    {
        return $this->hasMany(DataPenggunaDetail::className(), ['ID_UNIT' => 'ID_UNIT']);
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
}
