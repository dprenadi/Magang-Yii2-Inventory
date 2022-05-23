<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tmp_penempatan".
 *
 * @property int $id
 * @property string $kd_petugas
 * @property string $kd_inventaris
 *
 * @property Inventbarang $kdInventaris
 * @property Petugas $kdPetugas
 */
class TmpPenempatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tmp_penempatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_petugas', 'kd_inventaris'], 'required'],
            [['kd_petugas', 'kd_inventaris'], 'string', 'max' => 10],
            [['kd_inventaris'], 'exist', 'skipOnError' => true, 'targetClass' => Inventbarang::className(), 'targetAttribute' => ['kd_inventaris' => 'kd_inventaris']],
            [['kd_petugas'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::className(), 'targetAttribute' => ['kd_petugas' => 'kd_petugas']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kd_petugas' => 'Kd Petugas',
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
     * Gets query for [[KdPetugas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPetugas()
    {
        return $this->hasOne(Petugas::className(), ['kd_petugas' => 'kd_petugas']);
    }
}
