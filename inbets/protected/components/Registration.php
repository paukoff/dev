<?php

class Registration extends CWidget {
    
    private $verify_cod;
    
   public function run() {
        $models = new Users();
       
        $request = Yii::app()->request;
        
        if ($request->isAjaxRequest) {
          
            if(isset($_POST['Users'])) {
                $this->verify_cod = 111;
                
                $models->attributes = $_POST['Users'];
                
                if($models->validate())
                {
                    $models->verivicationPhone ($models->attributes['phone'], $this->verify_cod);
                    // Сохранить полученные данные
                    // false нужен для того, чтобы не производить повторную проверку
                    //$models->save(false);
                    $this->render('_veryfycation', array('models'=>$models));    
                } else {
                    
                    $this->render('registration', array('models'=>$models));
                    
                }
                
            }   
            
        } else {
            $this->render('registration', array('models'=>$models));
        }
    }   
    
}