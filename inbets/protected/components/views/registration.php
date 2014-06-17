<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">
<span class="autoriz">Регистрация</span>
<div id="tests">
    
</div>
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'users-registration-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // See class documentation of CActiveForm for details on this,
    // you need to use the performAjaxValidation()-method described there.
    'enableAjaxValidation'=>true,
    'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),

)); ?>

        <?php echo $form->textField($models,'nikname', array('class' => 'form-control', 'placeholder' => 'Введите логин')); ?>
        <?php echo $form->textField($models,'phone', array('class' => 'form-control', 'placeholder' => 'Введите телефон')); ?>

        <?php echo $form->textField($models,'password', array('class' => 'form-control', 'placeholder' => 'Введите пароль')); ?>

        <?php echo CHtml::ajaxSubmitButton('Получить код', 
                array('/site/test'), 
                array('update' => '#users-registration-form', 'type' => 'POST'), 
                array('class' => 'btn btn-primary btn-block')); 
        ?>
        
        <?php print_r($models->attributes); ?>

<?php $this->endWidget(); ?>


</div><!-- form -->

