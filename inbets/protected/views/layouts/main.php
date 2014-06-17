<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta charset="UTF-8">
        <meta content='320' name='MobileOptimized'>
        <meta content='width=1100' name='viewport'>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script> 
        <script>
            $(document).ready(function() {
                $('.opens').click(function() {
                   $('.panel-sidebar').animate({
                            width : 200,
                            marginLeft: -200
                        }, 700);
                   $('.overlay').css('display', 'block');
                   $('.opens').removeClass('opens').addClass('closes');
                });
                $('.overlay, .closes').click(function() {
                   $('.panel-sidebar').animate({width: "0", marginLeft: "0"}, 700);
                   $('.overlay').css('display', 'none');
                   $('.closes').removeClass('closes').addClass('opens');
                });
            });
        </script>
    </head>
    <body>
        <div class="container height">
            <div class="row height">
                <div class="col-xs-3 sidebar-wrap">
                    <div class="sidebar-l">
                        <div class="logo">
                            <a href="/">Inbets.ru</a>
                        </div>
                        <ul>
                            <li>
                                <a href="">Вася</a>
                            </li>
                            <li>
                                <a href="">Вася</a>
                            </li>
                            <li>
                                <a href="">Вася</a>
                            </li>
                            <li>
                                <a href="">Вася</a>
                            </li>
                            <li>
                                <a href="">Вася</a>
                            </li>
                        </ul>
                        
                    </div>                   
                </div>
                <div class="col-xs-8 padding-fix">
                    <div class="row">
                        <div class="col-xs-12 fixed-top">
                            <div class="topfix">
                                 f
                            </div> 
                        </div>
                    </div>
                    <div class="row height">
                        <div class="col-xs-12 main">
                            
                            <?php echo $content; ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-1 sidebar-r-w">
                    <div class="sidebar-r">
                        
                        <div class="settings opens">
                            
                        </div>
                    </div>                   
                    <div class="panel-sidebar">
                        <div class="wrap-autoriz">
                            <span class="autoriz">Авторизация</span>
                            <?php 
                            $this->widget('application.components.Login'); 
                            
                            ?>
                        </div>
                        <div class="wrap-registr">
                            <?php 
                            $this->widget('application.components.Registration'); 
                            
                            ?>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
    </body>
</html>
