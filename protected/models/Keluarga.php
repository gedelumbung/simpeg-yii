<?php

/**
 * This is the model class for table "tbl_data_keluarga".
 *
 * The followings are the available columns in table 'tbl_data_keluarga':
 * @property integer $id_data_keluarga
 * @property integer $id_pegawai
 * @property string $nama_anggota_keluarga
 * @property string $tanggal_lahir
 * @property string $status_kawin
 * @property string $tanggal_nikah
 * @property string $uraian
 * @property string $tanggal_cerai_meninggal
 * @property string $pekerjaan
 */
class Keluarga extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_data_keluarga';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pegawai, nama_anggota_keluarga, tanggal_lahir, status_kawin, tanggal_nikah, uraian, tanggal_cerai_meninggal, pekerjaan', 'required'),
			array('id_pegawai', 'numerical', 'integerOnly'=>true),
			array('nama_anggota_keluarga', 'length', 'max'=>150),
			array('tanggal_lahir, tanggal_nikah', 'length', 'max'=>100),
			array('status_kawin, pekerjaan', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_data_keluarga, id_pegawai, nama_anggota_keluarga, tanggal_lahir, status_kawin, tanggal_nikah, uraian, tanggal_cerai_meninggal, pekerjaan', 'safe', 'on'=>'search'),
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
			'id_data_keluarga' => 'Id Data Keluarga',
			'id_pegawai' => 'Id Pegawai',
			'nama_anggota_keluarga' => 'Nama Anggota Keluarga',
			'tanggal_lahir' => 'Tanggal Lahir',
			'status_kawin' => 'Status Kawin',
			'tanggal_nikah' => 'Tanggal Nikah',
			'uraian' => 'Uraian',
			'tanggal_cerai_meninggal' => 'Tanggal Cerai Meninggal',
			'pekerjaan' => 'Pekerjaan',
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

		$criteria->compare('id_data_keluarga',$this->id_data_keluarga);
		$criteria->condition = 'id_pegawai = "'.$id_pegawai.'"';
		$criteria->compare('nama_anggota_keluarga',$this->nama_anggota_keluarga,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('status_kawin',$this->status_kawin,true);
		$criteria->compare('tanggal_nikah',$this->tanggal_nikah,true);
		$criteria->compare('uraian',$this->uraian,true);
		$criteria->compare('tanggal_cerai_meninggal',$this->tanggal_cerai_meninggal,true);
		$criteria->compare('pekerjaan',$this->pekerjaan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Keluarga the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
