<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gaji".
 *
 * @property string $gaji_pokok
 * @property string $tunjangan_gaji
 * @property string $golongan
 *
 * @property Karyawan[] $karyawans
 */
class Gaji extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gaji';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gaji_pokok', 'tunjangan_gaji', 'golongan'], 'required'],
            [['gaji_pokok', 'tunjangan_gaji', 'golongan'], 'string', 'max' => 50],
            [['golongan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'gaji_pokok' => 'Gaji Pokok',
            'tunjangan_gaji' => 'Tunjangan Gaji',
            'golongan' => 'Golongan',//kiri hanya nama.
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKaryawans()
    {
        return $this->hasMany(Karyawan::className(), ['golongan' => 'golongan']);
    }
}
