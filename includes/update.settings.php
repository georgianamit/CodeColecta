<?php
if(isset($_Post['update-profile'])){
  include_once("class.ManageUsers.php");
  $user = new ManageUsers();
  $first_name=$_POST['first-name'];
  $last_name=$_POST['last-name'];
  $university = $_POST['university'];
  $branch = $_POST['branch'];
  $course = $_POST['course'];
  $start_from = $_POST['from'];
  $till = $_POST['till'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $zip = $_POST['zip'];
  $country = $_POST['country'];
  if(empty($first_name) || empty($last_name) || empty($school_university) || empty($branch) || empty($course) || empty($from) || empty($till) || empty($address) || empty($city) || empty($state) || empty($zip) || empty(country)){
    $update_profile_error = "You have to fill all the fields.";
  }else{
    $update_user=$user->updateProfile($first_name,$last_name,$university,$branch,$course,$start_from,$till,$address,$city,$state,$zip,$country);
    if($update_user == 1){
      $update_profile_success = "you have successfully updated your profile";
    }else{
      $update_profile_error = "Your profile is not updated. Try again.";
    }
  }
}

if (isset($_POST['upload-pic'])) {
  $file = $_FILE['pic'];
  if(!empty($file)){

  }
}

if(isset($_POST['update-password'])){

}

if(isset($_POST['delete-account'])){

}

if(isset($_POST['update-username-language'])){

}


if(isset($_POST['update-bio'])){

}


 ?>
