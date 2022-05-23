<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "po_detail".
 *
 * @property string $nopo
 * @property string|null $item
 * @property int|null $unit
 * @property float|null $harga
 * @property string|null $jenispengadaan
 *
 * @property Po $po
 */
class PoDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'po_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nopo'], 'required'],
            [['unit'], 'integer'],
            [['harga'], 'number'],
            [['nopo', 'jenispengadaan'], 'string', 'max' => 50],
            [['item'], 'string', 'max' => 100],
            [['nopo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nopo' => 'Nopo',
            'item' => 'Item',
            'unit' => 'Unit',
            'harga' => 'Harga',
            'jenispengadaan' => 'Jenispengadaan',
        ];
    }

    /**
     * Gets query for [[Po]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPo()
    {
        return $this->hasOne(Po::className(), ['nopo' => 'nopo']);
    }
}
