<?php
/* @var $this SportsController */
/* @var $model Sports */

$this->breadcrumbs=array(
	'Sports'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sports', 'url'=>array('index')),
	array('label'=>'Create Sports', 'url'=>array('create')),
	array('label'=>'View Sports', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sports', 'url'=>array('admin')),
);
?>

<h1>Update Sports <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>