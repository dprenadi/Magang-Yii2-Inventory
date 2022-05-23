<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departemen".
 *
 * @property string $kd_departemen
 * @property string $nm_departemen
 * @property string $keterangan
 *
 * @property Lokasi[] $lokasis
 */
class Departemen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departemen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_departemen', 'nm_departemen', 'keterangan'], 'required'],
            [['kd_departemen'], 'string', 'max' => 10],
            [['nm_departemen', 'keterangan'], 'string', 'max' => 100],
            [['kd_departemen'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_departemen' => 'Kd Departemen',
            'nm_departemen' => 'Nm Departemen',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[Lokasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLokasis()
    {
        return $this->hasMany(Lokasi::className(), ['kd_departemen' => 'kd_departemen']);
    }
}
