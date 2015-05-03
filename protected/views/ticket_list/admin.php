<div class="well">
    <div class="row">
    <div class="span">
      <h3><?php echo $GLOBALS['site_title']; ?></h3>
      <p><?php echo $GLOBALS['site_quotes']; ?></p>
    </div>
    </div>
  </div>

  <div class="well">
  <div class="navbar navbar-inverse">
    <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="#">Ticket List</a>
      <div class="nav-collapse">
      <ul class="nav">
        <li><a href="<?php echo Yii::app()->baseUrl; ?>/new_ticket"><i class="icon-plus-sign icon-white"></i> Submit New Ticket</a></li>
      </ul>
      </div>
    <div class="span6 pull-right">
		<?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
    </div>
    </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
  
    <section>
	<?php
		Yii::app()->clientScript->registerScript('search', "
		$('.search-button').click(function(){
			$('.search-form').toggle();
			return false;
		});
		$('.search-form form').submit(function(){
			$('#ticket-grid').yiiGridView('update', {
				data: $(this).serialize()
			});
			return false;
		});
		");
	?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ticket-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    'pager' => array('cssFile' => Yii::app()->theme->baseUrl.'/css/gridView.css'),
	'columns'=>array(
		'date',
		'ticket_id',
		array(
			"header"=>"Issue",
			"name"=>"issue",
			"type"=>"raw",
      		'value' => 'substr($data->issue, 0,50).",,,"',
			),
		array(
			"header"=>"Issued By",
			"name"=>"full_name",
			"value"=>$model->full_name),
		'status',
		'last_update',
		array(
			"header"=>"View",
			'class'=>'CButtonColumn',
			'template'=>'{view}'
		),
	),
)); ?>
  
  

</section>
	
    </div>


