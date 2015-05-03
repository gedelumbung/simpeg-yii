<?php

/**
 * This is the model class for table "tbl_master_satuan_kerja".
 *
 * The followings are the available columns in table 'tbl_master_satuan_kerja':
 * @property integer $id_satuan_kerja
 * @property string $nama_satuan_kerja
 * @property string $parent_unit
 */
class SatuanKerja extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_master_satuan_kerja';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_satuan_kerja, parent_unit', 'required'),
			array('nama_satuan_kerja', 'length', 'max'=>150),
			array('parent_unit', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_satuan_kerja, nama_satuan_kerja, parent_unit', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_satuan_kerja' => 'Id Satuan Kerja',
			'nama_satuan_kerja' => 'Nama Satuan Kerja',
			'parent_unit' => 'Parent Unit',
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

		$criteria->compare('id_satuan_kerja',$this->id_satuan_kerja);
		$criteria->compare('nama_satuan_kerja',$this->nama_satuan_kerja,true);
		$criteria->compare('parent_unit',$this->parent_unit,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SatuanKerja the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
