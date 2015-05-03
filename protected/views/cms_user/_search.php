<div class="search-form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions' => array('class'=>'navbar-form pull-right'),
)); ?>

		<?php echo $form->textField($model,'nama',array("placeholder"=>"Search by Name,,,")); ?>
		<?php echo $form->textField($model,'username',array("placeholder"=>"Search by Username,,,")); ?>
		<?php echo CHtml::submitButton('Search', array("class"=>"btn btn-primary")); ?>

<?php $this->endWidget(); ?>
</div>