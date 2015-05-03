<?php

/**
 * This is the model class for table "tbl_master_unit_kerja".
 *
 * The followings are the available columns in table 'tbl_master_unit_kerja':
 * @property integer $id_unit_kerja
 * @property string $nama_unit_kerja
 * @property string $eselon
 * @property string $parent_unit
 */
class UnitKerja extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_master_unit_kerja';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_unit_kerja, eselon, parent_unit', 'required'),
			array('nama_unit_kerja', 'length', 'max'=>150),
			array('eselon, parent_unit', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_unit_kerja, nama_unit_kerja, eselon, parent_unit', 'safe', 'on'=>'search'),
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
			'id_unit_kerja' => 'Id Unit Kerja',
			'nama_unit_kerja' => 'Nama Unit Kerja',
			'eselon' => 'Eselon',
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

		$criteria->compare('id_unit_kerja',$this->id_unit_kerja);
		$criteria->compare('nama_unit_kerja',$this->nama_unit_kerja,true);
		$criteria->compare('eselon',$this->eselon,true);
		$criteria->compare('parent_unit',$this->parent_unit,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UnitKerja the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
