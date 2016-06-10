<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" >
        <title> <?= $this->webTitle . _WEB_TITLE_ ?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link href="<?= $this->CSSPath ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= $this->CSSPath ?>/fontawesome/css/font-awesome.min.css"  rel="stylesheet">
        <link href="<?= $this->CSSPath ?>animate.css" rel="stylesheet">
        <link href="<?= $this->CSSPath ?>main.css" rel="stylesheet">
        <script type="text/javascript" src="<?= $this->JSPath ?>jquery-1.12.3.min.js"></script>
        <script type="text/javascript" src="<?= $this->CSSPath ?>bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= $this->JSPath ?>main.js"></script>
        <script>
            $(function () {
                $('#<?= $this->ActiveManu ?>').addClass('active');
            });
            $('');
        </script>

    </head>   
    <body> 

        <nav class="navbar navbar-default ">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= URL ?>">   <?= _WEB_TITLE_ ?> </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li id="index"><a href="<?= URL ?>">หน้าแรก <span class="sr-only">(current)</span></a></li>                        
                        <li id="food"><a href="<?= URL ?>food/">เมนูอาหาร</a></li> 
                        <li id="water"><a href="<?= URL ?>water/">เมนูเครื่องดื่ม</a></li> 
                        <li id="manage"><a href="<?= URL ?>manage/"> จัดการระบบ </a></li> 
                        <li id="user"><a href="<?= URL ?>user/"> ผู้ใช้งาน</a></li>
                        
                          <li id="user"><a href="<?= URL ?>order/"> สั่งอาหาร </a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">                        
                        <li class="dropdown">
                            <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user"></i> ประวิทย์ <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container">