<?php

/**
 * This is the model class for table "tbl_data_hukuman".
 *
 * The followings are the available columns in table 'tbl_data_hukuman':
 * @property integer $id_hukuman
 * @property integer $id_pegawai
 * @property integer $id_master_hukuman
 * @property string $uraian
 * @property string $nomor_sk
 * @property string $tanggal_sk
 * @property string $tanggal_mulai
 * @property string $tanggal_selesai
 * @property string $masa_berlaku
 * @property string $pejabat_menetapkan
 */
class DataHukuman extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_data_hukuman';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pegawai, id_master_hukuman, uraian, nomor_sk, tanggal_sk, tanggal_mulai, tanggal_selesai, masa_berlaku, pejabat_menetapkan', 'required'),
			array('id_pegawai, id_master_hukuman', 'numerical', 'integerOnly'=>true),
			array('nomor_sk, tanggal_sk, masa_berlaku, pejabat_menetapkan', 'length', 'max'=>100),
			array('tanggal_mulai, tanggal_selesai', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_hukuman, id_pegawai, id_master_hukuman, uraian, nomor_sk, tanggal_sk, tanggal_mulai, tanggal_selesai, masa_berlaku, pejabat_menetapkan', 'safe', 'on'=>'search'),
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
			'Hukuman'=>array(self::BELONGS_TO,'Hukuman','id_master_hukuman'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_hukuman' => 'Id Hukuman',
			'id_pegawai' => 'Id Pegawai',
			'id_master_hukuman' => 'Id Master Hukuman',
			'uraian' => 'Uraian',
			'nomor_sk' => 'Nomor Sk',
			'tanggal_sk' => 'Tanggal Sk',
			'tanggal_mulai' => 'Tanggal Mulai',
			'tanggal_selesai' => 'Tanggal Selesai',
			'masa_berlaku' => 'Masa Berlaku',
			'pejabat_menetapkan' => 'Pejabat Menetapkan',
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

		$criteria->compare('id_hukuman',$this->id_hukuman);
		$criteria->condition = 'id_pegawai = "'.$id_pegawai.'"';
		$criteria->compare('id_master_hukuman',$this->id_master_hukuman);
		$criteria->compare('uraian',$this->uraian,true);
		$criteria->compare('nomor_sk',$this->nomor_sk,true);
		$criteria->compare('tanggal_sk',$this->tanggal_sk,true);
		$criteria->compare('tanggal_mulai',$this->tanggal_mulai,true);
		$criteria->compare('tanggal_selesai',$this->tanggal_selesai,true);
		$criteria->compare('masa_berlaku',$this->masa_berlaku,true);
		$criteria->compare('pejabat_menetapkan',$this->pejabat_menetapkan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DataHukuman the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
