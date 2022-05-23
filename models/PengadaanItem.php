<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengadaan_item".
 *
 * @property int $id
 * @property string $no_pengadaan
 * @property string $kd_barang
 * @property string $deskripsi
 * @property int $harga_beli
 * @property int $jumlah
 *
 * @property JenisBarang $kdBarang
 * @property Pengadaan $noPengadaan
 */
class PengadaanItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengadaan_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pengadaan', 'kd_barang', 'deskripsi', 'harga_beli', 'jumlah'], 'required'],
            [['harga_beli', 'jumlah'], 'integer'],
            [['no_pengadaan', 'kd_barang'], 'string', 'max' => 10],
            [['deskripsi'], 'string', 'max' => 100],
            [['no_pengadaan'], 'exist', 'skipOnError' => true, 'targetClass' => Pengadaan::className(), 'targetAttribute' => ['no_pengadaan' => 'no_pengadaan']],
            [['kd_barang'], 'exist', 'skipOnError' => true, 'targetClass' => JenisBarang::className(), 'targetAttribute' => ['kd_barang' => 'kd_barang']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'no_pengadaan' => 'No Pengadaan',
            'kd_barang' => 'Kd Barang',
            'deskripsi' => 'Deskripsi',
            'harga_beli' => 'Harga Beli',
            'jumlah' => 'Jumlah',
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
     * Gets query for [[NoPengadaan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoPengadaan()
    {
        return $this->hasOne(Pengadaan::className(), ['no_pengadaan' => 'no_pengadaan']);
    }
}
