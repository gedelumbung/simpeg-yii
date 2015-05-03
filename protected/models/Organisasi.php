<?php

/**
 * This is the model class for table "tbl_data_organisasi".
 *
 * The followings are the available columns in table 'tbl_data_organisasi':
 * @property integer $id_organisasi
 * @property integer $id_pegawai
 * @property string $uraian
 * @property string $lokasi
 * @property string $tanggal
 */
class Organisasi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_data_organisasi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pegawai, uraian, lokasi, tanggal', 'required'),
			array('id_pegawai', 'numerical', 'integerOnly'=>true),
			array('lokasi, tanggal', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_organisasi, id_pegawai, uraian, lokasi, tanggal', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_organisasi' => 'Id Organisasi',
			'id_pegawai' => 'Id Pegawai',
			'uraian' => 'Uraian',
			'lokasi' => 'Lokasi',
			'tanggal' => 'Tanggal',
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

		$criteria->compare('id_organisasi',$this->id_organisasi);
		$criteria->condition = 'id_pegawai = "'.$id_pegawai.'"';
		$criteria->compare('uraian',$this->uraian,true);
		$criteria->compare('lokasi',$this->lokasi,true);
		$criteria->compare('tanggal',$this->tanggal,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Organisasi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
