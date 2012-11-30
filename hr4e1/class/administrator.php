<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of administrator
 *
 * @author justin
 * 
 * 
 */

include 'connection.php';
class administrator {
    //initialization of variables
    
  private $email;
  private $firstName;
  private $middleName;
  private $lastName;
  private $phoneNumber;
  private $address;
  private $region;
  private $district;
  private $occupation;
  private $dateOfBirth;
  private $password;
  private $secretQuestion;
  private $secretAnswer;
  private $priviledge;
  
  //constructor
  
  function __construct($email) {
      $sql = "SELECT * FROM administrator  WHERE email='$email'";
      $result = mysql_query($sql);
      
      while($row = mysql_fetch_array($result)){
          extract($row);
          $this->address             =      $adress;
          $this->dateOfBirth         =      $date_of_birth;
          $this->district            =      $district;
          $this->email               =      $email;
          $this->firstName           =      $first_name;
          $this->lastName            =      $last_name;
          $this->middleName          =      $middle_name;
          $this->occupation          =      $occupation;
          $this->password            =      $password;
          $this->phoneNumber         =      $phone_number;
          $this->priviledge          =      $priviledge;
          $this->region              =      $region;
          $this->secretAnswer        =      $secret_answer;
          $this->secretQuestion      =      $secret_question;
      }
      
  }
  
  
   //getters  and  setters
  
  function setEmail($email) {
      $sql = "UPDATE administrator SET email='$email' WHERE email = '$this->email'";
      mysql_query($sql);
      
  }          
      
  function getEmail(){
      return $this->email;
  }
  
  function setFirstName($first_name) {
      $sql = "UPDATE administrator SET first_name=''$first_name' WHERE email='$this->email'";
      mysql_query($sql);
  }
  
  function getFirstName(){
      return $this->firstName;
  }
      
   
  
  function setMiddleName($middle_name) {
      $sql = "UPDATE administrator SET middle_name='$middle_name' WHERE email = '$this->email'";
      mysql_query($sql);
  }
  
  function getMiddleName(){
      return $this->middleName;
  }
  
  
  function setLastName($last_name) {
      $sql = "UPDATE administrator SET last_name='$last_name' WHERE email = '$this->email'";
      mysql_query($sql);
  }
  
  function getLastName(){
      return $this->lastName;
  }
  
  
  function setPhoneNumber($phone_number) {
      $sql = "UPDATE administrator SET phone_number='$phone_number' WHERE email = '$this->email'";
      mysql_query($sql);
  }
  
  function getPhoneNumber(){
      return $this->phoneNumber;
  }
  
  
  function setAddress($address) {
      $sql = "UPDATE administrator SET address='$adress' WHERE email = '$this->email'";
      mysql_query($sql);
  }
  
  function getAddress(){
      return $this->adress;
  }
  
  
  function setRegion($region) {
      $sql = "UPDATE administrator SET region='$region' WHERE email = '$this->email'";
      mysql_query($sql);
  }
  
  function getRegion(){
      return $this->region;
  }
  
  function setDistrict($district) {
      $sql = "UPDATE administrator SET district='$district' WHERE email = '$this->email'";
      mysql_query($sql);
  }
  
  function getDistrict(){
      return $this->district;
  }
  
  function setOccupation($occupation) {
      $sql = "UPDATE administrator SET occupation='$occupation' WHERE email = '$this->email'";
      mysql_query($sql);
  }
  
  function getOccupation(){
      return $this->occupation;
  }
  
  function setDateOfBirth($date_of_birth) {
      $sql = "UPDATE administrator SET date_of_birth='$date_of_birth' WHERE email = '$this->email'";
      mysql_query($sql);
  }
  
  function getDateOfBirth(){
      return $this->dateOfBirth;
  }
  
  
  function setPassword($password) {
      $sql = "UPDATE administrator SET password='$password' WHERE email = '$this->email'";
      mysql_query($sql);
  }
  
  function getPassword(){
      return $this->password;
  }
  
