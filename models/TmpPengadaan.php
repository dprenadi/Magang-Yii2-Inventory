<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tmp_pengadaan".
 *
 * @property int $id
 * @property string $kd_petugas
 * @property string $kd_barang
 * @property string $deskripsi
 * @property int $harga_beli
 * @property int $jumlah
 * @property string $satuan
 *
 * @property JenisBarang $kdBarang
 * @property Petugas $kdPetugas
 */
class TmpPengadaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tmp_pengadaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_petugas', 'kd_barang', 'deskripsi', 'harga_beli', 'jumlah', 'satuan'], 'required'],
            [['harga_beli', 'jumlah'], 'integer'],
            [['kd_petugas', 'kd_barang'], 'string', 'max' => 10],
            [['deskripsi'], 'string', 'max' => 100],
            [['satuan'], 'string', 'max' => 25],
            [['kd_barang'], 'exist', 'skipOnError' => true, 'targetClass' => JenisBarang::className(), 'targetAttribute' => ['kd_barang' => 'kd_barang']],
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
            'kd_petugas' => 'Kd Petugas',
            'kd_barang' => 'Kd Barang',
            'deskripsi' => 'Deskripsi',
            'harga_beli' => 'Harga Beli',
            'jumlah' => 'Jumlah',
            'satuan' => 'Satuan',
        ];
    }

    /**
     * Gets query for [[KdBarang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdBarang()
    {
        return $this->hasOne(JenisBarang::className(), ['kd_barang' => 'kd_barang']);
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
