<?php

class SiteController extends Controller
{
        /**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
    
    
	public function actionIndex()
	{
            $model = new Bettings();
            $model = Bettings::model()->findAll('id>0');
            $this->render('index', array('model'=> $model));
	}
        
        /**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
        
        
        /**
	 * Displays the login page
	 */
	public function actionLogin()
	{
           $request = Yii::app()->request;
           
           if ($request->isAjaxRequest) {
               $this->widget('Login');
               //print_r($this->widget('Registration'));
           }

	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
        
       public function actionTest () {
           $request = Yii::app()->request;
           if ($request->isAjaxRequest) {
               $this->widget('Registration');
               //print_r($this->widget('Registration'));
           }
       }
       
       public function actionVer () {
           $request = Yii::app()->request;
           if ($request->isAjaxRequest) {
               $this->widget()->runs();
               //print_r($this->widget('Registration'));
           }
       }
       
}