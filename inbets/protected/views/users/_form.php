<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nikname'); ?>
		<?php echo $form->textField($model,'nikname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nikname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'count_bet'); ?>
		<?php echo $form->textField($model,'count_bet'); ?>
		<?php echo $form->error($model,'count_bet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'win_bet'); ?>
		<?php echo $form->textField($model,'win_bet'); ?>
		<?php echo $form->error($model,'win_bet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'loose_bet'); ?>
		<?php echo $form->textField($model,'loose_bet'); ?>
		<?php echo $form->error($model,'loose_bet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'return_bet'); ?>
		<?php echo $form->textField($model,'return_bet'); ?>
		<?php echo $form->error($model,'return_bet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rate'); ?>
		<?php echo $form->textField($model,'rate'); ?>
		<?php echo $form->error($model,'rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'balance'); ?>
		<?php echo $form->textField($model,'balance'); ?>
		<?php echo $form->error($model,'balance'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->