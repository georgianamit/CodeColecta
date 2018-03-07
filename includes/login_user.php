<?php

  if(isset($_POST['signup'])){
    session_start();
    include_once("class.ManageUsers.php");
    $user = new ManageUsers();

    $username = $_POST['username'];
    $email = $_POST['signup-email'];
    $password = $_POST['signup-password'];
    $dob_day = $_POST['day'];
    $dob_month = $_POST['month'];
    $dob_year = $_POST['year'];
    $dob = $dob_day.'-'.$dob_month.'-'.$dob_year;
    $dob = date('Y-m-d',strtotime($dob));
    $gender = $_POST['gender'];
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $reg_date = date("Y-m-d");
    $reg_time = date("H:i:s");

    if(empty($username) || empty($email) || empty($password) || empty($dob) || empty($gender) || empty($ip_address) || empty($reg_date) || empty($reg_time) ){
      $error = "You have to fill all the fields.";
    }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
      $error = "Email is invalid.";
    }else{
      $check_availablity=$user->getUserInfo($username);
      if($check_availablity == 0){
        $password = md5($password);
        $register_user = $user->registerUser($username,$email,$password,$gender,$dob,$ip_address,$reg_date,$reg_time);
        if($register_user == 1){
          $make_sessions = $user->getUserInfo($username);
          foreach ($make_sessions as $user_session) {
            $_SESSION['username'] = $user_session['username'];
            if(isset($_SESSION['username'])){
              header("location: home.php");
            }
          }
        }

      }else{
        $error = "Username already exists";
      }
    }
  }
 ?>
