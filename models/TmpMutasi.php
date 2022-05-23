<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tmp_mutasi".
 *
 * @property int $id
 * @property string $kd_lokasi
 * @property string $kd_inventaris
 * @property string $kd_petugas
 *
 * @property Inventbarang $kdInventaris
 * @property Lokasi $kdLokasi
 * @property Petugas $kdPetugas
 */
class TmpMutasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tmp_mutasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_lokasi', 'kd_inventaris', 'kd_petugas'], 'required'],
            [['kd_lokasi', 'kd_inventaris', 'kd_petugas'], 'string', 'max' => 10],
            [['kd_inventaris'], 'exist', 'skipOnError' => true, 'targetClass' => Inventbarang::className(), 'targetAttribute' => ['kd_inventaris' => 'kd_inventaris']],
            [['kd_lokasi'], 'exist', 'skipOnError' => true, 'targetClass' => Lokasi::className(), 'targetAttribute' => ['kd_lokasi' => 'kd_lokasi']],
            [['kd_petugas'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::className(), 'targetAttribute' => ['kd_petugas' => 'kd_petugas']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kd_lokasi' => 'Kd Lokasi',
            'kd_inventaris' => 'Kd Inventaris',
            'kd_petugas' => 'Kd Petugas',
        ];
    }

    /**
     * Gets query for [[KdInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdInventaris()
    {
        return $this->hasOne(Inventbarang::className(), ['kd_inventaris' => 'kd_inventaris']);
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
}
