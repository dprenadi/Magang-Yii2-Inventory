<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property string $kd_supplier
 * @property string $namasupp
 * @property string|null $direktursupp
 * @property string|null $alamat
 * @property string|null $kota
 * @property string|null $telepon
 * @property string|null $email
 * @property string|null $kelas
 * @property string|null $groupsupply
 * @property string|null $jenissupply
 * @property string|null $banknama
 * @property string|null $banknorek
 * @property string|null $npwp
 * @property string|null $status
 *
 * @property Pengadaan[] $pengadaans
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_supplier', 'namasupp'], 'required'],
            [['kd_supplier'], 'string', 'max' => 10],
            [['namasupp', 'direktursupp', 'banknama'], 'string', 'max' => 100],
            [['alamat', 'kota', 'kelas'], 'string', 'max' => 255],
            [['telepon', 'email', 'groupsupply', 'jenissupply', 'banknorek', 'npwp', 'status'], 'string', 'max' => 50],
            [['kd_supplier'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_supplier' => 'Kd Supplier',
            'namasupp' => 'Namasupp',
            'direktursupp' => 'Direktursupp',
            'alamat' => 'Alamat',
            'kota' => 'Kota',
            'telepon' => 'Telepon',
            'email' => 'Email',
            'kelas' => 'Kelas',
            'groupsupply' => 'Groupsupply',
            'jenissupply' => 'Jenissupply',
            'banknama' => 'Banknama',
            'banknorek' => 'Banknorek',
            'npwp' => 'Npwp',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Pengadaans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengadaans()
    {
        return $this->hasMany(Pengadaan::className(), ['kd_supplier' => 'kd_supplier']);
    }
}
