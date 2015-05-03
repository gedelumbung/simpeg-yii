<?php

/**
 * This is the model class for table "tbl_data_pelatihan".
 *
 * The followings are the available columns in table 'tbl_data_pelatihan':
 * @property integer $id_pelatihan
 * @property integer $id_pegawai
 * @property integer $id_master_pelatihan
 * @property string $uraian
 * @property string $lokasi
 * @property string $tanggal_sertifikat
 * @property string $jam_pelatihan
 * @property string $negara
 */
class DataPelatihan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_data_pelatihan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pegawai, id_master_pelatihan, uraian, lokasi, tanggal_sertifikat, jam_pelatihan, negara', 'required'),
			array('id_pegawai, id_master_pelatihan', 'numerical', 'integerOnly'=>true),
			array('lokasi, negara', 'length', 'max'=>100),
			array('tanggal_sertifikat, jam_pelatihan', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pelatihan, id_pegawai, id_master_pelatihan, uraian, lokasi, tanggal_sertifikat, jam_pelatihan, negara', 'safe', 'on'=>'search'),
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
			'Pelatihan'=>array(self::BELONGS_TO,'Pelatihan','id_pelatihan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pelatihan' => 'Id Pelatihan',
			'id_pegawai' => 'Id Pegawai',
			'id_master_pelatihan' => 'Id Master Pelatihan',
			'uraian' => 'Uraian',
			'lokasi' => 'Lokasi',
			'tanggal_sertifikat' => 'Tanggal Sertifikat',
			'jam_pelatihan' => 'Jam Pelatihan',
			'negara' => 'Negara',
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

		$criteria->compare('id_pelatihan',$this->id_pelatihan);
		$criteria->condition = 'id_pegawai = "'.$id_pegawai.'"';
		$criteria->compare('id_master_pelatihan',$this->id_master_pelatihan);
		$criteria->compare('uraian',$this->uraian,true);
		$criteria->compare('lokasi',$this->lokasi,true);
		$criteria->compare('tanggal_sertifikat',$this->tanggal_sertifikat,true);
		$criteria->compare('jam_pelatihan',$this->jam_pelatihan,true);
		$criteria->compare('negara',$this->negara,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DataPelatihan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
