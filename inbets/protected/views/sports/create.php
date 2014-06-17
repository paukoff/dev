<?php
/* @var $this SportsController */
/* @var $model Sports */

$this->breadcrumbs=array(
	'Sports'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sports', 'url'=>array('index')),
	array('label'=>'Manage Sports', 'url'=>array('admin')),
);
?>

<h1>Create Sports</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>