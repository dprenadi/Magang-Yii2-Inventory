<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "jenis_barang".
 *
 * @property string $kd_barang
 * @property string $nama_barang
 * @property string $satuan
 * @property string $merek
 * @property string $kd_kategori
 * @property float|null $umur_ekonomi
 * @property float|null $hps
 * @property string|null $gol_inventory
 * @property string|null $keterangan
 *
 * @property Inventbarang[] $inventbarangs
 * @property Kategori $kdKategori
 * @property PengadaanItem[] $pengadaanItems
 * @property TmpPengadaan[] $tmpPengadaans
 */
class JenisBarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_barang', 'nama_barang', 'satuan', 'merek', 'kd_kategori'], 'required'],
            [['umur_ekonomi', 'hps'], 'number'],
            [['kd_barang'], 'string', 'max' => 50],
            [['nama_barang', 'merek'], 'string', 'max' => 100],
            [['satuan', 'gol_inventory'], 'string', 'max' => 10],
            [['kd_kategori'], 'string', 'max' => 15],
            [['keterangan'], 'string', 'max' => 255],
            [['kd_barang'], 'unique'],
            [['kd_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::className(), 'targetAttribute' => ['kd_kategori' => 'kd_kategori']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_barang' => 'Kode Barang',
            'nama_barang' => 'Nama Barang',
            'satuan' => 'Satuan',
            'merek' => 'Merek',
            'kd_kategori' => 'Kode Kategori',
            'umur_ekonomi' => 'Umur Ekonomi',
            'hps' => 'Hps',
            'gol_inventory' => 'Gol Inventory',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[Inventbarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventbarangs()
    {
        return $this->hasMany(Inventbarang::className(), ['kd_barang' => 'kd_barang']);
    }

    /**
     * Gets query for [[KdKategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdKategori()
    {
        return $this->hasOne(Kategori::className(), ['kd_kategori' => 'kd_kategori']);
    }

    /**
     * Gets query for [[PengadaanItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengadaanItems()
    {
        return $this->hasMany(PengadaanItem::className(), ['kd_barang' => 'kd_barang']);
    }

    /**
     * Gets query for [[TmpPengadaans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTmpPengadaans()
    {
        return $this->hasMany(TmpPengadaan::className(), ['kd_barang' => 'kd_barang']);
    }

    // public static function getAllJenisBarang()
    // {
    //     $JenisBarang = JenisBarang::find()->all();
    //     $JenisBarang = ArrayHelper::map($JenisBarang, 'kd_barang', 'nama_barang');
    //     return $JenisBarang;
    // }
}
