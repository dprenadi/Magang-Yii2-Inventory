<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_jabatan".
 *
 * @property string $idjabatan
 * @property string|null $nama
 * @property string|null $gedung
 * @property string|null $ruang
 * @property string|null $divisi
 * @property string|null $bidang
 * @property string|null $level
 * @property string|null $foto
 */
class DataJabatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_jabatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idjabatan'], 'required'],
            [['idjabatan'], 'string', 'max' => 25],
            [['nama', 'foto'], 'string', 'max' => 100],
            [['gedung', 'ruang'], 'string', 'max' => 50],
            [['divisi', 'bidang'], 'string', 'max' => 500],
            [['level'], 'string', 'max' => 10],
            [['idjabatan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idjabatan' => 'Idjabatan',
            'nama' => 'Nama',
            'gedung' => 'Gedung',
            'ruang' => 'Ruang',
            'divisi' => 'Divisi',
            'bidang' => 'Bidang',
            'level' => 'Level',
            'foto' => 'Foto',
        ];
    }
}
