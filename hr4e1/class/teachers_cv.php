<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of teachers_cv
 *
 * @author justin
 */
class teachers_cv {
    private $ssn;
    private $primarySchool;
    private $primaryTime;
    private $olevelSchool;
    private $olevelTime;
    private $advanceSchool;
    private $advanceTime;
    private $university;
    private $universityTime;
    private $universityAward;
    
    function __construct($ssn) {
        $sql = "SELECT * FROM teachers_cv WHERE ssn='$ssn'";
        $result = mysql_query($sql);
        while ($row = mysql_fetch_array($result)) {
            extract($row);
            $this->advanceTime      =      $advance_time;
            $this->advanceSchool    =      $advance_school;
            $this->olevelSchool     =      $olevel_school;
            $this->olevelTime       =      $olevel_time;
            $this->primarySchool    =      $primary_school;
            $this->primaryTime      =      $primary_time;
            $this->ssn              =      $ssn;
            $this->university       =      $university;
            $this->universityAward  =      $university_award;
            $this->universityTime   =      $university_time;
            
            
        }
    }
    
    function setAdvanceTime($advance_time) {
        $sql="UPDATE teachers_cv SET advance_time='$advance_time' WHERE ssn='$this->ssn'";
        mysql_query($sql);
    }
    
    function getAdvanceTime(){
        return $this->advanceTime;
        
    }
    
    
    function setAdvanceSchool($advance_school) {
        $sql="UPDATE teachers_cv SET advance_school='$advance_school' WHERE ssn='$this->ssn'";
        mysql_query($sql);
    }
    
    function getAdvanceSchool(){
        return $this->advanceSchool;
        
    }
    
    function setSsn($ssn) {
        $sql="UPDATE teachers_cv SET ssn='$ssn' WHERE ssn='$this->ssn'";
        mysql_query($sql);
    }
    
    function getSsn(){
        return $this->ssn;
        
    }
    
    function setPrimarySchool($primary_school) {
        $sql="UPDATE teachers_cv SET primary_school='$primary_school' WHERE ssn='$this->ssn'";
        mysql_query($sql);
    }
    
    function getPrimarySchool(){
        return $this->primarySchool;
        
    }
    
    function setPrimaryTime($primary_time) {
        $sql="UPDATE teachers_cv SET primary_time='$primary_time' WHERE ssn='$this->ssn'";
        mysql_query($sql);
    }
    
    function getPrimaryTIme(){
        return $this->primaryTime;
        
    }
    
    function setOlevelSchool($olevel_school) {
        $sql="UPDATE teachers_cv SET olevel_school='$olevel_school' WHERE ssn='$this->ssn'";
        mysql_query($sql);
    }
    
    function getOlevelSchool(){
        return $this->olevelSchool;
        
    }
    
     function setOlevelTime($olevel_time) {
        $sql="UPDATE teachers_cv SET olevel_time='$olevel_time' WHERE ssn='$this->ssn'";
        mysql_query($sql);
    }
    
    function getOlevelTime(){
        return $this->olevelTime;
        
    }
    
    function setUniversity($university) {
        $sql="UPDATE teachers_cv SET university='$university' WHERE ssn='$this->ssn'";
        mysql_query($sql);
    }
    
    function getUniversity(){
        return $this->university;
        
    }
    
    function setUniversityTime($university_time) {
        $sql="UPDATE teachers_cv SET university_time='$university_time' WHERE ssn='$this->ssn'";
        mysql_query($sql);
    }
    
    function getUniversityTime(){
        return $this->universityTime;
        
    }
    
    function setUniversityAward($university_award) {
        $sql="UPDATE teachers_cv SET university_award='$university_award' WHERE ssn='$this->ssn'";
        mysql_query($sql);
    }
    
    function getUniversityAward(){
        return $this->universityAward;
        
    }
    
}

?>
