<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengajuan".
 *
 * @property string $kd_pengajuan
 * @property string|null $tgl_pengajuan
 * @property string|null $pengaju
 * @property string|null $pelaksana
 * @property string|null $lokasikirim
 * @property string|null $alamat
 * @property string|null $no_spk
 * @property string|null $no_add
 * @property string|null $unit
 * @property string|null $idpejabat
 * @property string|null $tglapproval
 * @property string|null $status
 *
 * @property PengajuanDetail[] $pengajuanDetails
 */
class Pengajuan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengajuan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_pengajuan'], 'required'],
            [['tgl_pengajuan', 'tglapproval'], 'safe'],
            [['kd_pengajuan', 'idpejabat'], 'string', 'max' => 50],
            [['pengaju', 'pelaksana', 'unit'], 'string', 'max' => 100],
            [['lokasikirim', 'alamat'], 'string', 'max' => 255],
            [['no_spk', 'no_add'], 'string', 'max' => 75],
            [['status'], 'string', 'max' => 25],
            [['kd_pengajuan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_pengajuan' => 'Kd Pengajuan',
            'tgl_pengajuan' => 'Tgl Pengajuan',
            'pengaju' => 'Pengaju',
            'pelaksana' => 'Pelaksana',
            'lokasikirim' => 'Lokasikirim',
            'alamat' => 'Alamat',
            'no_spk' => 'No Spk',
            'no_add' => 'No Add',
            'unit' => 'Unit',
            'idpejabat' => 'Idpejabat',
            'tglapproval' => 'Tglapproval',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[PengajuanDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengajuanDetails()
    {
        return $this->hasMany(PengajuanDetail::className(), ['kd_pengajuan' => 'kd_pengajuan']);
    }
}
