<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peminjaman".
 *
 * @property string $no_peminjaman
 * @property string $tgl_peminjaman
 * @property string $tgl_akan_kembali
 * @property string $tgl_kembali
 * @property string $kd_pegawai
 * @property string $keterangan
 * @property string $status_kembali
 * @property string $kd_petugas
 *
 * @property Pegawai $kdPegawai
 * @property Petugas $kdPetugas
 * @property PeminjamanItem[] $peminjamanItems
 */
class Peminjaman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peminjaman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_peminjaman', 'tgl_peminjaman', 'tgl_akan_kembali', 'tgl_kembali', 'kd_pegawai', 'keterangan', 'kd_petugas'], 'required'],
            [['tgl_peminjaman', 'tgl_akan_kembali', 'tgl_kembali'], 'safe'],
            [['status_kembali'], 'string'],
            [['no_peminjaman', 'kd_pegawai', 'kd_petugas'], 'string', 'max' => 10],
            [['keterangan'], 'string', 'max' => 255],
            [['no_peminjaman'], 'unique'],
            [['kd_pegawai'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['kd_pegawai' => 'kd_pegawai']],
            [['kd_petugas'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::className(), 'targetAttribute' => ['kd_petugas' => 'kd_petugas']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_peminjaman' => 'No Peminjaman',
            'tgl_peminjaman' => 'Tgl Peminjaman',
            'tgl_akan_kembali' => 'Tgl Akan Kembali',
            'tgl_kembali' => 'Tgl Kembali',
            'kd_pegawai' => 'Kd Pegawai',
            'keterangan' => 'Keterangan',
            'status_kembali' => 'Status Kembali',
            'kd_petugas' => 'Kd Petugas',
        ];
    }

    /**
     * Gets query for [[KdPegawai]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPegawai()
    {
        return $this->hasOne(Pegawai::className(), ['kd_pegawai' => 'kd_pegawai']);
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
     * Gets query for [[PeminjamanItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjamanItems()
    {
        return $this->hasMany(PeminjamanItem::className(), ['no_peminjaman' => 'no_peminjaman']);
    }
}
