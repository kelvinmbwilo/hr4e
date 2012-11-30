<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of school
 *
 * @author justin
 */
class school {
    private $schoolName;
    private $schoolNo;
    private $district;
    private $region;
    private $address;
    private $ownership;
    private $subjects;
    private $phoneNumber;
    private $type;
    
    function __construct($school_no) {
        $sql = "SELECT * FROM school WHERE school_no='$school_no'";
        $result=  mysql_query($sql);
        while ($row = mysql_fetch_array($result)) {
            extract($row);
            $this->address      =     $adress;
            $this->district     =     $district;
            $this->ownership    =     $ownership;
            $this->phoneNumber  =     $phone_number;
            $this->region       =     $region;
            $this->schoolName   =     $school_name;
            $this->schoolNo     =     $school_no;
            $this->subjects     =     $subjects;
            $this->type         =     $type;
            
        }
    }
    
    function setSchoolNo($school_no) {
        $sql = "UPDATE school SET school_no='$school_no' WHERE school_no='$this->school_no'";
        mysql_query($sql);
    }
    
    function getSchoolNo(){
        return $this->schoolNo;
    }
    
    
     function setSchoolName($school_name) {
         $sql = "UPDATE school SET school_name='$school_name' WHERE school_no='$this->school_no'";
        mysql_query($sql);
    }
    
    function getSchoolName(){
        return $this->schoolName;
    }
    
     function setDistrict($district) {
         $sql = "UPDATE school SET district='$district' WHERE school_no='$this->school_no'";
        mysql_query($sql);
    }
    
    function getDistrict(){
        return $this->district;
    }
    
     function setRegion($region) {
         $sql = "UPDATE school SET region='$region' WHERE school_no='$this->school_no'";
        mysql_query($sql);
    }
    
    function getRegion(){
        return $this->region;
    }
    
     function setAddress($address) {
         $sql = "UPDATE school SET address='$address' WHERE school_no='$this->school_no'";
        mysql_query($sql);
    }
    
    function getAddress(){
        return $this->address;
    }
    
     function setOwnership($ownership) {
         $sql = "UPDATE school SET ownership='$ownership' WHERE school_no='$this->school_no'";
        mysql_query($sql);
    }
    
    function getOwnership(){
        return $this->ownership;
    }
    
     function setSubjects($subjects) {
         $sql = "UPDATE school SET subjects='$subjects' WHERE school_no='$this->school_no'";
        mysql_query($sql);
    }
    
    function getSubjects(){
        return $this->subjects;
    }
    
     function setPhoneNumber($phone_number) {
         $sql = "UPDATE school SET phone_number='$phone_number' WHERE school_no='$this->school_no'";
        mysql_query($sql);
    }
    
    function getPhoneNumber(){
        return $this->phoneNumber;
    }
    
    function setType($type) {
         $sql = "UPDATE school SET type='$type' WHERE school_no='$this->school_no'";
        mysql_query($sql);
    }
    
    function getType(){
        return $this->type;
    }
    
    function viewSchoolInfo(){
        
        ?>
<div class="row-fluid" >
    <div class="span12" id ="basicinfo">
        <table class="table table-hover table-striped">
            <thead><tr><th colspan="2" align="center"><span class="label label-info">Basic information</span></th></tr></thead>
            <tbody>
            <tr><td width="100">School Number</td><td><?php echo $this->schoolNo;?></td></tr>
            <tr><td>School Name</td><td><?php echo $this->schoolName;?></td></tr>
            <tr><td>Ownership</td><td><?php echo $this->ownership;?></td></tr>
            <tr><td>Region</td><td><?php echo $this->region;?></td></tr>
            <tr><td>District</td><td><?php echo $this->district;?></td></tr>
            <tr><td>Region</td><td><?php echo $this->region;?></td></tr>
            <tr><td>Phone Number</td><td><?php echo $this->phoneNumber;?></td></tr>
            <tr><td>Subject</td><td><?php echo $this->subjects;?></td></tr>
            </tbody>
        </table> 
    </div>
   
</div>
<?php
    }
    
  function editSchool(){
      $form = new form();
      if(isset($_POST['edit'])){
          $this->setSchoolName($_POST['sname']);
          $this->setSchoolNo($_POST['snum']);
          $this->setAddress($_POST['address']);
          $this->setRegion($_POST['region']);
          $this->setDistrict($_POST['district']);
          $this->setSubjects($_POST['subjects']);
          $this->setOwnership($_POST['ownership']);
          $this->setPhoneNumber($_POST['phone']);
          $this->setType($_POST['type']);
               
      }
      ?>
<form method="post" action="dataentry.php?page=edit&title=school&id=<?php echo "$this->schoolNo"; ?>">
    <fieldset><legend>Basic Information</legend>
        <table>
            <tr><td>School Name</td><td><input type="text" name="sname" value="<?php echo "$this->schoolName"; ?>" /></td></tr>
            <tr><td>School Number</td><td><input type="text" name="snum" value="<?php echo "$this->schoolNo"; ?>" /></td></tr>
            <tr><td>Address</td><td><input type="text" name="address" value="<?php echo "$this->address"; ?>" /></td></tr>
           <tr><td>Region</td><td><?php echo $form->regionalDropWithDefault($this->region); ?> </td></tr>
            <tr><td>District</td><td id='district1'><input type="text" name="district" value="<?php echo "$this->district"; ?>" readonly="readonly" /></td></tr>
            <tr><td>Subjects</td><td><input type="text" name="subjects" value="<?php echo "$this->subjects"; ?>" /></td></tr>
            <tr><td>Phone number</td><td><input type="text" name="phone" value="<?php echo "$this->phoneNumber"; ?>" /></td></tr>
            <tr><td>Type</td><td><input type="text" name="type" value="<?php echo "$this->type"; ?>" /></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="submit" class="btn btn-success" name="edit"> <input type="reset" value="reset" class="btn btn-warning"></td></tr>
        </table>
    </fieldset>
</form>
      <?php
  }  
    
    function deleteSchool(){
      $name = $this->schoolName;
      if(isset($_POST['delete'])){
          
          $query = mysql_query("DELETE FROM school WHERE school_no='{$this->schoolNo}'");
          echo "<script>alert('$name deleted');
               document.location='dataentry.php?page=search&title=school&action=delete';</script>";
      }
      if(isset($_POST['leave'])){
          echo "<script>alert('$name was not deleted');
               document.location='dataentry.php?page=search&title=school&action=delete';</script>";
      }
     ?>
<div class="well">
    <form action="dataentry.php?page=delete&title=school&id=<?php echo $_GET['id']; ?>" method="post">
<table class="table-hover">
    <tr>
        <th colspan="2">Delete School</th>
    </tr>
    <tr>
        <td width="150">School Number</td>
        <td><?php echo $this->schoolNo; ?></td>
    </tr>
    <tr>
        <td>School Name</td>
        <td><?php echo $this->schoolName; ?></td>
    </tr>
    <tr>
        <td>District</td>
        <td><?php echo $this->district; ?></td>
    </tr>
    <tr>
        <td>Region</td>
        <td><?php echo $this->region ?></td>
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
