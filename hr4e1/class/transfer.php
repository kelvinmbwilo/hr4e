<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of transfer
 *
 * @author justin
 */
class transfer {
    private $transferId;
    private $ssn ;
    private $from;
    private $to;
    private $transferDate;
    private $paymentStatus;
    
    function __construct($transfer_id) {
        $sql = "SELECT * FROM transfer WHERE transfer_id='$transfer_id'";
        $result = mysql_query($sql);
        
        while ($row = mysql_fetch_array($result)) {
            $this->from               =     $from;
            $this->paymentStatus      =     $payment_status;
            $this->ssn                =     $ssn;
            $this->to                 =     $to;
            $this->transferDate       =     $transfer_date;
            $this->transferId         =     $transfer_id;
            
            
        }
    }
    
    
    function setFrom($from) {
        $sql="UPDATE transfer SET from='$from' WHERE transfer_id='$this->transferId'";
        mysql_query($sql);
    }
    
    function getFrom() {
        return $this->from;
    }
    
    function setTo($to) {
        $sql="UPDATE transfer SET to='$to' WHERE transfer_id='$this->transferId'";
        mysql_query($sql);
    }
    
    function getTo() {
        return $this->to;
    }
    
    function setTransferId($transfer_id) {
         $sql="UPDATE transfer SET transfer_id='$transfer_id' WHERE transfer_id='$this->transferId'";
        mysql_query($sql);
    }
    
    function getTransferId() {
        return $this->transferId;
    }
    
    function setSsn($ssn) {
         $sql="UPDATE transfer SET ssn='$ssn' WHERE transfer_id='$this->transferId'";
        mysql_query($sql);
    }
    
    function getSsn() {
        return $this->ssn;
    }
    
    function setTransferDate($transfer_date) {
         $sql="UPDATE transfer SET transfer_date='$transfer_date' WHERE transfer_id='$this->transferId'";
        mysql_query($sql);
    }
    
    function getTransferDate() {
        return $this->transferDate;
    }
    
    function setPaymentStatus($payment_status) {
         $sql="UPDATE transfer SET payment_status='$payment_status' WHERE transfer_id='$this->transferId'";
        mysql_query($sql);
    }
    
    function getPaymentStatus() {
        return $this->paymentStatus;
    }
    
}

?>
