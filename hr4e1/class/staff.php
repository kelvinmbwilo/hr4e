<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of staff
 *
 * @author justin
 */
class staff {
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
    
    
    function __construct($ssn) {
        $sql = "SELECT * FROM staff WHERE ssn='$ssn'";
        $result = mysql_query($sql);
        while($row = mysql_fetch_array($result)){
            extract($row);
            
            $this->address        =      $address;
            $this->admissionDate  =      $admission_date;
            $this->dateOfBirth    =      $date_of_birth;
            $this->district       =      $district;
            $this->educationLevel =      $education_level;
            $this->email          =      $email;
            $this->firstName      =      $first_name;
            $this->lastName       =      $last_name;
            $this->middleName     =      $middle_name;
            $this->nextOfKin      =      $next_of_kin;
            $this->phoneNumber    =      $phone_number;
            $this->photo          =      $photo;
            $this->region         =      $region;
            $this->salaryGrade    =      $salary_grade;
            $this->schoolNo       =      $school_no;
            $this->ssn            =      $ssn;
            
        }
    }
    
    function setSsn($ssn) {
        $sql = "UPDATE staff SET ssn='$ssn' WHERE ssn='$this->ssn'";
        mysql_query($sql);
    }
    
    function getSsn( ) {
        return $this->ssn;
    }
    
    
     function setFirstName($first_name) {
        $sql = "UPDATE staff SET first_name='$first_name' WHERE ssn='$this->ssn'";
        mysql_query($sql);
    }
    
    function getFirstName( ) {
        return $this->firstName;
    }
    
    
     function setMiddleName($middle_name) {
         $sql = "UPDATE staff SET middle_name='$middle_name' WHERE ssn='$this->ssn'";
          mysql_query($sql);
    }
    
    function getMiddleName( ) {
        return $this->middleName;
    }
    
    
    function setLastName($last_name) {
         $sql = "UPDATE staff SET last_name='$last_name' WHERE ssn='$this->ssn'";
          mysql_query($sql);
    }
    
    function getLastName( ) {
        return $this->lastName;
    }
    
    
   
    
      function setDateOfBirth($date_of_birth) {
      $sql = "UPDATE staff SET date_of_birth='$date_of_birth' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getDateOfBirth(){
      return $this->dateOfBirth;
  }
  
  
   function setPhoneNumber($phone_number) {
      $sql = "UPDATE staff SET phone_number='$phone_number' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getPhoneNumber(){
      return $this->phoneNumber;
  }
  
  
   function setEmail($email) {
      $sql = "UPDATE staff SET email='$email' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getEmail(){
      return $this->email;
  }
  
  
   function setAddress($address) {
      $sql = "UPDATE staff SET address='$address' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getAddress(){
      return $this->address;
  }
  
  
   function setPhoto($photo) {
      $sql = "UPDATE staff SET photo='$photo' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getPhoto(){
      return $this->photo;
  }
  
  
   function setSchool_no($school_no) {
      $sql = "UPDATE staff SET school_no='$school_no' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getSchool_no(){
      return $this->schoolNo;
  }
  
   function setDistrict($district) {
      $sql = "UPDATE staff SET district='$district' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getDistrict(){
      return $this->district;
  }
  
  
   function setRegion($Region) {
      $sql = "UPDATE staff SET region='$Region' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getRegion(){
      return $this->region;
  }
  
   function setEducationLevel($education_level) {
      $sql = "UPDATE staff SET education_level='$education_level' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getEducationLevel(){
      return $this->educationLevel;
  }
  
  
   function setAdmissionDate($admission_date) {
      $sql = "UPDATE staff SET admission_date='$admission_date' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getAdmissionDate(){
      return $this->admissionDate;
  }
  
   function setSalaryGrade($salary_grade) {
      $sql = "UPDATE staff SET salary_grade='$salary_grade' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getSalaryGrade(){
      return $this->salaryGrade;
  }
  
   function setNextOfKin($next_of_kin) {
      $sql = "UPDATE staff SET next_of_kin='$next_of_kin' WHERE ssn='$this->ssn'";
        mysql_query($sql);
  }
  
  function getNextOfKin(){
      return $this->nextOfKin;
  }
    
}

?>
