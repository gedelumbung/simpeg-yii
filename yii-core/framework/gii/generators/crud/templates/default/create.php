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
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Create',
);\n";
?>

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$id)),
	array('label'=>'Data <?php echo $this->class2name($this->modelClass); ?>', 'url'=>array('index', 'id'=>$id)),
);
?>

<h3>Create <?php echo $this->class2name($this->modelClass); ?></h3>

<?php echo "<?php \$this->renderPartial('_form', array('model'=>\$model,'id'=>\$id)); ?>"; ?>
