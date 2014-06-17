<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nikname')); ?>:</b>
	<?php echo CHtml::encode($data->nikname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('count_bet')); ?>:</b>
	<?php echo CHtml::encode($data->count_bet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('win_bet')); ?>:</b>
	<?php echo CHtml::encode($data->win_bet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loose_bet')); ?>:</b>
	<?php echo CHtml::encode($data->loose_bet); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('return_bet')); ?>:</b>
	<?php echo CHtml::encode($data->return_bet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate')); ?>:</b>
	<?php echo CHtml::encode($data->rate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('balance')); ?>:</b>
	<?php echo CHtml::encode($data->balance); ?>
	<br />

	*/ ?>

</div>