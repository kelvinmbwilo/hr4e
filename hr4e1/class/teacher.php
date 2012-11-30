<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of teacher
 *
 * @author justin
 */
class teacher {
   private $ssn;
    private $firstName;
    private $middleName;
    private $lastName;
    private $dateOfBirth;
    private $phoneNumber;
    private $email;
    private $address;
    private $photo;
    private $schoolNo;
    private $district;
    private $region;
    private $educationLevel;
    private $admissionDate;
    private $salaryGrade;
    private $nextOfKin;
    private $subject;
    private $maritalStatus;
    private $socialSecurityFund;
    private $gender;
    
    function __construct($ssn) {
        $sql = "SELECT * FROM teacher  WHERE ssn='$ssn'";
        $result = mysql_query($sql);
        
        while ($row = mysql_fetch_array($result)) {
            extract($row);
            $this->address        =      $adress;
            $this->admissionDate  =      $admission_date;
            $this->dateOfBirth    =      $date_of_birth;
            $this->district       =      $district;
            $this->educationLevel =      $education_level;
            $this->email          =      $email;
            $this->firstName      =      $first_name;
            $this->lastName       =      $last_name;
            $this->middleName     =      $middle_name;
            $this->nextOfKin      =      $next_of_kin;
            $this->phoneNumber        =      $phone_number;
            $this->photo          =      $photo;
            $this->region         =      $region;
            $this->salaryGrade    =      $salary_grade;
            $this->schoolNo       =      $school_no;
            $this->ssn            =      $ssn;
            $this->socialSecurityFund =  $social_security_fund;
            $this->subject            =  $subject;
            $this->maritalStatus      =  $marital_status;
            $this->gender             =  $gender;
            
        }
    }
    
    
      function setSsn($ssn) {
        $sql = "UPDATE teacher SET ssn='$ssn' WHERE ssn='$this->ssn'";
        mysql_query($sql);
    }
    
    function getSsn( ) {
        return $this->ssn;
    }
    
    
     function setFirstName($first_name) {
        $sql = "UPDATE teacher SET first_name='$first_name' WHERE ssn='$this->ssn'";
        mysql_query($sql);
    }
    
    function getFirstName( ) {
        return $this->firstName;
    }
    
    
     function setMiddleName($middle_name) {
         $sql = "UPDATE teacher SET middle_name='$middle_name' WHERE ssn='$this->ssn'";
          mysql_query($sql);
    }
    
    function getMiddleName( ) {
        return $this->middleName;
    }
    
    
    function setLastName($last_name) {
         $sql = "UPDATE teacher SET last_name='$last_name' WHERE ssn='$this->ssn'";
          mysql_query($sql);
    }
    
    function getLastName( ) {
        return $this->lastName;
    }
    
    
    function setGender($gender) {
         $sql = "UPDATE teacher SET gender='$gender' WHERE ssn='$this->ssn'";
          mysql_query($sql);
    }
    
    function getGender( ) {
        return $this->gender;
    }
    
    
   
    
      function setDateOfBirth($date_of_birth) {
      $sql = "UPDATE teacher SET date_of_birth='$date_of_birth' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getDateOfBirth(){
      return $this->dateOfBirth;
  }
  
  
   function setPhoneNumber($phone_number) {
      $sql = "UPDATE teacher SET phone_number='$phone_number' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getPhoneNumber(){
      return $this->phoneNumber;
  }
  
  
   function setEmail($email) {
      $sql = "UPDATE teacher SET email='$email' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getEmail(){
      return $this->email;
  }
  
  
   function setAddress($address) {
      $sql = "UPDATE teacher SET address='$address' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getAddress(){
      return $this->address;
  }
  
  
   function setPhoto($photo) {
      $sql = "UPDATE teacher SET photo='$photo' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getPhoto(){
      return $this->photo;
  }
  
  
   function setSchoolNo($school_no) {
      $sql = "UPDATE teacher SET school_no='$school_no' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getSchoolNo(){
      return $this->schoolNo;
  }
  
   function setDistrict($district) {
      $sql = "UPDATE teacher SET district='$district' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getDistrict(){
      return $this->district;
  }
  
  
   function setRegion($Region) {
      $sql = "UPDATE teacher SET region='$Region' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getRegion(){
      return $this->region;
  }
  
   function setEducationLevel($education_level) {
      $sql = "UPDATE teacher SET education_level='$education_level' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getEducationLevel(){
      return $this->educationLevel;
  }
  
  
   function setAdmissionDate($admission_date) {
      $sql = "UPDATE teacher SET admission_date='$admission_date' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getAdmissionDate(){
      return $this->admissionDate;
  }
  
   function setSalaryGrade($salary_grade) {
      $sql = "UPDATE teacher SET salary_grade='$salary_grade' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getSalaryGrade(){
      return $this->salaryGrade;
  }
  
