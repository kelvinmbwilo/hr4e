<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of school_teachers
 *
 * @author justin
 */
class school_teachers {
    private $schoolNo;
    private $year;
    private $headmaster;
    private $secondmaster;
    private $academic;
    private $displine;
    
    function __construct($school_no) {
        $sql = "SELECT * FROM school_teachers WHERE school_no='$school_no'";
        $result = mysql_query($sql);
        
        while($row = mysql_fetch_array($result)){
            extract($row);
            $this->academic      =    $academic;
            $this->displine      =    $displine;
            $this->headmaster    =    $headmaster;
            $this->schoolNo     =    $school_no;
            $this->secondmaster  =    $secondmaster;
            $this->year          =    $year;
            
        }
  
         }
         
         
         function setSchoolNo($school_no) {
               $sql = "UPDATE school_teachers SET school_no='$school_no' WHERE school_no='$this->school_no'";
               mysql_query($sql);
         }
         
         function getSchoolNo(){
             return $this->schoolNo;
         }
         
         
         
         
         function setYear($year) {
            $sql = "UPDATE school_teachers SET year='$year' WHERE school_no='$this->school_no'";
               mysql_query($sql);
         }
         
         function getYear(){
             return $this->year;
         }
         
         
         
         function setHeadmaster($headmaster) {
             $sql = "UPDATE school_teachers SET headmaster='$headmaster' WHERE school_no='$this->school_no'";
               mysql_query($sql);
         }
         
         function getHeadmaster(){
             return $this->headmaster;
         }
         
         
         function setSecondmaster($secondmaster) {
             $sql = "UPDATE school_teachers SET secondmaster='$secondmaster' WHERE school_no='$this->school_no'";
               mysql_query($sql);
         }
         
         function getSecondmaster(){
             return $this->secondmaster;
         }
         
         
         function setAcademic($academic) {
             $sql = "UPDATE school_teachers SET academic='$academic' WHERE school_no='$this->school_no'";
               mysql_query($sql);
         }
         
         function getAcademic(){
             return $this->academic;
         }
         
         
         function setDispline($displine) {
             $sql = "UPDATE school_teachers SET displine='$displine' WHERE school_no='$this->school_no'";
               mysql_query($sql);
         }
         
         function getDispline(){
             return $this->displine;
         }
             
}

?>
