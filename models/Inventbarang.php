<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventbarang".
 *
 * @property string $kd_inventaris
 * @property string $kd_barang
 * @property string $tgl_beli
 * @property string|null $harga
 * @property string|null $kondisi
 * @property string|null $status_barang
 * @property string|null $unit
 * @property string|null $kd_lokasi
 * @property string|null $no_po
 * @property string|null $tgl_po
 * @property string|null $sumber_dana
 * @property string|null $no_spk
 * @property string|null $id_vendor
 *
 * @property JenisBarang $kdBarang
 * @property Lokasi $kdLokasi
 * @property Po $noPo
 * @property PeminjamanItem[] $peminjamanItems
 * @property PenempatanItem[] $penempatanItems
 * @property TmpMutasi[] $tmpMutasis
 * @property TmpPeminjaman[] $tmpPeminjamen
 * @property TmpPenempatan[] $tmpPenempatans
 */
class Inventbarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventbarang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_inventaris', 'kd_barang', 'tgl_beli'], 'required'],
            [['tgl_beli', 'tgl_po'], 'safe'],
            [['kd_inventaris', 'kd_lokasi'], 'string', 'max' => 10],
            [['kd_barang'], 'string', 'max' => 5],
            [['harga', 'kondisi', 'status_barang', 'unit', 'no_po', 'sumber_dana', 'no_spk'], 'string', 'max' => 255],
            [['id_vendor'], 'string', 'max' => 25],
            [['kd_inventaris'], 'unique'],
            [['kd_barang'], 'exist', 'skipOnError' => true, 'targetClass' => JenisBarang::className(), 'targetAttribute' => ['kd_barang' => 'kd_barang']],
            [['no_po'], 'exist', 'skipOnError' => true, 'targetClass' => Po::className(), 'targetAttribute' => ['no_po' => 'nopo']],
            [['kd_lokasi'], 'exist', 'skipOnError' => true, 'targetClass' => Lokasi::className(), 'targetAttribute' => ['kd_lokasi' => 'kd_lokasi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_inventaris' => 'Kd Inventaris',
            'kd_barang' => 'Kd Barang',
            'tgl_beli' => 'Tgl Beli',
            'harga' => 'Harga',
            'kondisi' => 'Kondisi',
            'status_barang' => 'Status Barang',
            'unit' => 'Unit',
            'kd_lokasi' => 'Kd Lokasi',
            'no_po' => 'No Po',
            'tgl_po' => 'Tgl Po',
            'sumber_dana' => 'Sumber Dana',
            'no_spk' => 'No Spk',
            'id_vendor' => 'Id Vendor',
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
     * Gets query for [[KdLokasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdLokasi()
    {
        return $this->hasOne(Lokasi::className(), ['kd_lokasi' => 'kd_lokasi']);
    }

    /**
     * Gets query for [[NoPo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoPo()
    {
        return $this->hasOne(Po::className(), ['nopo' => 'no_po']);
    }

    /**
     * Gets query for [[PeminjamanItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjamanItems()
    {
        return $this->hasMany(PeminjamanItem::className(), ['kd_inventaris' => 'kd_inventaris']);
    }

    /**
     * Gets query for [[PenempatanItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenempatanItems()
    {
        return $this->hasMany(PenempatanItem::className(), ['kd_inventaris' => 'kd_inventaris']);
    }

    /**
     * Gets query for [[TmpMutasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTmpMutasis()
    {
        return $this->hasMany(TmpMutasi::className(), ['kd_inventaris' => 'kd_inventaris']);
    }

    /**
     * Gets query for [[TmpPeminjamen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTmpPeminjamen()
    {
        return $this->hasMany(TmpPeminjaman::className(), ['kd_inventaris' => 'kd_inventaris']);
    }

    /**
     * Gets query for [[TmpPenempatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTmpPenempatans()
    {
        return $this->hasMany(TmpPenempatan::className(), ['kd_inventaris' => 'kd_inventaris']);
    }
}
