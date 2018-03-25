<?php
include_once('class.database.php');

class ManageUsers
{
  public $link;
  function __construct()
  {
    $db_connection = new dbConnection();
    $this->link=$db_connection->connect();
  }

  function registerUser($username,$email,$password,$gender,$dob,$ip_address,$reg_date_time){
    $query = $this->link->prepare("INSERT INTO user (username,email,password,gender,dob,ip_address,reg_date_time) VALUES (?,?,?,?,?,?,?)");
    $values = array($username,$email,$password,$gender,$dob,$ip_address,$reg_date_time);
    $query->execute($values);
    $counts = $query->rowCount();
    return $counts;
  }

  function loginUser($username,$password){
    $password = md5($password);
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

  function getUsername($u_id){
  $query=$this->link->query("SELECT username FROM user WHERE u_id = '$u_id'");
  $rowcount = $query->rowCount();
  if($rowcount == 1){
    $result=$query->fetchAll();
    return $result[0]['username'];
  }else{
    return $rowcount;
  }
}

function getUserID($username){
  $query=$this->link->query("SELECT u_id FROM user WHERE username = '$username'");
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
