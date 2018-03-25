<?php
  // Sign up
  if(isset($_POST['signup'])){
    include_once("class.ManageUsers.php");
    $user = new ManageUsers();

    $username = $_POST['signup-username'];
    $email = $_POST['signup-email'];
    $password = $_POST['signup-password'];
    $dob_day = $_POST['day'];
    $dob_month = $_POST['month'];
    $dob_year = $_POST['year'];
    $dob = $dob_day.'-'.$dob_month.'-'.$dob_year;
    $dob = date('Y-m-d',strtotime($dob));
    $gender = $_POST['gender'];
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $reg_date_time=date("Y-m-d H:i:s");

    if(empty($username) || empty($email) || empty($password) || empty($dob) || empty($gender) || empty($ip_address) || empty($reg_date_time)){
      $signup_error = "You have to fill all the fields.";
    }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
      $signup_error = "Email is invalid.";
    }else{
      $check_availablity=$user->getUserInfo($username);
      if($check_availablity == 0){
        $password = md5($password);
        $register_user = $user->registerUser($username,$email,$password,$gender,$dob,$ip_address,$reg_date_time);
        if($register_user == 1){
          $make_sessions = $user->getUserID($username);
          foreach ($make_sessions as $user_session) {
            $_SESSION['u_id'] = $user_session['u_id'];
            if(isset($_SESSION['u_id'])){ ?>
              <script>window.location="home.php"</script>
            <?php
            }
          }
        }
      }else{
        $signup_error = "Username already exists";
      }
    }
  }

  // Sign in
  if(isset($_POST['signin'])){
    include_once("class.ManageUsers.php");
    $user = new ManageUsers();
    $username = $_POST['signin-username'];
    // $email = $_POST['signin-email'];
    $password = $_POST['signin-password'];
    if(empty($username) || empty($password)){
      $signin_error = "All fields are required.";
    }else{
      $auth_user = $user->loginUser($username,$password);
      if($auth_user == 1){
        $make_sessions = $user->getUserID($username);
        foreach ($make_sessions as $user_session) {
          $_SESSION['u_id'] = $user_session['u_id'];
          if(isset($_SESSION['u_id'])){ print_r($_SESSION);?>
            <script>window.location="home.php"</script>
      <?php
          }
        }
      }else{
        $signin_error = "Invalid username or password";
      }
    }
  }
 ?>