   function setNextOfKin($next_of_kin) {
      $sql = "UPDATE teacher SET next_of_kin='$next_of_kin' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getNextOfKin(){
      return $this->nextOfKin;
  }
    
  function setMaritalStatus($marital_status) {
       $sql = "UPDATE teacher SET marital_status='$marital_status' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getMaritalStatus( ) {
      return $this->maritalStatus;
  }
  
  function setSubject($subject) {
       $sql = "UPDATE teacher SET subject='$subject' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getSubject(){
      return $this->subject;
  }
  
  function setSocialSecurityFund($social_security_fund){
       $sql = "UPDATE teacher SET social_security_fund='$social_security_fund' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getSocialSecurityFund(){
      return $this->socialSecurityFund;
  }
  
  //a function to view teachers basic info
  function viewBasicInfo(){
      ?>
<div class="row-fluid" >
    <div class="span12" id ="basicinfo">
        <table class="table table-hover table-striped">
            <thead><tr><th colspan="2" align="center"><span class="label label-info">Basic information</span></th></tr></thead>
            <tbody>
            <tr><td>Ssn</td><td><?php echo $this->ssn;?></td></tr>
            <tr><td>First Name</td><td><?php echo $this->firstName;?></td></tr>
            <tr><td>Middle Name</td><td><?php echo $this->middleName;?></td></tr>
            <tr><td>Last Name</td><td><?php echo $this->lastName;?></td></tr>
            <tr><td>Gender</td><td><?php echo $this->gender;?></td></tr>
            <tr><td>Next of Kin</td><td><?php echo $this->nextOfKin;?></td></tr>
            <tr><td>Marital Status</td><td><?php echo $this->maritalStatus;?></td></tr>
            <tr><td>Birth Date</td><td><?php $dat1 = date("d M Y", strtotime($this->dateOfBirth));echo $dat1;?></td></tr>
            </tbody>
        </table> 
    </div>
   
</div>
<?php
  }
  
  function viewWorkInfo(){
      $school = new school($this->schoolNo);
       ?>
<div class="row-fluid" >
    <div class="span12" id ="basicinfo">
        <table class="table table-hover table-striped">
            <thead><tr><th colspan="2" align="center"><span class="label label-info">Work information</span></th></tr></thead>
            <tbody>
                <tr><td>school</td><td><?php echo $school->getSchoolName();?></td></tr>
            <tr><td>Subject</td><td><?php echo $this->subject;?></td></tr>
            <tr><td>Admission Date</td><td><?php $dat1 = date("d M Y", strtotime($this->admissionDate));echo $dat1;?></td></tr>
            <tr><td>Salary Grade</td><td><?php echo $this->salaryGrade;?></td></tr>
            <tr><td>Social Security Fund</td><td><?php echo $this->socialSecurityFund;?></td></tr>
            </tbody>
        </table> 
    </div>
   
</div>
<?php
  }
  
  function viewContactInfo(){
       ?>
<div class="row-fluid" >
    <div class="span12" id ="basicinfo">
        <table class="table table-hover table-striped">
            <thead><tr><th colspan="2" align="center"><span class="label label-info">Contact &AMP; Address</span></th></tr></thead>
            <tbody>
            <tr><td>Phone Number</td><td><?php echo $this->phoneNumber;?></td></tr>
            <tr><td>Email</td><td><?php echo $this->email;?></td></tr>
            <tr><td>Address</td><td><?php echo $this->address;?></td></tr>
            <tr><td>District</td><td><?php echo $this->district;?></td></tr>
            <tr><td>Region</td><td><?php echo $this->region;?></td></tr>
            </tbody>
        </table> 
    </div>
   
</div>
<?php
  }
  
  function viewTeachers_cv(){
      $cv = new teachers_cv($this->ssn);
       ?>
<div class="row-fluid" >
    <div class="span12" id ="basicinfo">
        <table class="table table-hover table-striped">
            <thead><tr><th colspan="3" align="center"><span class="label label-info"><?php echo $this->firstName." ". $this->middleName." ". $this->lastName; ?> CV</span></th></tr></thead>
            <tbody>
            <tr><td>Education Level</td><td colspan="2"><?php echo $this->educationLevel;?></td></tr>
            <tr><td>Primary School</td><td><?php echo $cv->getPrimarySchool();?></td><td><?php echo $cv->getPrimaryTIme();?></td></tr>
            <tr><td>O-Level </td><td><?php echo $cv->getOlevelSchool();?></td><td><?php echo $cv->getOlevelTime();?></td></tr>
            <tr><td>A-Level</td><td><?php echo $cv->getAdvanceSchool();?></td><td><?php echo $cv->getAdvanceTime();?></td></tr>
            <tr><td>College/University</td><td><?php echo $cv->getUniversity();?></td><td><?php echo $cv->getUniversityTime();?></td></tr>
            <tr><td>Proffesional Award</td><td colspan="2"><?php echo $cv->getUniversityAward();?></td></tr>
            </tbody>
        </table> 
    </div>
   
</div>
<?php
  }
  
