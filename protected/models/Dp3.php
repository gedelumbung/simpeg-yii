<?php

/**
 * This is the model class for table "tbl_data_dp3".
 *
 * The followings are the available columns in table 'tbl_data_dp3':
 * @property integer $id_dp3
 * @property integer $id_pegawai
 * @property string $tahun
 * @property string $kesetiaan
 * @property string $prestasi
 * @property string $tanggung_jawab
 * @property string $ketaatan
 * @property string $kejujuran
 * @property string $kerjasama
 * @property string $prakarsa
 * @property string $kepemimpinan
 * @property string $rata_rata
 * @property string $atasan
 * @property string $penilai
 * @property string $mengetahui
 */
class Dp3 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_data_dp3';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pegawai, tahun, kesetiaan, prestasi, tanggung_jawab, ketaatan, kejujuran, kerjasama, prakarsa, kepemimpinan, rata_rata, atasan, penilai, mengetahui', 'required'),
			array('id_pegawai', 'numerical', 'integerOnly'=>true),
			array('tahun', 'length', 'max'=>30),
			array('kesetiaan, prestasi, tanggung_jawab, ketaatan, kejujuran, kerjasama, prakarsa, kepemimpinan, rata_rata, atasan, penilai, mengetahui', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_dp3, id_pegawai, tahun, kesetiaan, prestasi, tanggung_jawab, ketaatan, kejujuran, kerjasama, prakarsa, kepemimpinan, rata_rata, atasan, penilai, mengetahui', 'safe', 'on'=>'search'),
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
			'id_dp3' => 'Id Dp3',
			'id_pegawai' => 'Id Pegawai',
			'tahun' => 'Tahun',
			'kesetiaan' => 'Kesetiaan',
			'prestasi' => 'Prestasi',
			'tanggung_jawab' => 'Tanggung Jawab',
			'ketaatan' => 'Ketaatan',
			'kejujuran' => 'Kejujuran',
			'kerjasama' => 'Kerjasama',
			'prakarsa' => 'Prakarsa',
			'kepemimpinan' => 'Kepemimpinan',
			'rata_rata' => 'Rata Rata',
			'atasan' => 'Atasan',
			'penilai' => 'Penilai',
			'mengetahui' => 'Mengetahui',
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

		$criteria->compare('id_dp3',$this->id_dp3);
		$criteria->condition = 'id_pegawai = "'.$id_pegawai.'"';
		$criteria->compare('tahun',$this->tahun,true);
		$criteria->compare('kesetiaan',$this->kesetiaan,true);
		$criteria->compare('prestasi',$this->prestasi,true);
		$criteria->compare('tanggung_jawab',$this->tanggung_jawab,true);
		$criteria->compare('ketaatan',$this->ketaatan,true);
		$criteria->compare('kejujuran',$this->kejujuran,true);
		$criteria->compare('kerjasama',$this->kerjasama,true);
		$criteria->compare('prakarsa',$this->prakarsa,true);
		$criteria->compare('kepemimpinan',$this->kepemimpinan,true);
		$criteria->compare('rata_rata',$this->rata_rata,true);
		$criteria->compare('atasan',$this->atasan,true);
		$criteria->compare('penilai',$this->penilai,true);
		$criteria->compare('mengetahui',$this->mengetahui,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dp3 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
