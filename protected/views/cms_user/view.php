<div class="well">

<h2>View UserCms #<?php echo $model->id; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'nama',
		'email',
	),
)); ?>

</div>