  function editTeacher(){
      $form = new form();
      $school = new school($this->schoolNo);
      if(isset($_POST['edit'])){
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
          
      }
      ?>
<form method="post" action="dataentry.php?page=edit&title=teacher&id=<?php echo "$this->ssn"; ?>">
    <fieldset><legend>Basic Information</legend>
        <table>
            <tr><td>Ssn</td><td><input type="text" name="ssn" value="<?php echo "$this->ssn"; ?>" /></td></tr>
            <tr><td>First Name</td><td><input type="text" name="fname" value="<?php echo "$this->firstName"; ?>" /></td></tr>
            <tr><td>Middle Name</td><td><input type="text" name="mname" value="<?php echo "$this->middleName"; ?>" /></td></tr>
            <tr><td>Last Name</td><td><input type="text" name="lname" value="<?php echo "$this->lastName"; ?>" /></td></tr>
            <tr><td>Gender</td><td><input type="text" name="sex" value="<?php echo "$this->gender"; ?>" /></td></tr>
            <tr><td>Next of Kin</td><td><input type="text" name="nextOfKin" value="<?php echo "$this->nextOfKin"; ?>" /></td></tr>
            <tr><td>Marital Status</td><td><input type="text" name="maritalStatus" value="<?php echo "$this->maritalStatus"; ?>" /></td></tr>
            <tr><td>Date of Birth</td><td><input type="text" name="dob" value="<?php echo "$this->dateOfBirth"; ?>" /></td></tr>
        </table>
    </fieldset>
    <fieldset><legend>Contacts &AMP; Address</legend>
        <table>
            <tr><td>Phone Number</td><td><input type="text" name="phone" value="<?php echo "$this->phoneNumber"; ?>" /></td></tr>
            <tr><td>Email</td><td><input type="text" name="email" value="<?php echo "$this->email"; ?>" /></td></tr>
            <tr><td>Address</td><td><input type="text" name="address" value="<?php echo "$this->address"; ?>" /></td></tr>
            <tr><td>Region</td><td><?php echo $form->regionalDropWithDefault($this->region); ?> </td></tr>
            <tr><td>District</td><td id='district1'><input type="text" name="district" value="<?php echo "$this->district"; ?>" readonly="readonly" /></td></tr>
        </table>
    </fieldset>
    <fieldset><legend>Work Information</legend>
        <table>
            <tr><td>School</td><td id="school"><input type="text" name="school" value="<?php echo $school->getSchoolName(); ?>" /></td></tr>
            <tr><td>Subjects</td><td><input type="text" name="subject" value="<?php echo "$this->subject"; ?>" /></td></tr>
            <tr><td>Salary Grade</td><td><input type="text" name="salary" value="<?php echo "$this->salaryGrade"; ?>" /></td></tr>
            <tr><td>Social Security Fund</td><td><input type="text" name="social" value="<?php echo "$this->socialSecurityFund"; ?>" /></td></tr>
            <tr><td>Admission Date</td><td><input type="text" name="adate" value="<?php echo "$this->admissionDate"; ?>" /></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="submit" class="btn btn-success" name="edit"> <input type="reset" value="reset" class="btn btn-warning"></td></tr>
        </table>
    </fieldset>
</form>
      <?php
  }
  
  function deleteTeacher(){
      $name = $this->firstName." ". $this->middleName." ". $this->lastName;
      if(isset($_POST['delete'])){
          
          $query = mysql_query("DELETE FROM teacher WHERE ssn='{$this->ssn}'");
          echo "<script>alert('$name deleted');
               document.location='dataentry.php?page=search&title=teacher&action=delete';</script>";
      }
      if(isset($_POST['leave'])){
          echo "<script>alert('$name was not deleted');
               document.location='dataentry.php?page=search&title=teacher&action=delete';</script>";
      }
     ?>
<div class="well">
    <form action="dataentry.php?page=delete&title=teacher&id=<?php echo $_GET['id']; ?>" method="post">
<table class="table-hover">
    <tr>
        <th colspan="2">Delete Teacher</th>
    </tr>
    <tr>
        <td width="150">ssn</td>
        <td><?php echo $this->ssn; ?></td>
    </tr>
    <tr>
        <td>First Name</td>
        <td><?php echo $this->firstName; ?></td>
    </tr>
    <tr>
        <td>Middle Name</td>
        <td><?php echo $this->middleName; ?></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><?php echo $this->lastName; ?></td>
    </tr>
    
    <tr>
        <td align="center"><input type="submit" class="btn btn-danger" value="delete" name="delete">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-success" value="leave" name="leave"></td>
    </tr>
</table>
</form>
    </div>
<?php
      
  }
}





?>
