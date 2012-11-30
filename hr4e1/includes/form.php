<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of form
 *
 * @author kelvin
 */
class form {
   
    function normalText($name){
        $text = "<input type='text' name=$name />";
        return $text;
    }
    
    function TextWithPlaceholder($name,$placeholder){
        $text = "<input type='text' name='$name' placeholder='$placeholder' />";
        return $text;
    }
    
    function TextWithAutoremoveText($name,$text1){
        $text = "<input type=\"text\"  value=\"$text1\" onfocus=\"if (this.value == '$text1') {this.value = '';}\" onblur=\"if (this.value == '') {this.value = '$text1';}\" title=\"$text1\" name=\"$name\"/>";
        return $text;
    }
    
    function TextInHorizontalForm($label,$name){
        $str = "<div class=\"control-group\">";
        $str .= "<label class=\"control-label\" for=\"inputEmail\">$label</label>";
        $str .= "<div class=\"controls\">";
        $str .= " <input type=\"text\" id=\"prependedInput\" placeholder=\"$label\" name='$name'>";
        $str .= " </div>";
        $str .= " </div>";
        return $str;
    }
    
    function DropdownInHorizontalForm($label,$dropdown){
        $str = "<div class=\"control-group\">";
        $str .= "<label class=\"control-label\" for=\"inputEmail\">$label</label>";
        $str .= "<div class=\"controls\">";
        $str .= $dropdown;
        $str .= " </div>";
        $str .= " </div>";
        return $str;
    }
    function dateInput($name,$title){
        $text = "<input type=\"date\"  value=\"$text1\" onfocus=\"if (this.value == '$text1') {this.value = '';}\" onblur=\"if (this.value == '') {this.value = '$text1';}\" title=\"$title\" name=\"$name\"/>";
        return $text;
    }
    function passwordWithAutoremoveText($name,$text1,$title){
        $text = "<input type=\"password\"  placeholder=\"$text1\" title=\"$title\" name=\"$name\" />";
        return $text;
    }
    
    function secretQuestions($name){
        $str = "<select name='$name'>";
        $str .= "<option disabled='disabled' selected='selected'>Secret Question</option>";
        $str .= "<option>What is yor best friends name</option>";
        $str .= "<option>What is your favorite teachers name</option>";
        $str .= "<option>What place do you like most</option>";
        $str .= " <option>What is the name of your close relative</option>";
        $str .= "</select>";
        return $str;
    }
    
    function MaritalStatus($name){
        $str = "<select name='$name'>";
        $str .= "<option disabled='disabled' selected='selected'>Marital Status</option>";
        $str .= "<option>Married</option>";
        $str .= "<option>Single</option>";
        $str .= "<option>Devorced</option>";
        $str .= "</select>";
        return $str;
    }
    
    function dateSelect(){
        $str1 ="<input type='date' name='date' >";
        $str = "<select name='date' class='span4'>";
        $date = array("01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31");
        for($i=1;$i<=31;$i++){
           $j=$i-1;
                         $str .= "<option value='$date[$j]' >$i</option>";
                         }
             $str.= " </select>";
              $str.= "<select name='month' class='span4'>";
                        $month =array("jan","feb","mar","apr","may","jun","july","aug","sep","oct","nov","dec");
                        $month1 = array("01","02","03","04","05","06","07","08","09","10","11","12");
	                for($i=1;$i<=12;$i++){
	       	        $j=$i-1;
                        $str.= "<option value='$month1[$j]'>$month[$j]</option>";
                        }
             $str.="</select>";
             $str.= "<select name='year' class='span4'>";
                 for($i=2012;$i<=2040;$i++){
                 $str.= "<option>$i</option>";
                 }
             $str.= "</select>";
             return $str1;
    }
    function textWithLeftIcon($name,$text1,$title,$icon){
            $text .= "<div class='input-prepend'>";
            $text .= "<span class='add-on'><i class='$icon'></i></span>";
            $text .= "<input type=\"text\" id='inputIcon'  value=\"$text1\" onfocus=\"if (this.value == '$text1') {this.value = '';}\" onblur=\"if (this.value == '') {this.value = '$text1';}\" title=\"$title\" name=\"$name\"/>";
            $text .= "</div>";
            return $text;
    }
    function PasswordWithLeftIcon($name,$text1,$title,$icon){
            $text .= "<div class='input-prepend'>";
            $text .= "<span class='add-on'><i class='$icon'></i></span>";
            $text .= "<input type=\"password\" id='inputIcon' placeholder='password' title=\"$title\" name=\"$name\"/>";
            $text .= "</div>";
            return $text;
    }
    
