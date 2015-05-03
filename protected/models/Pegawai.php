<?php

/**
 * This is the model class for table "tbl_data_pegawai".
 *
 * The followings are the available columns in table 'tbl_data_pegawai':
 * @property integer $id_pegawai
 * @property string $nip
 * @property string $nip_lama
 * @property string $no_kartu_pegawai
 * @property string $nama_pegawai
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property string $agama
 * @property string $usia
 * @property string $status_pegawai
 * @property string $tanggal_pengangkatan_cpns
 * @property string $alamat
 * @property string $no_npwp
 * @property string $kartu_askes_pegawai
 * @property string $status_pegawai_pangkat
 * @property integer $id_golongan
 * @property string $nomor_sk_pangkat
 * @property string $tanggal_sk_pangkat
 * @property string $tanggal_mulai_pangkat
 * @property string $tanggal_selesai_pangkat
 * @property integer $id_status_jabatan
 * @property integer $id_jabatan
 * @property integer $id_unit_kerja
 * @property integer $id_satuan_kerja
 * @property string $lokasi_kerja
 * @property string $nomor_sk_jabatan
 * @property string $tanggal_sk_jabatan
 * @property string $tanggal_mulai_jabatan
 * @property string $tanggal_selesai_jabatan
 * @property integer $id_eselon
 * @property string $tmt_eselon
 * @property string $foto
 */
