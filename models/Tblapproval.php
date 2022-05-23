<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblapproval".
 *
 * @property string $kdjabatan
 * @property string|null $namajabatan
 * @property string|null $level
 */
class Tblapproval extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tblapproval';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kdjabatan'], 'required'],
            [['kdjabatan', 'level'], 'string', 'max' => 15],
            [['namajabatan'], 'string', 'max' => 100],
            [['kdjabatan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kdjabatan' => 'Kdjabatan',
            'namajabatan' => 'Namajabatan',
            'level' => 'Level',
        ];
    }
}
