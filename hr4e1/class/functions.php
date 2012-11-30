<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author kelvin
 */
class functions {
    
    function __construct() {
        
    }
    
    function addAdministrator(){
        $form = new form();
        $str = "";
        $str .= "<form method='post' action='process.php?addUser' name='addadmin'>";
        $str .= "<fieldset><legend>Basic Information</legend>";
        $str .= "<table>";
        $str .= "<tr><td>{$form->TextWithAutoremoveText("fname", "First Name", "enter first name")}</td></tr>";
        $str .= "<tr><td>{$form->TextWithAutoremoveText("mname", "MiddleName", "enter middle name")}</td></tr>";
        $str .= "<tr><td>{$form->TextWithAutoremoveText("lname", "Last Name", "enter last name")}</td></tr>";
        $str .= "<tr><td>{$form->TextWithAutoremoveText("occupation", "Occupation", "Occupation")}</td></tr>";
        $str .= "<tr><td><input type='date' name='date' placeholder='Date of Birth'><script> $(\":date\").dateinput();</script></td></tr>";
        $str .= "</table>";
        $str .= "</fieldset>";
        $str .= "<fieldset><legend>Contacts & Address</legend>";
        $str .= "<table>";
        $str .= "<tr><td>{$form->TextWithAutoremoveText("phone", "Phone Number", "Phone Number")}</td></tr>";
        $str .= "<tr><td>{$form->TextWithAutoremoveText("email", "@email", "enter email")}</td></tr>";
        $str .= "<tr><td>{$form->TextWithAutoremoveText("box", "Postal Addres", "Postal Adress")}</td></tr>";
        $str .= "<tr><td>{$form->regionDropdown("region")}</td></tr>";
        $str .= "<tr><td id='district'></td></tr>";
        $str .= "</table>";
        $str .= "</fieldset>";
        $str .= "<fieldset><legend>Login Information</legend>";
        $str .= "<table>";
        $str .= "<tr><td>{$form->passwordWithAutoremoveText("password", "Password", "Password")}</td></tr>";
        $str .= "<tr><td>{$form->passwordWithAutoremoveText("repassword", "Retype Password", "Retype Password")}</td></tr>";
        $str .= "<tr><td>{$form->secretQuestions("question")}</td></tr>";
        $str .= "<tr><td>{$form->TextWithAutoremoveText("answer", "Secret Answer", "Secret Answer")}</td></tr>";
        $str .="<tr><td align=center><input type='submit' class='btn btn-primary' value='submit' /></td></tr>";
        $str .= "</table>";
        $str .= "</fieldset>";
        $str .= "</form>";
        return $str;
    }

