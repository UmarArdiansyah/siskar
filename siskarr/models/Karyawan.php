<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "karyawan".
 *
 * @property string $nip
 * @property string $nama
 * @property string $kode_bagian
 * @property string $alamat
 * @property string $golongan
 *
 * @property Gaji $golongan0
 * @property Bagian $kodeBagian
 */
class Karyawan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'karyawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama', 'kode_bagian', 'alamat', 'golongan'], 'required'],
            [['nip', 'nama', 'kode_bagian', 'alamat', 'golongan'], 'string', 'max' => 50],
            [['nip', 'kode_bagian', 'golongan'], 'unique', 'targetAttribute' => ['nip', 'kode_bagian', 'golongan']],
            [['golongan'], 'exist', 'skipOnError' => true, 'targetClass' => Gaji::className(), 'targetAttribute' => ['golongan' => 'golongan']],
            [['kode_bagian'], 'exist', 'skipOnError' => true, 'targetClass' => Bagian::className(), 'targetAttribute' => ['kode_bagian' => 'kode_bagian']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nip' => 'Nip',
            'nama' => 'Nama',
            'kode_bagian' => 'Kode Bagian',
            'alamat' => 'Alamat',
            'golongan' => 'Golongan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolongan0()
    {
        return $this->hasOne(Gaji::className(), ['golongan' => 'golongan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBagian()
    {
        return $this->hasOne(Bagian::className(), ['kode_bagian' => 'kode_bagian']);
    }
}
