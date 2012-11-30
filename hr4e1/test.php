<?php
session_start();
include "includes/form.php";
include "class/functions.php";
include 'includes/connection.php';

$funct=new functions();
$form = new form();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>HR4E</title>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/skin1.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css" type="text/css" />
        <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/jquery.tools.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row-fluid">
                <div class="tabbable">
                <div class="span3">
                    
                </div>
                <div class="span9">
                         
                        <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab">Add Admin</a></li>
                        <li><a href="#tab2" data-toggle="tab">Add School</a></li>
                        <li><a href="#tab3" data-toggle="tab">Add Teacher</a></li>
                        <li><a href="index.php" data-toggle="tab">Logout</a></li>
                        </ul>
                        <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                        <?php echo $funct->addAdministrator(); ?>
                        </div>
                        <div class="tab-pane" id="tab2">
                        <?php echo $funct->addSchool(); ?>
                        </div>
                        <div class="tab-pane" id="tab3">
                        <?php //echo $funct->addTeacher(); 
                              
                        ?>
                        </div>
                        </div>
                    
                       
                </div>
            </div>
         </div>
        </div>
   
    </body>
</html>