    function addTeacher(){
        $form = new form();
        $str = "<form method='post' action='process.php?addTeacher'>";
        $str .= "<fieldset><legend>Basic Information</legend>";
        $str .= "<div>{$form->TextWithAutoremoveText("ssn", "SSN", "Enter ssn")}</div>";
        $str .= "<div>{$form->TextWithAutoremoveText("fname", "First Name", "First Name")}</div>";
        $str .= "<div>{$form->TextWithAutoremoveText("mname", "Middle Name", "Middle Name")}</div>";
        $str .="<div>{$form->TextWithAutoremoveText("lname", "Last Name", "Last Name")}</div>";
        $str .="<div>{$form->genderDropdown()}</div>";
        $str .="<div>{$form->TextWithAutoremoveText("kin", "Next Of Kin", "Next Of Kin")}</div>";
        $str .= "<div>{$form->MaritalStatus("marital")}</div>";
        $str .= "<div><input type='date' name='date' placeholder='Date of Birth'><script> $(\":date\").dateinput();</script></div>";
        $str .= "</fieldset>";
        $str .= "<fieldset><legend>Contact &amp Adress</legend>";
        $str .= "<div>{$form->TextWithAutoremoveText("phone", "Phone Number", "Enter Phone Number")}</div>";
        $str .= "<div>{$form->TextWithAutoremoveText("email", "Email", "Email")}</div>";
        $str .= "<div>{$form->TextWithAutoremoveText("box", "Address", "Address")}</div>";
        $str .= "<div>{$form->regionDropdown("region")}</div>";
        $str .= "<div id='district'></div>";
        $str .= "</fieldset>";
        $str .= "<fieldset><legend>Work Information</legend>";
        $str .= "<div id='school'></div>";
        $str .= "<div>{$form->DepartmentDropdown('department')}</div>";
        $str .= "<div>{$form->SubjectDropdown('subject[]')}</div>";
        $str .= "<div>{$form->TextWithAutoremoveText("salary", "Salary Grade", "Salary Grade")}</div>";
        
        $str .= "<div>{$form->TextWithAutoremoveText("social", "Social Security Fund", "Social Security Fund")}</div>";
        $str .= "<div><input type='date' name='admissiondate' placeholder='Admission Date'><script> $(\":date\").dateinput();</script></div>";
        $str .= "</fieldset>";
        $str .= "<fieldset><legend>Education Information</legend>";
        $str .= "<div>{$form->EducationDropdown("education")}</div>";
        $str .= "<div>{$form->TextWithAutoremoveText("PrimarySchool", "Primary School", "Salary Grade")}</div>";
        $str .= "<div>{$form->TextWithAutoremoveText("primarytime", "Primary Time(1990-1996)", "Primary School Time")}</div>";
        $str .= "<div>{$form->TextWithAutoremoveText("olevelSchool", "Olevel School", "Olevel School")}</div>";
        $str .= "<div>{$form->TextWithAutoremoveText("oleveltime", "O-level Time(1990-1994)", "O-level Time")}</div>";
        $str .= "<div>{$form->TextWithAutoremoveText("advanceLevel", "Advance Level School", "Advance Time")}</div>";
        $str .= "<div>{$form->TextWithAutoremoveText("advancetime", "A-Level Time(1990-1992)", "A-Level Time")}</div>";
        $str .= "<div>{$form->TextWithAutoremoveText("University", "University", "Salary Grade")}</div>";
        $str .= "<div>{$form->TextWithAutoremoveText("University-time", "University-Time(1990-1993)", "University time")}</div>";
        $str .= "<div>{$form->TextWithAutoremoveText("University-award", "Professional Award", "Professional Award")}</div>";
        $str .= "<div><input type='submit' value='submit' class='btn btn-primary' /></div>";
        
        $str .= "</fieldset>";
        $str .= "</form>";
        return $str;
    }
    
    function addSchool(){
        $form = new form();
        $str = "<table width=300px><tr><td>";
        $str .= "<form class='form-horizontal' action='process.php?addSchool' method='post'>";
        $str .= "<fieldset><legend>Add School</legend>";
        $str .= $form->TextInHorizontalForm("School Number", "school_no");
        $str .= $form->TextInHorizontalForm("School Name", "school_name");
        $str .= $form->TextInHorizontalForm("Addres", "address");
        $str .= $form->DropdownInHorizontalForm("Ownership",$form->OwnershipDropdown("ownership"));
        $str .= $form->TextInHorizontalForm("phone Number", "phone");
        $drop = $form->regionDropdown('region');
        $type = "<select name='type'><option disabled='disabled' selected='selected'>Type</option><option>Primary School</option><option disabled='disabled'>Secondary School</option><option>O-Level</option><option>A-Level</option></select>"; 
        $str .= $form->DropdownInHorizontalForm("Type","$type");
        $str .= $form->DropdownInHorizontalForm("Region",$drop);
        $str .= $form->DropdownInHorizontalForm("District","<span id='district'><select><option>Districts</option></select></span>");
        $str .= $form->DropdownInHorizontalForm("Subject",$form->SubjectDropdown("subject[]"));
        $str .= "<div align='center'><input type='submit' class='btn btn-primary' value='submit' /></div>";
        $str .= "</fieldset>";
        $str .= "</form>";
        $str .= "</td></tr></table>";
        return $str;
    }
    
