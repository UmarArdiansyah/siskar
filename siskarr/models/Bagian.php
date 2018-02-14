<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bagian".
 *
 * @property string $kode_bagian
 * @property string $jabatan
 *
 * @property Karyawan[] $karyawans
 */
class Bagian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bagian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_bagian', 'jabatan'], 'required'],
            [['kode_bagian', 'jabatan'], 'string', 'max' => 50],
            [['kode_bagian'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_bagian' => 'Kode Bagian',
            'jabatan' => 'Jabatan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKaryawans()
    {
        return $this->hasMany(Karyawan::className(), ['kode_bagian' => 'kode_bagian']);
    }
}
