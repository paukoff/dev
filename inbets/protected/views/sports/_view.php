<?php
/* @var $this SportsController */
/* @var $data Sports */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sports_name')); ?>:</b>
	<?php echo CHtml::encode($data->sports_name); ?>
	<br />


</div>