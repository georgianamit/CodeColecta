<?php
include_once('class.database.php');

class ManageUsers
{
  public $link;
  function __construct()
  {
    $db_connection = new dbConnection();
    $this->link=$db_connection->connect();
    return $this->link;
  }

  function registerUsers($username,$email,$password,$gender,$dob,$ip_address,$time,$date){
    $query = $this->link->prepare("INSERT INTO user (username,email,password,gender,dob,ip_address,reg_date,reg_time) VALUES (?,?,?,?,?,?,?,?)");
    $values = array($username,$email,$password,$gender,$dob,$ip_address,$time,$date);
    $query->excute($values);
    $counts = $query->rowCount();
    return $counts;
  }
}


 ?>
