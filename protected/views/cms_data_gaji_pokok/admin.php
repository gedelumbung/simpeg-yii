<?php
/* @var $this Cms_data_gaji_pokokController */
/* @var $model GajiPokok */

$this->breadcrumbs=array(
	'Gaji Pokok'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$id)),
	array('label'=>'Data Gaji Pokok', 'url'=>array('index', 'id'=>$id)),
	array('label'=>'Tambah Gaji Pokok', 'url'=>array('create', 'id'=>$id)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#gaji-pokok-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $id)); ?></h4>
<h3>Data Gaji Pokok</h3>

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
	'id'=>'gaji-pokok-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'dataProvider'=>$model->search($id),
   'template'=>'{items}{pager}<br>{summary}',
	'columns'=>array(
	     array(
	      'header'=>'No',
	      'type'=>'raw',
	      'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
	      ),
		'Pegawai.nama_pegawai',
		'Golongan.golongan',
		'tanggal_sk',
		'dasar_perubahan',
		/*
		'gaji_pokok',
		'tanggal_mulai',
		'tanggal_selesai',
		'masa_kerja',
		'pejabat_menetapkan',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div>
