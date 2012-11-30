<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of subject
 *
 * @author justin
 */
class subject {
    
    private $subjectName;
    private $subjectCode;
    
    function __construct($subject_code) {
        $sql = "SELECT * FROM subject WHERE subject_code='$subject_code'";
        $result = mysql_query($sql);
        
        while ($row = mysql_fetch_array($result)) {
            extract($row);
            
            $this->subjectCode = $subject_code;
            $this->subjectName = $subject_name;
            
        }
    }
    
    function setSubjectCode($subject_code) {
        $sql="UPDATE subject SET subject_code='$subject_code' WHERE subject_code='$this->subject_code'";
        mysql_query($sql);
    }
    
    function getSubjectCode( ) {
        return $this->subjectCode;
    }
    
    function setSubjectName($subject_name) {
        $sql="UPDATE subject SET subject_name='$subject_name' WHERE subject_code='$this->subject_code'";
        mysql_query($sql);
    }
    
    function getSubjectName( ) {
        return $this->subjectName;
    }
}

?>
