<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengadaan".
 *
 * @property string $no_pengadaan
 * @property string $tgl_pengadaan
 * @property string $kd_supplier
 * @property string $jenis_pengadaan
 * @property string $keterangan
 * @property string $kd_petugas
 *
 * @property Petugas $kdPetugas
 * @property Supplier $kdSupplier
 * @property PengadaanItem[] $pengadaanItems
 */
class Pengadaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengadaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pengadaan', 'tgl_pengadaan', 'kd_supplier', 'jenis_pengadaan', 'keterangan', 'kd_petugas'], 'required'],
            [['tgl_pengadaan'], 'safe'],
            [['no_pengadaan', 'kd_supplier', 'kd_petugas'], 'string', 'max' => 10],
            [['jenis_pengadaan'], 'string', 'max' => 100],
            [['keterangan'], 'string', 'max' => 255],
            [['no_pengadaan'], 'unique'],
            [['kd_petugas'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::className(), 'targetAttribute' => ['kd_petugas' => 'kd_petugas']],
            [['kd_supplier'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['kd_supplier' => 'kd_supplier']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_pengadaan' => 'No Pengadaan',
            'tgl_pengadaan' => 'Tgl Pengadaan',
            'kd_supplier' => 'Kd Supplier',
            'jenis_pengadaan' => 'Jenis Pengadaan',
            'keterangan' => 'Keterangan',
            'kd_petugas' => 'Kd Petugas',
        ];
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
     * Gets query for [[KdSupplier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdSupplier()
    {
        return $this->hasOne(Supplier::className(), ['kd_supplier' => 'kd_supplier']);
    }

    /**
     * Gets query for [[PengadaanItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengadaanItems()
    {
        return $this->hasMany(PengadaanItem::className(), ['no_pengadaan' => 'no_pengadaan']);
    }
}
