<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$nameColumn=$this->guessNameColumn($this->tableSchema->columns);
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	\$model->{$nameColumn}=>array('view','id'=>\$model->{$this->tableSchema->primaryKey}),
	'Update',
);\n";
?>

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data <?php echo$this->class2name($this->modelClass); ?>', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah <?php echo$this->class2name($this->modelClass); ?>', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Detail <?php echo$this->class2name($this->modelClass); ?>', 'url'=>array('view', 'id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
);
?>

<h3>Update <?php echo$this->class2name($this->modelClass)." <?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?></h3>

<?php echo "<?php \$this->renderPartial('_form', array('model'=>\$model,'id'=>\$model->id_pegawai)); ?>"; ?>