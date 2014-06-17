<?php
class Login extends CWidget {
    
    public function run () {
        
        $model=new LoginForm();
        
            $request = Yii::app()->request;
           
            if ($request->isAjaxRequest) {
                if(isset($_POST['LoginForm']))
                {
                        $model->attributes=$_POST['LoginForm'];
                        // validate user input and redirect to the previous page if valid
                        if($model->validate() && $model->login()) {
                                $this->redirect(Yii::app()->user->returnUrl);           
                        } else {
                             $this->render('login', array('login' => $model));
                        }
                } 
                
            } else {
                $this->render('login', array('login'=>$model));
            }
    }
}