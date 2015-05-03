<?php

/**
 * This is the model class for table "tbl_master_ppk".
 *
 * The followings are the available columns in table 'tbl_master_ppk':
 * @property integer $id_ppk
 * @property string $nama_ppk
 * @property string $parent_satuan_kerja
 */
class Ppk extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_master_ppk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_ppk, parent_satuan_kerja', 'required'),
			array('nama_ppk', 'length', 'max'=>150),
			array('parent_satuan_kerja', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ppk, nama_ppk, parent_satuan_kerja', 'safe', 'on'=>'search'),
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
			'id_ppk' => 'Id Ppk',
			'nama_ppk' => 'Nama Ppk',
			'parent_satuan_kerja' => 'Parent Satuan Kerja',
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

		$criteria->compare('id_ppk',$this->id_ppk);
		$criteria->compare('nama_ppk',$this->nama_ppk,true);
		$criteria->compare('parent_satuan_kerja',$this->parent_satuan_kerja,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ppk the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
