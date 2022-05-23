<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mutasi".
 *
 * @property string $no_mutasi
 * @property string $tgl_mutasi
 * @property string $kd_lokasi
 * @property string $no_penempatan
 * @property string $keterangan
 * @property string $kd_petugas
 *
 * @property Lokasi $kdLokasi
 * @property Petugas $kdPetugas
 * @property Penempatan $noPenempatan
 */
class Mutasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mutasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_mutasi', 'tgl_mutasi', 'kd_lokasi', 'no_penempatan', 'keterangan', 'kd_petugas'], 'required'],
            [['tgl_mutasi'], 'safe'],
            [['no_mutasi', 'kd_lokasi', 'no_penempatan', 'kd_petugas'], 'string', 'max' => 10],
            [['keterangan'], 'string', 'max' => 100],
            [['no_mutasi'], 'unique'],
            [['kd_lokasi'], 'exist', 'skipOnError' => true, 'targetClass' => Lokasi::className(), 'targetAttribute' => ['kd_lokasi' => 'kd_lokasi']],
            [['no_penempatan'], 'exist', 'skipOnError' => true, 'targetClass' => Penempatan::className(), 'targetAttribute' => ['no_penempatan' => 'no_penempatan']],
            [['kd_petugas'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::className(), 'targetAttribute' => ['kd_petugas' => 'kd_petugas']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_mutasi' => 'No Mutasi',
            'tgl_mutasi' => 'Tgl Mutasi',
            'kd_lokasi' => 'Kd Lokasi',
            'no_penempatan' => 'No Penempatan',
            'keterangan' => 'Keterangan',
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
        return $this->hasOne(Lokasi::className(), ['kd_lokasi' => 'kd_lokasi']);
    }

    /**
     * Gets query for [[KdPetugas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPetugas()
    {
        return $this->hasOne(Petugas::className(), ['kd_petugas' => 'kd_petugas']);
    }

    /**
     * Gets query for [[NoPenempatan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoPenempatan()
    {
        return $this->hasOne(Penempatan::className(), ['no_penempatan' => 'no_penempatan']);
    }
}
