<?php
/* @var $this Cms_pegawaiController */
/* @var $model Pegawai */

$this->breadcrumbs=array(
	'Pegawai'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Data Pegawai', 'url'=>array('index')),
	array('label'=>'Tambah Pegawai', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pegawai-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data Pegawai</h3>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
<?php echo CHtml::link('<i class=\'icon icon-white icon-search\'></i> Advanced Search','#',array('class'=>'search-button btn btn-sm btn-primary')); ?></div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pegawai-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search(),
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
	     array(
	      'header'=>'No',
	      'type'=>'raw',
	      'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
	      ),
		'nip',
		'nama_pegawai',
		array(
				'header' => 'Golongan',
				'value' => '$data->Golongan->golongan'
			),
		array(
				'header' => 'Status Pegawai',
				'value' => '$data->StatusPegawai->nama_status'
			),
		/*
		'tanggal_lahir',
		'jenis_kelamin',
		'agama',
		'usia',
		'status_pegawai',
		'tanggal_pengangkatan_cpns',
		'alamat',
		'no_npwp',
		'kartu_askes_pegawai',
		'status_pegawai_pangkat',
		'id_golongan',
		'nomor_sk_pangkat',
		'tanggal_sk_pangkat',
		'tanggal_mulai_pangkat',
		'tanggal_selesai_pangkat',
		'id_status_jabatan',
		'id_jabatan',
		'id_unit_kerja',
		'id_satuan_kerja',
		'lokasi_kerja',
		'nomor_sk_jabatan',
		'tanggal_sk_jabatan',
		'tanggal_mulai_jabatan',
		'tanggal_selesai_jabatan',
		'id_eselon',
		'tmt_eselon',
		'foto',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div>
