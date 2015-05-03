<div class="well">
<h2>View Ticket #<?php echo $model->ticket_id; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ticket_id',
		'date',
		array(
			"label"=>"Issue",
			"name"=>"issue",
			"type"=>"raw",
			"value"=>$model->issue),
		'status',
		'last_update',
		array(
			"label"=>"Issued By",
			"name"=>"full_name",
			"type"=>"raw",
			"value"=>$model->full_name),
		'email',
		'telephone',
		'priority',
	),
)); ?>
</div>