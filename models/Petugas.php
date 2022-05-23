<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "petugas".
 *
 * @property string $kd_petugas
 * @property string $nm_petugas
 * @property string $no_telepon
 * @property string $username
 * @property string $password
 * @property string $level
 * @property string $lokasi
 *
 * @property Mutasi[] $mutasis
 * @property Peminjaman[] $peminjamen
 * @property Penempatan[] $penempatans
 * @property Pengadaan[] $pengadaans
 * @property TmpMutasi[] $tmpMutasis
 * @property TmpPeminjaman[] $tmpPeminjamen
 * @property TmpPenempatan[] $tmpPenempatans
 * @property TmpPengadaan[] $tmpPengadaans
 */
class Petugas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'petugas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_petugas', 'nm_petugas', 'no_telepon', 'username', 'password', 'level', 'lokasi'], 'required'],
            [['kd_petugas'], 'string', 'max' => 10],
            [['nm_petugas'], 'string', 'max' => 100],
            [['no_telepon'], 'string', 'max' => 50],
            [['username', 'level', 'lokasi'], 'string', 'max' => 20],
            [['password'], 'string', 'max' => 200],
            [['kd_petugas'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_petugas' => 'Kd Petugas',
            'nm_petugas' => 'Nm Petugas',
            'no_telepon' => 'No Telepon',
            'username' => 'Username',
            'password' => 'Password',
            'level' => 'Level',
            'lokasi' => 'Lokasi',
        ];
    }

    /**
     * Gets query for [[Mutasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMutasis()
    {
        return $this->hasMany(Mutasi::className(), ['kd_petugas' => 'kd_petugas']);
    }

    /**
     * Gets query for [[Peminjamen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjamen()
    {
        return $this->hasMany(Peminjaman::className(), ['kd_petugas' => 'kd_petugas']);
    }

    /**
     * Gets query for [[Penempatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenempatans()
    {
        return $this->hasMany(Penempatan::className(), ['kd_lokasi' => 'kd_petugas']);
    }

    /**
     * Gets query for [[Pengadaans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengadaans()
    {
        return $this->hasMany(Pengadaan::className(), ['kd_petugas' => 'kd_petugas']);
    }

    /**
     * Gets query for [[TmpMutasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTmpMutasis()
    {
        return $this->hasMany(TmpMutasi::className(), ['kd_petugas' => 'kd_petugas']);
    }

    /**
     * Gets query for [[TmpPeminjamen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTmpPeminjamen()
    {
        return $this->hasMany(TmpPeminjaman::className(), ['kd_petugas' => 'kd_petugas']);
    }

    /**
     * Gets query for [[TmpPenempatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTmpPenempatans()
    {
        return $this->hasMany(TmpPenempatan::className(), ['kd_petugas' => 'kd_petugas']);
    }

    /**
     * Gets query for [[TmpPengadaans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTmpPengadaans()
    {
        return $this->hasMany(TmpPengadaan::className(), ['kd_petugas' => 'kd_petugas']);
    }
}