    function addStaff(){
        $form = new form();
        $str = "<form>";
        $str .= "</fieldset>";
        $str .= "<fieldset><legend>Basic Information</legend>";
        $str .= "<div>{$form->TextWithAutoremoveText("ssn", "SSN", "Enter ssn")}</div>";
        $str .= "<div>{$form->TextWithAutoremoveText("fname", "First Name", "First Name")}</div>";
        $str .= "<div>{$form->TextWithAutoremoveText("mname", "Middle Name", "Middle Name")}</div>";
        $str .="<div>{$form->TextWithAutoremoveText("lname", "Last Name", "Last Name")}</div>";
        $str .="<div>{$form->TextWithAutoremoveText("kin", "Next Of Kin", "Next Of Kin")}</div>";
        $str .= "<div>{$form->MaritalStatus("marital")}</div>";
        $str .= "<div>{$form->EducationDropdown("education")}</div>";
        $str .= "<div><input type='date' name='date' placeholder='Date of Birth'><script> $(\":date\").dateinput();</script></div>";
        $str .= "</fieldset>";
        $str .= "<fieldset><legend>Contact &amp Adress</legend>";
        $str .= "<div>{$form->TextWithAutoremoveText("phone", "Phone Number", "Enter Phone Number")}</div>";
        $str .= "<div>{$form->TextWithAutoremoveText("email", "Email", "Email")}</div>";
        $str .= "<div>{$form->TextWithAutoremoveText("box", "Address", "Address")}</div>";
        $str .= "<div>{$form->regionDropdown("region")}</div>";
        $str .= "<div id='district'></div>";
        $str .= "</fieldset>";
        $str .= "<fieldset><legend>Work Information</legend>";
        $str .= "<div>{$form->TextWithAutoremoveText("school", "School", "School")}</div>";
        $str .= "<div>{$form->TextWithAutoremoveText("occupation", "Occupation", "Social Security Fund")}</div>";
        $str .= "<div>{$form->TextWithAutoremoveText("salary", "Salary Grade", "Salary Grade")}</div>";
        $str .= "<div>Admision Date</div>";
        $str .= "<div><input type='date' name='date' placeholder='Admission Date'></div>";
        $str .= "</fieldset>";
        $str .= "</form>";
        return $str;
    
    }
    
    function SchoolDropdown($condition){
        $result = mysql_query("SELECT * FROM school $condition");
        $str = "<select name='school'>";
        $str .= "<option selected='selected' disabled='disabled'>School</option>";
        while ($row = mysql_fetch_array($result)){
            extract($row);
            $str .= "<option value='$school_no'>$school_name</option>";
        }
        $str .= "</select>";
        return $str;
    }
    
    function makeSchoolDropdown(){
        $result = mysql_query("SELECT * FROM districts");
        $str = "<script>";
        $str .= "function makeSchoolDropdown(ids){";
        $str .= "var district = ids.value;";
        while ($row = mysql_fetch_array($result)){
            extract($row);
            
            $str .= "if(district == \"$district\"){";
            $drop = $this->SchoolDropdown("WHERE district =\"$district\"");
            $str .= "document.getElementById('school').innerHTML=\"$drop\";";
            $str .= "}";
        }
        $str .= "}</script>";
        return $str;
    }
    
    function editSchoolDropdown(){
        $result = mysql_query("SELECT * FROM districts");
        $str = "<script>";
        $str .= "function editSchoolDropdown(ids){";
        $str .= "var district = ids.value;";
        while ($row = mysql_fetch_array($result)){
            extract($row);
            
            $str .= "if(district == \"$district\"){";
            $drop = $this->SchoolDropdown("WHERE district =\"$district\"");
            $str .= "document.getElementById('school').innerHTML=\"$drop\";";
            $str .= "}";
        }
        $str .= "}</script>";
        return $str;
    }
    
    function searchTeacher($todo){
        
        ?>
<form class="form-search" action="dataentry.php?page=search&title=teacher&action=<?php echo $todo;?>" method="post">
            <div class="input-append">
                <input type="text" class="search-query" placeholder="Search name, email, number..." name="val">
                <button type="submit" class="btn btn-primary" name="search"><i class="icon-search icon-white"></i></button>
            </div>
        </form>
        <?php
        if(isset($_POST['search'])){
        $query = mysql_query("SELECT * FROM teacher");
        echo "<table class='table table-hover'>";
        if(mysql_num_rows($query) == 0){echo "<tr><td>NO RESULT FOUND</td></tr>";}
        while ($row = mysql_fetch_array($query)) {
            extract($row);
            $str = $ssn ." ".$first_name." ".$middle_name." ".$last_name;
            if(eregi($_POST['val'],$str)){
                if($todo == "edit"){
                echo "<tr><td><a href='dataentry.php?page=edit&title=teacher&id={$row['ssn']}'>$first_name $middle_name $last_name</a></td></tr>";
                }
                if($todo == "delete"){
                echo "<tr><td><a href='dataentry.php?page=delete&title=teacher&id={$row['ssn']}'>$first_name $middle_name $last_name</a></td></tr>";
                }
            }
        }
        echo "</table>";
        }
        
        
    }
    
