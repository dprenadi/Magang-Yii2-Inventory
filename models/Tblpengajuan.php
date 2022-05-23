<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblpengajuan".
 *
 * @property string $req_id
 * @property string|null $sumber_dana
 * @property string|null $io
 * @property string|null $no_spk
 * @property string|null $no_add
 * @property string|null $tgl_pengajuan
 * @property string|null $nip_user
 * @property string|null $nama_user
 * @property string|null $kepada
 * @property string|null $penerima
 * @property string|null $alamat_kirim
 * @property string|null $approval1
 * @property string|null $approval2
 * @property string|null $approval3
 */
class Tblpengajuan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tblpengajuan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['req_id'], 'required'],
            [['tgl_pengajuan'], 'safe'],
            [['req_id'], 'string', 'max' => 15],
            [['sumber_dana', 'nip_user'], 'string', 'max' => 25],
            [['io'], 'string', 'max' => 50],
            [['no_spk', 'no_add', 'nama_user', 'kepada', 'penerima', 'alamat_kirim', 'approval1', 'approval2', 'approval3'], 'string', 'max' => 100],
            [['req_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'req_id' => 'Req ID',
            'sumber_dana' => 'Sumber Dana',
            'io' => 'Io',
            'no_spk' => 'No Spk',
            'no_add' => 'No Add',
            'tgl_pengajuan' => 'Tgl Pengajuan',
            'nip_user' => 'Nip User',
            'nama_user' => 'Nama User',
            'kepada' => 'Kepada',
            'penerima' => 'Penerima',
            'alamat_kirim' => 'Alamat Kirim',
            'approval1' => 'Approval1',
            'approval2' => 'Approval2',
            'approval3' => 'Approval3',
        ];
    }
}
