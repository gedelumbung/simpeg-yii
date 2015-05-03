<?php

/**
 * This is the model class for table "tbl_data_riwayat_jabatan".
 *
 * The followings are the available columns in table 'tbl_data_riwayat_jabatan':
 * @property integer $id_riwayat_jabatan
 * @property integer $id_pegawai
 * @property string $status
 * @property string $penempatan
 * @property integer $id_jabatan
 * @property integer $id_unit_kerja
 * @property string $uraian
 * @property integer $id_eselon
 * @property string $tmt_eselon
 * @property string $nomor_sk
 * @property string $tanggal_sk
 * @property string $tanggal_mulai
 * @property string $tanggal_selesai
 * @property string $lokasi
 */
class RiwayatJabatan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_data_riwayat_jabatan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pegawai, status, penempatan, id_jabatan, id_unit_kerja, uraian, id_eselon, tmt_eselon, nomor_sk, tanggal_sk, tanggal_mulai, tanggal_selesai, lokasi', 'required'),
			array('id_pegawai, id_jabatan, id_unit_kerja, id_eselon', 'numerical', 'integerOnly'=>true),
			array('status, penempatan, tmt_eselon, nomor_sk, tanggal_sk, tanggal_mulai, tanggal_selesai', 'length', 'max'=>50),
			array('lokasi', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_riwayat_jabatan, id_pegawai, status, penempatan, id_jabatan, id_unit_kerja, uraian, id_eselon, tmt_eselon, nomor_sk, tanggal_sk, tanggal_mulai, tanggal_selesai, lokasi', 'safe', 'on'=>'search'),
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
			'Jabatan'=>array(self::BELONGS_TO,'Jabatan','id_jabatan'),
			'UnitKerja'=>array(self::BELONGS_TO,'UnitKerja','id_unit_kerja'),
			'Eselon'=>array(self::BELONGS_TO,'Eselon','id_eselon'),
			'StatusJabatan'=>array(self::BELONGS_TO,'StatusJabatan','status'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_riwayat_jabatan' => 'Id Riwayat Jabatan',
			'id_pegawai' => 'Id Pegawai',
			'status' => 'Status',
			'penempatan' => 'Penempatan',
			'id_jabatan' => 'Jabatan',
			'id_unit_kerja' => 'Unit Kerja',
			'uraian' => 'Uraian',
			'id_eselon' => 'Eselon',
			'tmt_eselon' => 'Tmt Eselon',
			'nomor_sk' => 'Nomor Sk',
			'tanggal_sk' => 'Tanggal Sk',
			'tanggal_mulai' => 'Tanggal Mulai',
			'tanggal_selesai' => 'Tanggal Selesai',
			'lokasi' => 'Lokasi',
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

		$criteria->compare('id_riwayat_jabatan',$this->id_riwayat_jabatan);
		$criteria->condition = 'id_pegawai = "'.$id_pegawai.'"';
		$criteria->compare('status',$this->status,true);
		$criteria->compare('penempatan',$this->penempatan,true);
		$criteria->compare('id_jabatan',$this->id_jabatan);
		$criteria->compare('id_unit_kerja',$this->id_unit_kerja);
		$criteria->compare('uraian',$this->uraian,true);
		$criteria->compare('id_eselon',$this->id_eselon);
		$criteria->compare('tmt_eselon',$this->tmt_eselon,true);
		$criteria->compare('nomor_sk',$this->nomor_sk,true);
		$criteria->compare('tanggal_sk',$this->tanggal_sk,true);
		$criteria->compare('tanggal_mulai',$this->tanggal_mulai,true);
		$criteria->compare('tanggal_selesai',$this->tanggal_selesai,true);
		$criteria->compare('lokasi',$this->lokasi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RiwayatJabatan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
