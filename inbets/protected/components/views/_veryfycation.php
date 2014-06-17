<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">
<span class="autoriz">Валидация</span>
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'users-registration-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // See class documentation of CActiveForm for details on this,
    // you need to use the performAjaxValidation()-method described there.
    'enableAjaxValidation'=>true,
)); ?>

        <?php echo $form->textField($models,'verify_code', array('class' => 'form-control', 'placeholder' => 'Введите код')); ?>

        <?php echo CHtml::ajaxSubmitButton('Получить код', 
                array('/site/ver'), 
                array('update' => '.form', 'type' => 'POST'), 
                array('class' => 'btn btn-primary btn-block')); 
        ?>
        
        <?php print_r($models->attributes); ?>

<?php $this->endWidget(); ?>


</div><!-- form -->

