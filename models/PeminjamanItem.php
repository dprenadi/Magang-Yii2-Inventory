<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peminjaman_item".
 *
 * @property int $id
 * @property string $no_peminjaman
 * @property string $kd_inventaris
 *
 * @property Inventbarang $kdInventaris
 * @property Peminjaman $noPeminjaman
 */
class PeminjamanItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peminjaman_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_peminjaman', 'kd_inventaris'], 'required'],
            [['no_peminjaman', 'kd_inventaris'], 'string', 'max' => 10],
            [['no_peminjaman'], 'exist', 'skipOnError' => true, 'targetClass' => Peminjaman::className(), 'targetAttribute' => ['no_peminjaman' => 'no_peminjaman']],
            [['kd_inventaris'], 'exist', 'skipOnError' => true, 'targetClass' => Inventbarang::className(), 'targetAttribute' => ['kd_inventaris' => 'kd_inventaris']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'no_peminjaman' => 'No Peminjaman',
            'kd_inventaris' => 'Kd Inventaris',
        ];
    }

    /**
     * Gets query for [[KdInventaris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdInventaris()
    {
        return $this->hasOne(Inventbarang::className(), ['kd_inventaris' => 'kd_inventaris']);
    }

    /**
     * Gets query for [[NoPeminjaman]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoPeminjaman()
    {
        return $this->hasOne(Peminjaman::className(), ['no_peminjaman' => 'no_peminjaman']);
    }
}
