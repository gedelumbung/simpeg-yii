<?php
/**
 * This is the template for generating the create view for crud.
 * The following variables are available in this template:
 * - $ID: the primary key name
 * - $modelClass: the model class name
 * - $columns: a list of column schema objects
 */
?>
<?php
echo "<?php\n";
$label=$this->class2name($modelClass,true);
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Create',
);\n";
?>

$this->menu=array(
	array('label'=>'List <?php echo $this->class2name($modelClass,true); ?>', 'url'=>array('index')),
	array('label'=>'Manage <?php echo $this->class2name($modelClass,true); ?>', 'url'=>array('admin')),
);
?>

<h1>Create <?php echo $this->class2name($modelClass,true); ?></h1>

<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
