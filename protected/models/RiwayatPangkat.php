<?php

/**
 * This is the model class for table "tbl_data_riwayat_pangkat".
 *
 * The followings are the available columns in table 'tbl_data_riwayat_pangkat':
 * @property integer $id_riwayat_pangkat
 * @property integer $id_pegawai
 * @property integer $id_golongan
 * @property string $status
 * @property string $nomor_sk
 * @property string $tanggal_sk
 * @property string $tanggal_mulai
 * @property string $tanggal_selesai
 * @property string $masa_kerja
 */
class RiwayatPangkat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_data_riwayat_pangkat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pegawai, id_golongan, status, nomor_sk, tanggal_sk, tanggal_mulai, tanggal_selesai, masa_kerja', 'required'),
			array('id_pegawai, id_golongan', 'numerical', 'integerOnly'=>true),
			array('status, nomor_sk, tanggal_sk, tanggal_mulai, tanggal_selesai', 'length', 'max'=>50),
			array('masa_kerja', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_riwayat_pangkat, id_pegawai, id_golongan, status, nomor_sk, tanggal_sk, tanggal_mulai, tanggal_selesai, masa_kerja', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'Pegawai'=>array(self::BELONGS_TO,'Pegawai','id_pegawai'),
			'Golongan'=>array(self::BELONGS_TO,'Golongan','id_golongan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_riwayat_pangkat' => 'Id Riwayat Pangkat',
			'id_pegawai' => 'Id Pegawai',
			'id_golongan' => 'Id Golongan',
			'status' => 'Status',
			'nomor_sk' => 'Nomor Sk',
			'tanggal_sk' => 'Tanggal Sk',
			'tanggal_mulai' => 'Tanggal Mulai',
			'tanggal_selesai' => 'Tanggal Selesai',
			'masa_kerja' => 'Masa Kerja',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search($id_pegawai)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_riwayat_pangkat',$this->id_riwayat_pangkat);
		$criteria->condition = 'id_pegawai = "'.$id_pegawai.'"';
		$criteria->compare('id_golongan',$this->id_golongan);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('nomor_sk',$this->nomor_sk,true);
		$criteria->compare('tanggal_sk',$this->tanggal_sk,true);
		$criteria->compare('tanggal_mulai',$this->tanggal_mulai,true);
		$criteria->compare('tanggal_selesai',$this->tanggal_selesai,true);
		$criteria->compare('masa_kerja',$this->masa_kerja,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RiwayatPangkat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
