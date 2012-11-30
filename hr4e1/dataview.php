<?php
session_start();
include "includes/form.php";
include "class/functions.php";
include 'includes/connection.php';
include 'class/administrator.php';
include 'class/teacher.php';
include 'class/school.php';
include 'class/teachers_cv.php';
$funct=new functions();


?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>HR4E</title>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="css/dataentry.css" type="text/css" />
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
        <div align='center'>
            <div class='main'>
                
                <div class="row-fluid" id="banner">
                    <div class="span12">
                      <div class="navbar navbar-inverse ">
                <div class="navbar-inner">
                    <a class="brand" href="#"><strong>HR4E</strong></a>
                  <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Data Entry</a></li>
                    <li><a href="#">Data View</a></li>
                    
                  </ul>
                    <form class="form-search navbar-search pull-left">
                        <div class='input-append'>
                    <input type="text" class="search-query" id='appendedInput' placeholder="Search">
                    <span class='add-on'><a href='#'><i class='icon-search'></i></a></span>
                        </div>
                  </form>
                </div>
              </div>  
                    </div>
                </div>
                <div class="row-fluid" id="heading">
                    <div class="span12">
                     <?php  
                     $dat = date("d M Y");
                    $userdrp =" <div class=\"btn-group\"><button class=\"btn btn-primary btn-small dropdown-toggle\" data-toggle=\"dropdown\">
    <i class='icon-user icon-white'></i>
  </button>
  
  
  <ul class=\"dropdown-menu pull-right\" >
    <li><a href='#'><i class='icon-pencil'></i> edit account</a></li>
    <li><a href='#'><i class='icon-lock'></i> Change password</a></li>
    <li><a href='index.php'><i class='icon-off'></i> Logout</a></li>
  </ul>
</div>";
                      echo "<div class='span4'><p>$userdrp Welcome {$_SESSION['fname']} {$_SESSION['mname']} {$_SESSION['lname']}</p></div>";
                      echo "<div class='span4'>Time</div><div class='span4'>$dat</div>";
                     ?>
                    </div>
                </div>
             
                <div class="row-fluid" id="contents">
                    <div class="span12">
                   <?php if($_GET['page']=="teacher"){
                       $tea = new teacher($_GET['id']);
                  
?>  
                    <div class="tabbable">  
                    <ul class="nav nav-tabs">  
                    <li class="active"><a href="#1" data-toggle="tab">Basic Information</a></li>  
                    <li class=""><a href="#2" data-toggle="tab">Contact &amp; Address</a></li>  
                    <li class=""><a href="#3" data-toggle="tab">Work Information</a></li>
                    <li class=""><a href="#4" data-toggle="tab">Teachers cv</a></li>
                    </ul>  
                    <div class="tab-content">  
                    <div class="tab-pane fade in active" id="1">  
                    <?php $tea->viewBasicInfo(); ?>  
                    </div>  
                    <div class="tab-pane fade" id="2">  
                    <?php $tea->viewContactInfo() ?>

                    </div>  
                    <div class="tab-pane fade" id="3">  
                    <?php $tea->viewWorkInfo(); ?> 
                    </div> 
                    <div class="tab-pane fade" id="4">  
                    <?php $tea->viewTeachers_cv(); ?> 
                    </div> 
                    </div>
 </div>
                        <?php }  if($_GET['page']=="admin"){
                       $tea = new administrator($_GET['id']);
                  
?>  
                    <div class="tabbable">  
                    <ul class="nav nav-tabs">  
                    <li class="active"><a href="#1" data-toggle="tab">Basic Information</a></li>  
                    <li class=""><a href="#2" data-toggle="tab">Contact &amp; Address</a></li>
                    </ul>  
                    <div class="tab-content">  
                    <div class="tab-pane active" id="1">  
                    <?php $tea->viewAdminBasicInfo(); ?>  
                    </div>  
                    <div class="tab-pane" id="2">  
                    <?php $tea->viewAdminContactInfo() ?>
                    </div>  
                    </div>
 </div>
                        <?php }  if($_GET['page']=="school"){
                       $tea = new school($_GET['id']);
                  
?>  
                    <div class="tabbable">  
                    <ul class="nav nav-tabs">  
                    <li class="active"><a href="#1" data-toggle="tab">School Information</a></li> 
                    </ul>  
                    <div class="tab-content">  
                    <div class="tab-pane active" id="1">  
                    <?php $tea->viewSchoolInfo(); ?>  
                    </div> 
                    </div>
 </div>
                        <?php } ?>
                        
                </div>  
                </div>
                
                <div class="row-fluid" id="footer">
                    <div class="span12">
                        <footer>&COPY; HR4E by josee</footer>  
                    </div>
                </div>
                
            </div>
        </div>
    <?php echo $funct->makeSchoolDropdown(); ?>
    </body>
</html>
