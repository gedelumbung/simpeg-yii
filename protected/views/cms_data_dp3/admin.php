<?php
/* @var $this Cms_data_dp3Controller */
/* @var $model Dp3 */

$this->breadcrumbs=array(
	'Dp3'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$id)),
	array('label'=>'Data Dp3', 'url'=>array('index', 'id'=>$id)),
	array('label'=>'Tambah Dp3', 'url'=>array('create', 'id'=>$id)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dp3-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $id)); ?></h4>
<h3>Data Dp3</h3>

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
	'id'=>'dp3-grid',
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
		'tahun',
		'kesetiaan',
		'prestasi',
		'tanggung_jawab',
		/*
		'ketaatan',
		'kejujuran',
		'kerjasama',
		'prakarsa',
		'kepemimpinan',
		'rata_rata',
		'atasan',
		'penilai',
		'mengetahui',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div></div>
