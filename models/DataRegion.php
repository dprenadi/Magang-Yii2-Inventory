<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_region".
 *
 * @property string $ID_REGION
 * @property string|null $NAMA_REGION
 * @property string|null $KETERANGAN
 *
 * @property DataPenggunaDetail[] $dataPenggunaDetails
 * @property DataUnit[] $dataUnits
 */
class DataRegion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_region';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_REGION'], 'required'],
            [['KETERANGAN'], 'string'],
            [['ID_REGION'], 'string', 'max' => 8],
            [['NAMA_REGION'], 'string', 'max' => 255],
            [['ID_REGION'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_REGION' => 'Id  Region',
            'NAMA_REGION' => 'Nama  Region',
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
        return $this->hasMany(DataPenggunaDetail::className(), ['ID_REGION' => 'ID_REGION']);
    }

    /**
     * Gets query for [[DataUnits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDataUnits()
    {
        return $this->hasMany(DataUnit::className(), ['ID_REGION' => 'ID_REGION']);
    }
}
