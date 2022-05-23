<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "po".
 *
 * @property string $nopo
 * @property string $nokp
 * @property string $nokon
 * @property string|null $tglpo
 * @property string|null $idvendor
 * @property string|null $idpejabat
 * @property string|null $sapproval
 * @property string|null $dateapproval
 * @property string|null $spo
 *
 * @property Inventbarang[] $inventbarangs
 * @property PoDetail $nopo0
 */
class Po extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'po';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nopo', 'nokp', 'nokon'], 'required'],
            [['tglpo', 'dateapproval'], 'safe'],
            [['nopo', 'nokp'], 'string', 'max' => 50],
            [['nokon'], 'string', 'max' => 100],
            [['idvendor', 'idpejabat', 'sapproval', 'spo'], 'string', 'max' => 25],
            [['nopo'], 'unique'],
            [['nopo'], 'exist', 'skipOnError' => true, 'targetClass' => PoDetail::className(), 'targetAttribute' => ['nopo' => 'nopo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nopo' => 'Nopo',
            'nokp' => 'Nokp',
            'nokon' => 'Nokon',
            'tglpo' => 'Tglpo',
            'idvendor' => 'Idvendor',
            'idpejabat' => 'Idpejabat',
            'sapproval' => 'Sapproval',
            'dateapproval' => 'Dateapproval',
            'spo' => 'Spo',
        ];
    }

    /**
     * Gets query for [[Inventbarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventbarangs()
    {
        return $this->hasMany(Inventbarang::className(), ['no_po' => 'nopo']);
    }

    /**
     * Gets query for [[Nopo0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNopo0()
    {
        return $this->hasOne(PoDetail::className(), ['nopo' => 'nopo']);
    }
}