  function setSecretQuestion($secret_question) {
      $sql = "UPDATE administrator SET secret_question='$secret_question' WHERE email = '$this->email'";
      mysql_query($sql);
  }
  
  function getSecretQuestion(){
      return $this->secretQuestion;
  }
  
  function setSecretAnswer($secret_answer) {
      $sql = "UPDATE administrator SET secret_answer='$secret_answer' WHERE email = '$this->email'";
      mysql_query($sql);
  }
  
  function getSecretAnswer(){
      return $this->secretAnswer;
  }
  
  
  function setPriviledge($priviledge) {
       $sql = "UPDATE administrator SET priviledge='$priviledge' WHERE email = '$this->email'";
      mysql_query($sql);
  }
  
  function getPriviledge(){
      return $this->priviledge;
  }
  
  function viewAdminBasicInfo(){
     ?>
<div class="row-fluid" >
    <div class="span12" id ="basicinfo">
        <table class="table table-hover table-striped">
            <thead><tr><th colspan="2" align="center"><span class="label label-info">Basic information</span></th></tr></thead>
            <tbody>
            <tr><td>First Name</td><td><?php echo $this->firstName;?></td></tr>
            <tr><td>Middle Name</td><td><?php echo $this->middleName;?></td></tr>
            <tr><td>Last Name</td><td><?php echo $this->lastName;?></td></tr>
            <tr><td>Occupation</td><td><?php echo $this->occupation;?></td></tr>
            <tr><td>Birth Date</td><td><?php $dat1 = date("d M Y", strtotime($this->dateOfBirth));echo $dat1;?></td></tr>
            </tbody>
        </table> 
    </div>
   
</div>
<?php
     
   }

   function viewAdminContactInfo(){
     ?>
<div class="row-fluid" >
    
    <div class="span12" >
        <table class="table table-hover table-striped">
            <thead><tr><th colspan="2" align="center"><span class="label label-info">Contacts &AMP; Address</span></th></tr></thead>
            <tbody>
            <tr><td>Phone Number</td><td><?php echo $this->phoneNumber;?></td></tr>
            <tr><td>Email</td><td><?php echo $this->email;?></td></tr>
            <tr><td>Address</td><td><?php echo $this->address;?></td></tr>
            <tr><td>Region</td><td><?php echo $this->region;?></td></tr>
            <tr><td>District</td><td><?php echo $this->district;?></td></tr>
            </tbody>
        </table> 
    </div>
</div>
<?php
     
   }
   
    function editAdministrator(){
      $form = new form();
     if(isset($_POST['edit'])){
          $this->setFirstName($_POST['fname']);
          $this->setMiddleName($_POST['mname']);
          $this->setLastName($_POST['lname']);
          $this->setDateOfBirth($_POST['dob']);
          $this->setPhoneNumber($_POST['phone']);
          $this->setEmail($_POST['email']);
          $this->setAddress($_POST['address']);
          $this->setRegion($_POST['region']);
          $this->setDistrict($_POST['district']);
          $this->setOccupation($_POST['occupation']);
          
      }  
      ?> 
<form method="post" action="dataentry.php?page=edit&title=admin&id=<?php echo "$this->email"; ?>">
    <fieldset><legend>Basic Information</legend>
        <table>
            <tr><td>First Name</td><td><input type="text" name="fname" value="<?php echo "$this->firstName"; ?>" /></td></tr>
            <tr><td>Middle Name</td><td><input type="text" name="mname" value="<?php echo "$this->middleName"; ?>" /></td></tr>
            <tr><td>Last Name</td><td><input type="text" name="lname" value="<?php echo "$this->lastName"; ?>" /></td></tr>
            <tr><td>Occupation</td><td><input type="text" name="occupation" value="<?php echo "$this->occupation"; ?>" /></td></tr>
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
             <tr><td colspan="2" align="center"><input type="submit" value="submit" class="btn btn-success" name="edit"> <input type="reset" value="reset" class="btn btn-warning"></td></tr>
        </table>
    </fieldset>
    
</form>
      <?php
  }
   
   
  }//end  of class  administrator

?>
