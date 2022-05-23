<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kategori".
 *
 * @property string $kd_kategori
 * @property string $nm_kategori
 *
 * @property JenisBarang[] $jenisBarangs
 */
class Kategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_kategori', 'nm_kategori'], 'required'],
            [['kd_kategori'], 'string', 'max' => 4],
            [['nm_kategori'], 'string', 'max' => 100],
            [['kd_kategori'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_kategori' => 'Kd Kategori',
            'nm_kategori' => 'Nm Kategori',
        ];
    }

    /**
     * Gets query for [[JenisBarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenisBarangs()
    {
        return $this->hasMany(JenisBarang::className(), ['kd_kategori' => 'kd_kategori']);
    }
}
