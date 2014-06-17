<?php
/* @var $this SportsController */
/* @var $model Sports */

$this->breadcrumbs=array(
	'Sports'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Sports', 'url'=>array('index')),
	array('label'=>'Create Sports', 'url'=>array('create')),
	array('label'=>'Update Sports', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sports', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sports', 'url'=>array('admin')),
);
?>

<h1>View Sports #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sports_name',
	),
)); ?>