    function textWithRightIcon($label,$name,$title,$icon){
            $text = "<div class='control-group'>";
            $text .= "<label class='control-label' for='inputIcon'>$label</label>";
            $text .= "<div class='controls'>";
            $text .= "<div class='input-append'>";
            $text .= "<input class='span2' id='appendedInput' type='text'>";
            $text .= "<span class='add-on'><i class='$icon'></i></span>";
            $text .= "</div>";
            $text .= "</div>";
            $text .= "</div>";
            return $text;
    }
    
     function textWithRightLinkIcon($name,$title,$icon,$path){
            $text .= "<div class='input-append'>";
            $text .= "<input class='span2' id='appendedInput' type='text' name=>";
            $text .= "<span class='add-on'><a href='$path'><i class='$icon'></i></a></span>";
            $text .= "</div>";
            return $text;
    }
    
    function OwnershipDropdown($name){
        $str = "<select name='$name'>";
        $str .= "<option disabled='disabled' selected='selected'>Ownership</option>";
        $str .= "<option>Private</option>";
        $str .= "<option>Government</option>";
        $str .= "</select>";
        return $str;
    }
  
     function EducationDropdown($name){
        $str = "<select name='$name'>";
        $str .= "<option disabled='disabled' selected='selected'>Education Level</option>";
        $str .= "<option>Certificate</option>";
        $str .= "<option>Diploma</option>";
        $str .= "<option>Degree</option>";
        $str .= "<option>Master</option>";
        $str .= "<option>PhD</option>";
        $str .= "</select>";
        return $str;
    }
    
    function genderDropdown(){
        $str = "<select name='gender'>";
        $str .= "<option disabled='disabled' selected='selected'>Gender</option>";
        $str .= "<option>Female</option>";
        $str .= "<option>Male</option>";
        $str .= "</select>";
        return $str;
    }
    function DepartmentDropdown($name){
        $str = "<select name='$name'>";
        $str .= "<option disabled='disabled' selected='selected'>Departments</option>";
        $str .= "<option>Science</option>";
        $str .= "<option>Arts</option>";
        $str .= "<option>Bussiness</option>";
        $str .= "</select>";
        return $str;
    }
    
     function SubjectDropdown($name){
        $str = "<select name='$name' multiple='multiple' size='5'>";
        $str .= "<option disabled='disabled' selected='selected'>Subjects</option>";
        $str .= "<option>Kiswahili</option>";
        $str .= "<option>Mathematics</option>";
        $str .= "<option>Geography</option>";
        $str .= "<option>Physics</option>";
        $str .= "<option>Chemistry</option>";
        $str .= "<option>Biology</option>";
        $str .= "<option>History</option>";
        $str .= "<option>English</option>";
        $str .= "<option>Addition Math</option>";
        $str .= "<option>Civics</option>";
        $str .= "</select>";
        return $str;
    }
    
    function regionDropdown($name){
        $str = "<select name='$name' onChange='districtDropdown(this)'>";
        $str .= "<option disabled='disabled' selected='selected'>Region</option>";
        $str .= "<option>Arusha</option><option>Dar es Saalam</option><option>Dodoma</option><option>Geita</option><option>Iringa</option>";
        $str .= "<option>Kagera</option><option>Katavi</option><option>Kigoma</option><option>Kilimanjaro</option><option>Lindi</option>";
        $str .= "<option>Manyara</option><option>Mara</option><option>Mbeya</option><option>Morogoro</option><option>Mtwara</option>";
        $str .= "<option>Mwanza</option><option>Njombe</option><option>Pwani</option><option>Rukwa</option><option>Ruvuma</option>";
        $str .= "<option>Shinyanga</option><option>Simiyu</option><option>Singida</option><option>Tabora</option><option>Tanga</option>";
        $str .= "</select>";
        return $str;
    }
    
    function regionalDropWithDefault($selected){
        $query = mysql_query("SELECT * FROM regions");
        $str = "<select name='region' onChange='editdistrictDropdown(this)'>";
        while ($row = mysql_fetch_array($query)) {
            extract ($row);
            if($region == $selected){
              $str .= "<option selected='selected'>$region</option>";  
            }else{
               $str .= "<option>$region</option>"; 
            }
        }
        $str .= "</select>";
        return $str;
    }
   
    
}

?>
