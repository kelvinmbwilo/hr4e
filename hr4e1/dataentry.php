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
                    <div class="span3" id="links">
                        <ul class="nav nav-tabs nav-stacked">
                            <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Administrator</a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="dataentry.php?page=addAdmin" class=""><i class="icon-plus"></i> Add</a></li>
                                    <li><a tabindex="-1" href="dataentry.php?page=search&title=admin&action=edit"><i class="icon-pencil"></i> Adit </a></li>
                                    <li><a tabindex="-1" href="#"><i class="icon-trash"></i> Delete</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Teacher</a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="dataentry.php?page=addTeacher"><i class="icon-plus"></i> Add </a></li>
                                    <li><a tabindex="-1" href="dataentry.php?page=search&title=teacher&action=edit"><i class="icon-pencil"></i> Edit </a></li>
                                    <li><a tabindex="-1" href="dataentry.php?page=search&title=teacher&action=delete"><i class="icon-trash"></i> Delete</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Staff</a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="dataentry.php?page=addStaff"><i class="icon-plus"></i> Add </a></li>
                                    <li><a tabindex="-1" href=""><i class="icon-pencil"></i> edit </a></li>
                                    <li><a tabindex="-1" href="#"><i class="icon-trash"></i> Delete</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">School</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#"><i class="icon-plus"></i>Add</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="dataentry.php?page=addSchool"> Primary School </a></li>
                                            <li><a tabindex="-1" href="dataentry.php?page=addSchool"> Secondary School </a></li>
                                        </ul>
                                    </li>
                                    <li><a tabindex="-1" href="dataentry.php?page=search&title=school&action=edit"><i class="icon-pencil"></i> Edit </a></li>
                                    <li><a tabindex="-1" href="dataentry.php?page=search&title=school&action=delete"><i class="icon-trash"></i> Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="span9" id="maincontents">
                      <?php
                        if($_GET['page']== "addSchool"){
                            echo $funct->addSchool();
                        }
                        if($_GET['page']== "addTeacher"){
                            echo $funct->addTeacher();
                        }
                        if($_GET['page']== "addAdmin"){
                            echo $funct->addAdministrator();
                        }
                        if($_GET['page']== "addStaff"){
                            echo $funct->addStaff();
                        }
                        if($_GET['page'] == "delete"){
                            if($_GET['title'] == "teacher"){
                                $teach = new teacher($_GET['id']);
                                $teach->deleteTeacher();
                            }
                            if($_GET['title'] == "school"){
                                $schol = new school($_GET['id']);
                                $schol->deleteSchool();
                            }
                            if($_GET['title'] == "admin"){
                                $staf = new administrator($_GET['id']);
                                $staf->editAdministrator();
                            }      
                        }
                        if($_GET['page'] == "edit"){
                            if($_GET['title'] == "teacher"){
                                $teach = new teacher($_GET['id']);
                                $teach->editTeacher();
                            }
                            if($_GET['title'] == "school"){
                                $schol = new school($_GET['id']);
                                $schol->editSchool();
                            }
                            if($_GET['title'] == "admin"){
                                $staf = new administrator($_GET['id']);
                                $staf->editAdministrator();
                            }      
                        }
                        if($_GET['page']=="search"){
                            if($_GET['title'] == "teacher"){
                                $funct->searchTeacher($_GET['action']);
                            }
                            if($_GET['title'] == "school"){
                                $funct->searchSchool($_GET['action']);
                            }
                            if($_GET['title'] == "admin"){
                                $funct->searchAdmin($_GET['action']);
                            }
                        }
                      ?>
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
