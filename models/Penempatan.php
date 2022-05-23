<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penempatan".
 *
 * @property string $no_penempatan
 * @property string $tgl_penempatan
 * @property string $kd_lokasi
 * @property string $keterangan
 * @property string $jenis
 * @property string $kd_petugas
 *
 * @property Petugas $kdLokasi
 * @property Lokasi $kdLokasi0
 * @property Mutasi[] $mutasis
 * @property PenempatanItem[] $penempatanItems
 */
class Penempatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penempatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_penempatan', 'tgl_penempatan', 'kd_lokasi', 'keterangan', 'kd_petugas'], 'required'],
            [['tgl_penempatan'], 'safe'],
            [['jenis'], 'string'],
            [['no_penempatan', 'kd_lokasi', 'kd_petugas'], 'string', 'max' => 10],
            [['keterangan'], 'string', 'max' => 255],
            [['no_penempatan'], 'unique'],
            [['kd_lokasi'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::className(), 'targetAttribute' => ['kd_lokasi' => 'kd_petugas']],
            [['kd_lokasi'], 'exist', 'skipOnError' => true, 'targetClass' => Lokasi::className(), 'targetAttribute' => ['kd_lokasi' => 'kd_lokasi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_penempatan' => 'No Penempatan',
            'tgl_penempatan' => 'Tgl Penempatan',
            'kd_lokasi' => 'Kd Lokasi',
            'keterangan' => 'Keterangan',
            'jenis' => 'Jenis',
            'kd_petugas' => 'Kd Petugas',
        ];
    }

    /**
     * Gets query for [[KdLokasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdLokasi()
    {
        return $this->hasOne(Petugas::className(), ['kd_petugas' => 'kd_lokasi']);
    }

    /**
     * Gets query for [[KdLokasi0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdLokasi0()
    {
        return $this->hasOne(Lokasi::className(), ['kd_lokasi' => 'kd_lokasi']);
    }

    /**
     * Gets query for [[Mutasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMutasis()
    {
        return $this->hasMany(Mutasi::className(), ['no_penempatan' => 'no_penempatan']);
    }

    /**
     * Gets query for [[PenempatanItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenempatanItems()
    {
        return $this->hasMany(PenempatanItem::className(), ['no_penempatan' => 'no_penempatan']);
    }
}
