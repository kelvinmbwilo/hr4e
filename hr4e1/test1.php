<?php
session_start();
include "includes/form.php";
include "class/functions.php";
include 'includes/connection.php';
include 'class/administrator.php';
include 'class/teacher.php';
include 'class/school.php';
include 'class/teachers_cv.php';
$admin =new administrator('kelvinmbwilo@gmail.com');

$funct=new functions();
$form = new form();
$teacher = new teacher("gffgh");
$school = new school('1893');

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
        <div style="width: 500px;">
                        <?php
                        
                        //echo $school->editSchool();
                        //echo $teacher->viewTeachers_cv();
                        //echo $teacher->viewBasicInfo();
                       // echo $teacher->deleteTeache();
                       // echo $admin->editAdministrator();
                      //echo $funct->searchTeacher("edit");
                        $ar = array ("first_name","middle_name","last_name");
                    echo $funct->lists("SELECT * FROM teacher ORDER BY first_name", "first_name",$ar);
                    //$funct->addteacher1();
                      // echo $funct->makeSchoolDropdown();
                        //echo $admin->viewAdminContactInfo();?>
           
        </div>           
                    
           
    </body>
</html>
