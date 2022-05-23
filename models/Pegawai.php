<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property string $kd_pegawai
 * @property string $nm_pegawai
 * @property string $jns_kelamin
 * @property string $alamat
 * @property string $no_telepon
 *
 * @property Peminjaman[] $peminjamen
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_pegawai', 'nm_pegawai', 'jns_kelamin', 'alamat', 'no_telepon'], 'required'],
            [['jns_kelamin'], 'string'],
            [['kd_pegawai'], 'string', 'max' => 10],
            [['nm_pegawai'], 'string', 'max' => 100],
            [['alamat'], 'string', 'max' => 255],
            [['no_telepon'], 'string', 'max' => 50],
            [['kd_pegawai'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_pegawai' => 'Kd Pegawai',
            'nm_pegawai' => 'Nm Pegawai',
            'jns_kelamin' => 'Jns Kelamin',
            'alamat' => 'Alamat',
            'no_telepon' => 'No Telepon',
        ];
    }

    /**
     * Gets query for [[Peminjamen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjamen()
    {
        return $this->hasMany(Peminjaman::className(), ['kd_pegawai' => 'kd_pegawai']);
    }
}
