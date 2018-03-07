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

  function registerUser($username,$email,$password,$gender,$dob,$ip_address,$reg_date,$reg_time){
    $query = $this->link->prepare("INSERT INTO user (username,email,password,gender,dob,ip_address,reg_date,reg_time) VALUES (?,?,?,?,?,?,?,?)");
    $values = array($username,$email,$password,$gender,$dob,$ip_address,$reg_date,$reg_time);
    $query->execute($values);
    $counts = $query->rowCount();
    return $counts;
  }

  function loginUser($username,$password){
    $query = $this->link->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
    $rowcount = $query->rowCount();
    return $rowcount;
  }

  function getUserInfo($username){
    $query=$this->link->query("SELECT * FROM user WHERE username = '$username'");
    $rowcount = $query->rowCount();
    if($rowcount == 1){
      $result=$query->fetchAll();
      return $result;
    }else{
      return $rowcount;
    }
  }
}


 ?>
