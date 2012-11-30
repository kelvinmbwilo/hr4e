<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of view
 *
 * @author kelvin
 */
class view {
   function __construct() {
       
   }
    
   function isInDatabase($testvar,$table,$column){
       $query = mysql_query("SELECT $column FROM $table WHERE $column = '$testvar'");
       if(mysql_num_rows($query) == 0){
           return false;
       }else {
           return true;
       }
   }
   
   function viewAdmin(){
       
   }
  
}

?>
