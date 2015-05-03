<div class="search-form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions' => array('class'=>'navbar-form pull-right'),
)); ?>

		<?php echo $form->textField($model,'ticket_id',array("placeholder"=>"Search by Ticket ID,,,")); ?>
		<?php echo $form->textField($model,'issue',array("placeholder"=>"Search by Issue,,,")); ?>
		<?php echo CHtml::submitButton('Search', array("class"=>"btn btn-primary")); ?>

<?php $this->endWidget(); ?>
</div>