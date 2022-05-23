<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penempatan_item".
 *
 * @property int $id
 * @property string $no_penempatan
 * @property string $kd_inventaris
 * @property string $status_aktif
 *
 * @property Inventbarang $kdInventaris
 * @property Penempatan $noPenempatan
 */
class PenempatanItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penempatan_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_penempatan', 'kd_inventaris'], 'required'],
            [['status_aktif'], 'string'],
            [['no_penempatan', 'kd_inventaris'], 'string', 'max' => 10],
            [['no_penempatan'], 'exist', 'skipOnError' => true, 'targetClass' => Penempatan::className(), 'targetAttribute' => ['no_penempatan' => 'no_penempatan']],
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
            'no_penempatan' => 'No Penempatan',
            'kd_inventaris' => 'Kd Inventaris',
            'status_aktif' => 'Status Aktif',
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
     * Gets query for [[NoPenempatan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoPenempatan()
    {
        return $this->hasOne(Penempatan::className(), ['no_penempatan' => 'no_penempatan']);
    }
}
