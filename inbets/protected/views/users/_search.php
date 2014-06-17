<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nikname'); ?>
		<?php echo $form->textField($model,'nikname',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'count_bet'); ?>
		<?php echo $form->textField($model,'count_bet'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'win_bet'); ?>
		<?php echo $form->textField($model,'win_bet'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loose_bet'); ?>
		<?php echo $form->textField($model,'loose_bet'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'return_bet'); ?>
		<?php echo $form->textField($model,'return_bet'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rate'); ?>
		<?php echo $form->textField($model,'rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'balance'); ?>
		<?php echo $form->textField($model,'balance'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->