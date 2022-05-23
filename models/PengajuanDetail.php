<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengajuan_detail".
 *
 * @property int $id
 * @property string $kd_pengajuan
 * @property string|null $item
 * @property string|null $unit
 * @property string|null $harga
 *
 * @property Pengajuan $kdPengajuan
 */
class PengajuanDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengajuan_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_pengajuan'], 'required'],
            [['kd_pengajuan'], 'string', 'max' => 50],
            [['item', 'unit', 'harga'], 'string', 'max' => 255],
            [['kd_pengajuan'], 'exist', 'skipOnError' => true, 'targetClass' => Pengajuan::className(), 'targetAttribute' => ['kd_pengajuan' => 'kd_pengajuan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kd_pengajuan' => 'Kd Pengajuan',
            'item' => 'Item',
            'unit' => 'Unit',
            'harga' => 'Harga',
        ];
    }

    /**
     * Gets query for [[KdPengajuan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPengajuan()
    {
        return $this->hasOne(Pengajuan::className(), ['kd_pengajuan' => 'kd_pengajuan']);
    }
}
