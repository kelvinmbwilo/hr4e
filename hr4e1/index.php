<?php
session_start();
include "includes/form.php";
include "includes/connection.php";
include "class/administrator.php";
include "class/view.php";
$form = new form();
$view = new view();
if (isset($_POST['login'])){
    
  if ($view->isInDatabase($_POST['username'],"administrator", "email")){ 
      echo "upo";
      $admin = new administrator($_POST['username']);
      if($_POST['password'] == $admin->getPassword()){
        $_SESSION['fname'] = $admin->getFirstName();
        $_SESSION['mname'] = $admin->getMiddleName();
        $_SESSION['lname'] = $admin->getLastName();
        echo "<script>window.location='dataentry.php?page=addAdmin';</script>";
        
      }
      else{
        $alert = "<div class=\"alert alert-error\">";
        $alert .= "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>";
        $alert .= "<strong><i class='icon-exclamation-sign icon-white'></i> Ooops! </strong>";
        $alert .= "Incorect username or password please try again!";
        $alert .= "</div>";
        $_SESSION['error'] = $alert; 
      }
      }else{
        $alert = "<div class=\"alert alert-error\">";
        $alert .= "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>";
        $alert .= "<strong><i class='icon-exclamation-sign icon-white'></i> Ooops! </strong>";
        $alert .= "Incorect username or password please try again!";
        $alert .= "</div>";
        $_SESSION['error'] = $alert; 
      }
}

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
        <div align="center" class="main">
            <div class="login">
                <div class="row-fluid" id="banner">
                    Banner
                </div>
                <div class="row-fluid" id="login-area">
                    <?php 
                    if(isset($_SESSION['error'])){
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                    ?>
                    <div class="height-control"></div>
                    <form method='post' method="index.php">
                        <fieldset><legend>Login</legend> 
                        <?php 
                        
                        echo $form->textWithLeftIcon("username", "Username", "Username", "icon-user");
                        echo $form->PasswordWithLeftIcon("password","Password","Password", "icon-lock")
                        ?>
                            <div class="row-fluid">
                                <div class="span3"></div><div class="span3"><input type="submit" value="Login" class="btn btn-success" name="login" /></div><div class="span3"></div><div class="span3"><a href="#">forget password</a></div>
                            </div>
                            &nbsp;
                        </fieldset>
                    </form>
                </div>
                <div class="row-fluid">
                    <footer>&copy; jose justin amani kelvin bite hr4e 2012</footer>
                </div>
            </div>
        </div>
    </body>
</html>
