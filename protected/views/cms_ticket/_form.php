
<fieldset>
	<legend>Ticket List</legend>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ticket-cms-form',
	'enableAjaxValidation'=>true,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	
		<?php echo $form->labelEx($model,'ticket_id'); ?>
		<?php echo $form->textField($model,'ticket_id',array('size'=>15,'maxlength'=>15,'readonly'=>'true','class'=>'span10')); ?>
		<?php echo $form->error($model,'ticket_id'); ?>
	
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date',array('size'=>30,'maxlength'=>30,'readonly'=>'true','class'=>'span10')); ?>
		<?php echo $form->error($model,'date'); ?>
	
		<?php echo $form->labelEx($model,'last_update'); ?>
		<?php echo $form->textField($model,'last_update',array('size'=>30,'maxlength'=>30,'readonly'=>'true','class'=>'span10')); ?>
		<?php echo $form->error($model,'last_update'); ?>

		<?php echo $form->labelEx($model,'issue'); ?>
		<?php $this->widget('ext.redactorjs.ERedactorWidget',array(
		    'model'=>$model,
		    'attribute'=>"issue",
		)); ?>
		<?php echo $form->error($model,'issue'); ?>

		<?php echo $form->labelEx($model,'status'); ?>
        <?php echo $form->dropDownList($model,'status',array("Open"=>"Open","On Going"=>"On Going","Closed"=>"Closed"),array('empty'=>'Select status')); ?>
		<?php echo $form->error($model,'status'); ?>
	
		<?php echo $form->labelEx($model,'full_name'); ?>
		<?php echo $form->textField($model,'full_name',array('size'=>50,'maxlength'=>50,'class'=>'span10')); ?>
		<?php echo $form->error($model,'full_name'); ?>
	
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50,'class'=>'span10')); ?>
		<?php echo $form->error($model,'email'); ?>
	
		<?php echo $form->labelEx($model,'telephone'); ?>
		<?php echo $form->textField($model,'telephone',array('size'=>30,'maxlength'=>30,'class'=>'span10')); ?>
		<?php echo $form->error($model,'telephone'); ?>

		<?php echo $form->labelEx($model,'priority'); ?>
        <?php echo $form->dropDownList($model,'priority',array("Normal"=>"Normal","High"=>"High"),array('empty'=>'Select priority')); ?>
		<?php echo $form->error($model,'priority'); ?>
	
		<div class="control-group">
			<?php echo CHtml::submitButton('Submit Ticket',array("class"=>"btn btn-primary")); ?>
		</div>

<?php $this->endWidget(); ?>

</fieldset>
