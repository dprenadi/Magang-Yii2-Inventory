<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblmerk".
 *
 * @property string $kdmerk
 * @property string|null $namamerk
 */
class Tblmerk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tblmerk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kdmerk'], 'required'],
            [['kdmerk'], 'string', 'max' => 25],
            [['namamerk'], 'string', 'max' => 100],
            [['kdmerk'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kdmerk' => 'Kdmerk',
            'namamerk' => 'Namamerk',
        ];
    }
}
