<div class="well">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ticket-form',
	'enableClientValidation'=>true,
	'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

<fieldset>
	<legend>Submit New Ticket</legend>

		<?php echo $form->labelEx($model,'full_name'); ?>
		<?php echo $form->textField($model,'full_name',array('size'=>50,'maxlength'=>50,'class'=>'span11')); ?>
		<?php echo $form->error($model,'full_name'); ?>

		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50,'class'=>'span11')); ?>
		<?php echo $form->error($model,'email'); ?>

		<?php echo $form->labelEx($model,'telephone'); ?>
		<?php echo $form->textField($model,'telephone',array('size'=>30,'maxlength'=>30,'class'=>'span11')); ?>
		<?php echo $form->error($model,'telephone'); ?>

		<?php echo $form->labelEx($model,'issue'); ?>
		<?php $this->widget('ext.redactorjs.ERedactorWidget',array(
		    'model'=>$model,
		    'attribute'=>"issue",
		)); ?>
		<?php echo $form->error($model,'issue'); ?>

		<?php echo $form->labelEx($model,'priority'); ?>
        <?php echo $form->dropDownList($model,'priority',array("Normal"=>"Normal","High"=>"High"),array('empty'=>'Select priority')); ?>
		<?php echo $form->error($model,'priority'); ?>

		<?php if(CCaptcha::checkRequirements()): ?>
			<div class="control-group">
			  <?php echo $form->labelEx($model,'verifyCode', array("class" => "control-label")); ?>
			  <div class="controls">
			    <div style="width:230px; margin-bottom:5px;">
			    <?php $this->widget('CCaptcha'); ?>
			    </div>
			    <?php echo $form->textField($model,'verifyCode'); ?>
			  </div>
			<?php echo $form->error($model,'verifyCode'); ?>
			</div>
		<?php endif; ?>

		<?php echo CHtml::submitButton('Submit Ticket',array("class"=>"btn btn-primary")); ?>

</fieldset>

<?php $this->endWidget(); ?>
</div>