class Pegawai extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_data_pegawai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nip, nip_lama, no_kartu_pegawai, nama_pegawai, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, usia, status_pegawai, tanggal_pengangkatan_cpns, alamat, no_npwp, kartu_askes_pegawai, status_pegawai_pangkat, id_golongan, nomor_sk_pangkat, tanggal_sk_pangkat, tanggal_mulai_pangkat, tanggal_selesai_pangkat, id_status_jabatan, id_jabatan, id_unit_kerja, id_satuan_kerja, lokasi_kerja, nomor_sk_jabatan, tanggal_sk_jabatan, tanggal_mulai_jabatan, tanggal_selesai_jabatan, id_eselon, tmt_eselon, foto', 'required'),
			array('id_golongan, id_status_jabatan, id_jabatan, id_unit_kerja, id_satuan_kerja, id_eselon', 'numerical', 'integerOnly'=>true),
			array('nip, nip_lama, no_kartu_pegawai, kartu_askes_pegawai, lokasi_kerja, foto', 'length', 'max'=>100),
			array('nama_pegawai, tempat_lahir', 'length', 'max'=>150),
			array('tanggal_lahir, agama, status_pegawai, tanggal_pengangkatan_cpns, status_pegawai_pangkat, nomor_sk_pangkat, tanggal_sk_pangkat, tanggal_mulai_pangkat, tanggal_selesai_pangkat, nomor_sk_jabatan, tanggal_sk_jabatan, tanggal_mulai_jabatan, tanggal_selesai_jabatan, tmt_eselon', 'length', 'max'=>50),
			array('jenis_kelamin', 'length', 'max'=>20),
			array('usia', 'length', 'max'=>10),
			array('no_npwp', 'length', 'max'=>75),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pegawai, nip, nip_lama, no_kartu_pegawai, nama_pegawai, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, usia, status_pegawai, tanggal_pengangkatan_cpns, alamat, no_npwp, kartu_askes_pegawai, status_pegawai_pangkat, id_golongan, nomor_sk_pangkat, tanggal_sk_pangkat, tanggal_mulai_pangkat, tanggal_selesai_pangkat, id_status_jabatan, id_jabatan, id_unit_kerja, id_satuan_kerja, lokasi_kerja, nomor_sk_jabatan, tanggal_sk_jabatan, tanggal_mulai_jabatan, tanggal_selesai_jabatan, id_eselon, tmt_eselon, foto', 'safe', 'on'=>'search'),
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
			'Eselon'=>array(self::BELONGS_TO,'Eselon','id_eselon'),
			'Golongan'=>array(self::BELONGS_TO,'Golongan','id_golongan'),
			'Jabatan'=>array(self::BELONGS_TO,'Jabatan','id_jabatan'),
			'LokasiKerja'=>array(self::BELONGS_TO,'LokasiKerja','lokasi_kerja'),
			'SatuanKerja'=>array(self::BELONGS_TO,'SatuanKerja','id_satuan_kerja'),
			'StatusJabatan'=>array(self::BELONGS_TO,'StatusJabatan','id_status_jabatan'),
			'StatusPegawai'=>array(self::BELONGS_TO,'StatusPegawai','status_pegawai'),
			'UnitKerja'=>array(self::BELONGS_TO,'UnitKerja','id_unit_kerja'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pegawai' => 'Id Pegawai',
			'nip' => 'Nip',
			'nip_lama' => 'Nip Lama',
			'no_kartu_pegawai' => 'No Kartu Pegawai',
			'nama_pegawai' => 'Nama Pegawai',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
			'jenis_kelamin' => 'Jenis Kelamin',
			'agama' => 'Agama',
			'usia' => 'Usia',
			'status_pegawai' => 'Status Pegawai',
			'tanggal_pengangkatan_cpns' => 'Tanggal Pengangkatan Cpns',
			'alamat' => 'Alamat',
			'no_npwp' => 'No Npwp',
			'kartu_askes_pegawai' => 'Kartu Askes Pegawai',
			'status_pegawai_pangkat' => 'Status Pegawai Pangkat',
			'id_golongan' => 'Golongan',
			'nomor_sk_pangkat' => 'Nomor Sk Pangkat',
			'tanggal_sk_pangkat' => 'Tanggal Sk Pangkat',
			'tanggal_mulai_pangkat' => 'Tanggal Mulai Pangkat',
			'tanggal_selesai_pangkat' => 'Tanggal Selesai Pangkat',
			'id_status_jabatan' => 'Status Jabatan',
			'id_jabatan' => 'Jabatan',
			'id_unit_kerja' => 'Unit Kerja',
			'id_satuan_kerja' => 'Satuan Kerja',
			'lokasi_kerja' => 'Lokasi Kerja',
			'nomor_sk_jabatan' => 'Nomor Sk Jabatan',
			'tanggal_sk_jabatan' => 'Tanggal Sk Jabatan',
			'tanggal_mulai_jabatan' => 'Tanggal Mulai Jabatan',
			'tanggal_selesai_jabatan' => 'Tanggal Selesai Jabatan',
			'id_eselon' => 'Eselon',
			'tmt_eselon' => 'Tmt Eselon',
			'foto' => 'Foto',
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

		$criteria->compare('id_pegawai',$this->id_pegawai);
		$criteria->compare('nip',$this->nip,true);
		$criteria->compare('nip_lama',$this->nip_lama,true);
		$criteria->compare('no_kartu_pegawai',$this->no_kartu_pegawai,true);
		$criteria->compare('nama_pegawai',$this->nama_pegawai,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('agama',$this->agama,true);
		$criteria->compare('usia',$this->usia,true);
		$criteria->compare('status_pegawai',$this->status_pegawai,true);
		$criteria->compare('tanggal_pengangkatan_cpns',$this->tanggal_pengangkatan_cpns,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('no_npwp',$this->no_npwp,true);
		$criteria->compare('kartu_askes_pegawai',$this->kartu_askes_pegawai,true);
		$criteria->compare('status_pegawai_pangkat',$this->status_pegawai_pangkat,true);
		$criteria->compare('id_golongan',$this->id_golongan);
		$criteria->compare('nomor_sk_pangkat',$this->nomor_sk_pangkat,true);
		$criteria->compare('tanggal_sk_pangkat',$this->tanggal_sk_pangkat,true);
		$criteria->compare('tanggal_mulai_pangkat',$this->tanggal_mulai_pangkat,true);
		$criteria->compare('tanggal_selesai_pangkat',$this->tanggal_selesai_pangkat,true);
		$criteria->compare('id_status_jabatan',$this->id_status_jabatan);
		$criteria->compare('id_jabatan',$this->id_jabatan);
		$criteria->compare('id_unit_kerja',$this->id_unit_kerja);
		$criteria->compare('id_satuan_kerja',$this->id_satuan_kerja);
		$criteria->compare('lokasi_kerja',$this->lokasi_kerja,true);
		$criteria->compare('nomor_sk_jabatan',$this->nomor_sk_jabatan,true);
		$criteria->compare('tanggal_sk_jabatan',$this->tanggal_sk_jabatan,true);
		$criteria->compare('tanggal_mulai_jabatan',$this->tanggal_mulai_jabatan,true);
		$criteria->compare('tanggal_selesai_jabatan',$this->tanggal_selesai_jabatan,true);
		$criteria->compare('id_eselon',$this->id_eselon);
		$criteria->compare('tmt_eselon',$this->tmt_eselon,true);
		$criteria->compare('foto',$this->foto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pegawai the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
