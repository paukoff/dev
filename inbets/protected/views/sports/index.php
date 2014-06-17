<?php
/* @var $this SportsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sports',
);

$this->menu=array(
	array('label'=>'Create Sports', 'url'=>array('create')),
	array('label'=>'Manage Sports', 'url'=>array('admin')),
);
?>

<h1>Sports</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