     function searchSchool($todo){
        
        ?>
<form class="form-search" action="dataentry.php?page=search&title=school&action=<?php echo $todo;?>" method="post">
            <div class="input-append">
                <input type="text" class="search-query" placeholder="Search name,number..." name="val">
                <button type="submit" class="btn btn-primary" name="search"><i class="icon-search icon-white"></i></button>
            </div>
        </form>
        <?php
        if(isset($_POST['search'])){
        $query = mysql_query("SELECT * FROM school");
        echo "<table class='table table-hover'>";
        if(mysql_num_rows($query) == 0){echo "<tr><td>NO RESULT FOUND</td></tr>";}
        echo "<tr><th>School Number</th><th>School Name</th>";
        while ($row = mysql_fetch_array($query)) {
            extract($row);
            $str = $school_no ." ".$school_name;
            if(eregi($_POST['val'],$str)){
                if($todo == "edit"){
                echo "<tr><td><a href='dataentry.php?page=edit&title=school&id=$school_no'>$school_no</a></td><td><a href='dataentry.php?page=edit&title=school&id=$school_no'> $school_name</a></td></tr>";
                }
                if($todo == "delete"){
                echo "<tr><td><a href='dataentry.php?page=delete&title=school&id=$school_no'>$school_no</a></td><td><a href='dataentry.php?page=edit&title=school&id=$school_no'> $school_name</a></td></tr>";
                }
            }
        }
       
        echo "</table>";
        }
        
        
    }
    
     function searchAdmin($todo){
        
        ?>
<form class="form-search" action="dataentry.php?page=search&title=admin&action=<?php echo $todo;?>" method="post">
            <div class="input-append">
                <input type="text" class="search-query" placeholder="Search name,email..." name="val">
                <button type="submit" class="btn btn-primary" name="search"><i class="icon-search icon-white"></i></button>
            </div>
        </form>
        <?php
        if(isset($_POST['search'])){
        $query = mysql_query("SELECT * FROM administrator");
        echo "<table class='table table-hover'>";
        echo "<tr><th>Search result:</th>";
        while ($row = mysql_fetch_array($query)) {
            extract($row);
            $str = $email ." ".$first_name." ". $middle_name." ". $last_name;
            if(eregi($_POST['val'],$str)){
                if($todo == "edit"){
                echo "<tr><td><a href='dataentry.php?page=edit&title=admin&id=$email'> $first_name $middle_name $last_name</a></td></tr>";
                }
            }
        }
       
        echo "</table>";
        }
        
        
    }
    
    function listSchool(){
        
        $query=  mysql_query("SELECT * FROM school");
        echo "<table  class='table table-striped table-hover'>
                     <theader><th>School number</th><th>School Name</th><th>District</th><th>Region</th><th>Ownership</th></theader>";
        while ($row = mysql_fetch_array($query)) {
            extract($row);
            $school=new school($school_no);
       echo "<tr>
               <td>{$school->getSchoolNo()}</td>
               <td>{$school->getSchoolName()}</td>
               <td>{$school->getDistrict()}</td> 
               <td>{$school->getRegion()}</td>
               <td>{$school->getOwnership()}</td>
             </tr>"; }
        
        echo "</table>";
    }
    
    function lists($query,$ordercolumn,$listArr){
        
        $result = mysql_query($query);
        while ($row = mysql_fetch_array($result)){
            extract ($row);
            
          $later = substr($$ordercolumn, 0,1);
            $later = strtoupper($later);
            $name="";
            foreach ($listArr as $va){
                $name .= "  ".$$va;
              }
           $list[$later][].=$name;
        }
        echo "<a href='#A'>A</a><a href='#J'>J</a><a href='#M'>M</a><a href='#K'>K</a>";
                echo "<br/>";
         foreach ($list as $key => $value){
             echo "<a href='#A'>A</a><a href='#J'>J</a><a href='#M'>M</a><a href='#K'>K</a>";
            echo "<a href='#' name='$key'></a>";echo "<br />";
            foreach ($value as $val){
               echo "$val";echo "<br />";
            }    }
        
    }
   function addteacher1(){
       $fname = array ("AMANI","joseph","kelvin");
        $mname = array ("YAHYA","joseph","kulwa");
        $lname = array ("YUNGE","joachim","mbwilo");
        
          for($i=181;$i<219;$i++){
            
            $result = mysql_query("INSERT INTO teacher VALUES('$i','{$fname[2]}','{$mname[2]}','{$lname[2]}','','2010-04-04', '','','','','','photo','', '','','','2019-02-02','','','','')") or die(mysql_error());
            }
        
    }
    
}

?>
