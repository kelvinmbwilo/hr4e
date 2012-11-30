<?php

 //initializing session
session_start();
include "includes/connection.php";


//checking if a form is submited
if(isset($_POST)){
	
	//finds  the form to be processed
	switch($_SERVER['QUERY_STRING']){
		
                   //prossesssing a form to add company by coordinator
	case addUser:
             if($_POST['password']==$_POST['repassword']){
                 
             
                    $dat1 = date("Y-m-d", strtotime($_POST['date']));
                  $result = mysql_query("INSERT INTO administrator VALUES('{$_POST['email']}','{$_POST['fname']}',
                             '{$_POST['mname']}','{$_POST['lname']}','{$_POST['phone']}','{$_POST['box']}','{$_POST['region']}',
                             '{$_POST['district']}','{$_POST['occupation']}','$dat1','{$_POST['password']}','{$_POST['question']}',
                             '{$_POST['answer']}','{$_POST['occupation']}')") or die(mysql_error());
	  if($result){
                $alert = "<div class=\"alert alert-success\">";
                $alert .= "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>";
                $alert .= "<h4>Success!</h4>";
                $alert .= "{$_POST['fname']} {$_POST['mname']} {$_POST['lname']} added to database";
                $alert .= "</div>";
                $_SESSION['error'] = $alert;
                echo "<script>window.location=\"test.php\";</script>";
          };	
             }else{
            $alert = "<div class=\"alert alert-error\">";
            $alert .= "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>";
            $alert .= "<h4>Warning!</h4>";
            $alert .= "Password do not match please check again";
            $alert .= "</div>";
            $_SESSION['error'] = $alert;
    echo "<script>window.location=\"test.php\";</script>";
             }
                    break;
			
                case addSchool:
                    $subject = "";
                    foreach ($_POST['subject'] as $value) {
                      $subject .="$value,";   
                    }
                    
                   $result = mysql_query("INSERT INTO school VALUES('{$_POST['school_no']}','{$_POST['school_name']}','{$_POST['district']}','{$_POST['region']}',
                             '{$_POST['address']}','{$_POST['ownership']}','$subject',
                             '{$_POST['phone']}','{$_POST['type']}')") or die(mysql_error());
                    break;
                    
                case addTeacher:
                    $subject = "";
                    foreach ($_POST['subject'] as $value) {
                      $subject .="$value,";   
                    }
                    $dat1 = date("Y-m-d", strtotime($_POST['date']));
                    $result = mysql_query("INSERT INTO teacher VALUES('{$_POST['ssn']}','{$_POST['fname']}',
                             '{$_POST['mname']}','{$_POST['lname']}','{$_POST['gender']}','$dat1', '{$_POST['phone']}','{$_POST['email']}','{$_POST['box']}','{$_POST['department']}',
                             '$subject','photo','{$_POST['school']}', '{$_POST['district']}','{$_POST['region']}','{$_POST['education']}','{$_POST['admissiondate']}','{$_POST['salary']}','{$_POST['social']}',
                             '{$_POST['kin']}','{$_POST['marital']}')") or die(mysql_error());
                    $result1 = mysql_query("INSERT INTO teachers_cv VALUES('{$_POST['ssn']}','{$_POST['PrimarySchool']}',
                             '{$_POST['primarytime']}','{$_POST['olevelSchool']}','{$_POST['oleveltime']}','{$_POST['advanceLevel']}',
                             '{$_POST['advancetime']}','{$_POST['University']}',
                             '{$_POST['University-time']}', '{$_POST['University-award']}')") or die(mysql_error());
                             
                    break;
                    
                    case editTeacher:
                        if(isset($_POST['edit'])){
                            echo "kelvin";
                            $this->setSsn($_POST['ssn']);
                            $this->setFirstName($_POST['fname']);
                            $this->setMiddleName($_POST['mname']);
                            $this->setLastName($_POST['lname']);
                            $this->setGender($_POST['sex']);
                            $this->setNextOfKin($_POST['nextOfKin']);
                            $this->setMaritalStatus($_POST['maritalStatus']);
                            $this->setDateOfBirth($_POST['dob']);
                            $this->setPhoneNumber($_POST['phone']);
                            $this->setEmail($_POST['email']);
                            $this->setAddress($_POST['address']);
                            $this->setRegion($_POST['region']);
                            $this->setDistrict($_POST['district']);
                            $this->setSubject($_POST['subject']);
                            $this->setSalaryGrade($_POST['salary']);
                            $this->setSocialSecurityFund($_POST['social']);
                            $this->setAdmissionDate($_POST['adate']);
                            if(isset($_POST['school'])){$this->setSchoolNo($_POST['school']);}
                            unset($_POST['edit']);
                        }
                        break;
                    
}
  	
	
}

?>
