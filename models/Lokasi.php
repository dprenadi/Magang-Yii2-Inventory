<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lokasi".
 *
 * @property string $kd_lokasi
 * @property string $nm_lokasi
 * @property string $kd_departemen
 *
 * @property Inventbarang[] $inventbarangs
 * @property Departemen $kdDepartemen
 */
class Lokasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lokasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_lokasi', 'nm_lokasi', 'kd_departemen'], 'required'],
            [['kd_lokasi', 'kd_departemen'], 'string', 'max' => 10],
            [['nm_lokasi'], 'string', 'max' => 100],
            [['kd_lokasi'], 'unique'],
            [['kd_departemen'], 'exist', 'skipOnError' => true, 'targetClass' => Departemen::className(), 'targetAttribute' => ['kd_departemen' => 'kd_departemen']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_lokasi' => 'Kd Lokasi',
            'nm_lokasi' => 'Nm Lokasi',
            'kd_departemen' => 'Kd Departemen',
        ];
    }

    /**
     * Gets query for [[Inventbarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventbarangs()
    {
        return $this->hasMany(Inventbarang::className(), ['kd_lokasi' => 'kd_lokasi']);
    }

    /**
     * Gets query for [[KdDepartemen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDepartemen()
    {
        return $this->hasOne(Departemen::className(), ['kd_departemen' => 'kd_departemen']);
    }
}
