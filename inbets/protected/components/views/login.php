<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'users-login-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // See class documentation of CActiveForm for details on this,
    // you need to use the performAjaxValidation()-method described there.
    'enableAjaxValidation'=>true,
    'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

        <?php echo $form->textField($login,'phone', array('class' => 'form-control', 'placeholder' => 'Введите логин')); ?>
        <?php echo $form->textField($login,'password', array('class' => 'form-control', 'placeholder' => 'Введите пароль')); ?>

        <?php echo CHtml::ajaxSubmitButton('Вход', 
                array('/site/login'), 
                array('update' => '#users-login-form', 'type' => 'POST'), 
                array('class' => 'btn btn-primary btn-block')); 
        ?>
    
        

<?php $this->endWidget(); ?>


</div><!-- form -->