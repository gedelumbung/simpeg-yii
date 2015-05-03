<?php

/**
 * This is the model class for table "tbl_data_pendidikan".
 *
 * The followings are the available columns in table 'tbl_data_pendidikan':
 * @property integer $id_pendidikan
 * @property integer $id_pegawai
 * @property string $tingkat_pendidikan
 * @property string $jurusan
 * @property string $uraian
 * @property string $teknik_non_teknik
 * @property string $sekolah
 * @property string $tempat_sekolah
 * @property string $nomor_sttb
 * @property string $tanggal_sttb
 * @property string $tanggal_lulus
 */
class Pendidikan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_data_pendidikan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pegawai, tingkat_pendidikan, jurusan, uraian, teknik_non_teknik, sekolah, tempat_sekolah, nomor_sttb, tanggal_sttb, tanggal_lulus', 'required'),
			array('id_pegawai', 'numerical', 'integerOnly'=>true),
			array('tingkat_pendidikan, jurusan, teknik_non_teknik, tanggal_lulus', 'length', 'max'=>50),
			array('sekolah, nomor_sttb, tanggal_sttb', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pendidikan, id_pegawai, tingkat_pendidikan, jurusan, uraian, teknik_non_teknik, sekolah, tempat_sekolah, nomor_sttb, tanggal_sttb, tanggal_lulus', 'safe', 'on'=>'search'),
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
			'id_pendidikan' => 'Id Pendidikan',
			'id_pegawai' => 'Id Pegawai',
			'tingkat_pendidikan' => 'Tingkat Pendidikan',
			'jurusan' => 'Jurusan',
			'uraian' => 'Uraian',
			'teknik_non_teknik' => 'Teknik Non Teknik',
			'sekolah' => 'Sekolah',
			'tempat_sekolah' => 'Tempat Sekolah',
			'nomor_sttb' => 'Nomor Sttb',
			'tanggal_sttb' => 'Tanggal Sttb',
			'tanggal_lulus' => 'Tanggal Lulus',
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

		$criteria->compare('id_pendidikan',$this->id_pendidikan);
		$criteria->condition = 'id_pegawai = "'.$id_pegawai.'"';
		$criteria->compare('tingkat_pendidikan',$this->tingkat_pendidikan,true);
		$criteria->compare('jurusan',$this->jurusan,true);
		$criteria->compare('uraian',$this->uraian,true);
		$criteria->compare('teknik_non_teknik',$this->teknik_non_teknik,true);
		$criteria->compare('sekolah',$this->sekolah,true);
		$criteria->compare('tempat_sekolah',$this->tempat_sekolah,true);
		$criteria->compare('nomor_sttb',$this->nomor_sttb,true);
		$criteria->compare('tanggal_sttb',$this->tanggal_sttb,true);
		$criteria->compare('tanggal_lulus',$this->tanggal_lulus,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pendidikan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
