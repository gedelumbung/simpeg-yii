<?php
/* @var $this Cms_pegawaiController */
/* @var $model Pegawai */

$this->breadcrumbs=array(
	'Pegawai'=>array('index'),
	$model->id_pegawai,
);

$this->menu=array(
	array('label'=>'Data Pegawai', 'url'=>array('index')),
	array('label'=>'Tambah Pegawai', 'url'=>array('create')),
	array('label'=>'Edit Pegawai', 'url'=>array('update', 'id'=>$model->id_pegawai)),
	array('label'=>'Hapus Pegawai', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pegawai),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Pegawai #<?php echo $model->id_pegawai; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<header class="jumbotron subhead" id="overview">
  <div class="subnav">
	<ul class="nav nav-pills">
	  <li><a href="<?php echo Yii::app()->baseUrl;?>/cms_pegawai/update/<?php echo $model->id_pegawai; ?>">Pegawai</a></li>
	  <li><a href="<?php echo Yii::app()->baseUrl;?>/cms_data_keluarga/index/<?php echo $model->id_pegawai; ?>">Keluarga</a></li>
	  <li><a href="<?php echo Yii::app()->baseUrl;?>/cms_data_riwayat_pangkat/index/<?php echo $model->id_pegawai; ?>">Riwayat Pangkat</a></li>
	  <li><a href="<?php echo Yii::app()->baseUrl;?>/cms_data_riwayat_jabatan/index/<?php echo $model->id_pegawai; ?>">Riwayat Jabatan</a></li>
	  <li><a href="<?php echo Yii::app()->baseUrl;?>/cms_data_pendidikan/index/<?php echo $model->id_pegawai; ?>">Pendidikan</a></li>
	  <li><a href="<?php echo Yii::app()->baseUrl;?>/cms_data_pelatihan/index/<?php echo $model->id_pegawai; ?>">Pelatihan</a></li>
	  <li><a href="<?php echo Yii::app()->baseUrl;?>/cms_data_penghargaan/index/<?php echo $model->id_pegawai; ?>">Penghargaan</a></li>
	  <li><a href="<?php echo Yii::app()->baseUrl;?>/cms_data_seminar/index/<?php echo $model->id_pegawai; ?>">Seminar</a></li>
	  <li><a href="<?php echo Yii::app()->baseUrl;?>/cms_data_organisasi/index/<?php echo $model->id_pegawai; ?>">Organisasi</a></li>
	  <li><a href="<?php echo Yii::app()->baseUrl;?>/cms_data_gaji_pokok/index/<?php echo $model->id_pegawai; ?>">Gaji Pokok</a></li>
	  <li><a href="<?php echo Yii::app()->baseUrl;?>/cms_data_hukuman/index/<?php echo $model->id_pegawai; ?>">Hukuman</a></li>
	  <li><a href="<?php echo Yii::app()->baseUrl;?>/cms_data_dp3/index/<?php echo $model->id_pegawai; ?>">DP3</a></li>
	</ul>
  </div>
</header>
<div class="row">
<div class="span8">
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pegawai',
		'nip',
		'nip_lama',
		'no_kartu_pegawai',
		'nama_pegawai',
		'tempat_lahir',
		'tanggal_lahir',
		'jenis_kelamin',
		'agama',
		'usia',
		array(
				'label' => 'Status Pegawai',
				'value' => $model->StatusPegawai->nama_status,
			),
		'tanggal_pengangkatan_cpns',
		'alamat',
		'no_npwp',
		'kartu_askes_pegawai',
		'StatusPegawai.nama_status',
		array(
				'label' => 'Golongan',
				'value' => $model->Golongan->golongan,
			),
		'nomor_sk_pangkat',
		'tanggal_sk_pangkat',
		'tanggal_mulai_pangkat',
		'tanggal_selesai_pangkat',
		array(
				'label' => 'Status Jabatan',
				'value' => $model->StatusJabatan->nama_jabatan,
			),
		array(
				'label' => 'Jabatan',
				'value' => $model->Jabatan->nama_jabatan,
			),
		array(
				'label' => 'Unit Kerja',
				'value' => $model->UnitKerja->nama_unit_kerja,
			),
		array(
				'label' => 'Satuan Kerja',
				'value' => $model->SatuanKerja->nama_satuan_kerja,
			),
		array(
				'label' => 'Lokasi Kerja',
				'value' => $model->LokasiKerja->lokasi_kerja,
			),
		'nomor_sk_jabatan',
		'tanggal_sk_jabatan',
		'tanggal_mulai_jabatan',
		'tanggal_selesai_jabatan',
		array(
				'label' => 'Eselon',
				'value' => $model->Eselon->nama_eselon,
			),
		'tmt_eselon'
	),
)); ?>
</div>
</div>
<div class="span4">
<img src="<?php echo Yii::app()->baseUrl.'/media/pegawai/'.($model->foto === '' ? 'no-img.jpg' : $model->foto); ?>">
</div>
</div>
</div>
