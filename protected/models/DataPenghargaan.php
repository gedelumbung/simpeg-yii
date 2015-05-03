<?php

/**
 * This is the model class for table "tbl_data_penghargaan".
 *
 * The followings are the available columns in table 'tbl_data_penghargaan':
 * @property integer $id_penghargaan
 * @property integer $id_pegawai
 * @property integer $id_master_penghargaan
 * @property string $uraian
 * @property string $nomor_sk
 * @property string $tanggal_sk
 */
class DataPenghargaan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_data_penghargaan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pegawai, id_master_penghargaan, uraian, nomor_sk, tanggal_sk', 'required'),
			array('id_pegawai, id_master_penghargaan', 'numerical', 'integerOnly'=>true),
			array('nomor_sk, tanggal_sk', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_penghargaan, id_pegawai, id_master_penghargaan, uraian, nomor_sk, tanggal_sk', 'safe', 'on'=>'search'),
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
			'Penghargaan'=>array(self::BELONGS_TO,'Penghargaan','id_master_penghargaan'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_penghargaan' => 'Id Penghargaan',
			'id_pegawai' => 'Id Pegawai',
			'id_master_penghargaan' => 'Id Master Penghargaan',
			'uraian' => 'Uraian',
			'nomor_sk' => 'Nomor Sk',
			'tanggal_sk' => 'Tanggal Sk',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_penghargaan',$this->id_penghargaan);
		$criteria->compare('id_pegawai',$this->id_pegawai);
		$criteria->compare('id_master_penghargaan',$this->id_master_penghargaan);
		$criteria->compare('uraian',$this->uraian,true);
		$criteria->compare('nomor_sk',$this->nomor_sk,true);
		$criteria->compare('tanggal_sk',$this->tanggal_sk,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DataPenghargaan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
