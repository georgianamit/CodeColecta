<?php
  include_once("includes/header.php");
  include_once("includes/navigation.php");
  include_once("includes/login_user.php");
?>


    <div class="container" style="padding-top: 50px;">
        <div class="row">
            <div class="col-sm-5">
              <div class="alert alert-success">
                <form method="post" action="index.php">
                    <h3>Sign Up</h3>
                    <hr>
                    <?php if(isset($error)){
                      echo "<div class='alert alert-danger'>$error</div>";
                    }
                    ?>
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="signup-email">Email</label>
                      <input type="email" class="form-control" id="signup-email" name="signup-email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="signup-password">Password</label>
                      <input type="password" class="form-control" id="signup-password" name="signup-password" placeholder="Password">
                    </div>
                    Birthday
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <select id="day" name="day" class="form-control">
                          <option selected>DD</option>
                          <?php for($i=1;$i<=31;$i++){ ?>
                          <option><?php echo($i);?></option>
                        <?php } ?>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <select id="month" name="month" class="form-control">
                          <option selected>MM</option>
                          <?php for($i=1;$i<=12;$i++){ ?>
                          <option><?php echo($i);?></option>
                        <?php } ?>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <select id="year" name="year" class="form-control">
                          <option selected>YYYY</option>
                          <?php for($i=2018;$i>=1980;$i--){ ?>
                          <option><?php echo($i);?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    Gender
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" checked="checked" id="male" name="gender" value="male" class="custom-control-input">
                          <label class="custom-control-label" for="male">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="female" name="gender" value="female" class="custom-control-input">
                          <label class="custom-control-label" for="female">Female</label>
                        </div>
                      </div>
                    </div>
                  <button type="submit" class="btn btn-primary" name="signup">Sign Up</button>
                </form>
              </div>
            </div>
            <div class="col-sm-2">
                <div class="vl"></div>
            </div>
            <div class="col-sm-5 align-middle">
              <div class="alert alert-success">
                <h3>Sign In</h3>
                <hr>
                <form>
                  <div class="form-group">
                    <label for="signin-email">Email address</label>
                    <input type="email" class="form-control" id="signin-email" name="signin-email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="signin-password">Password</label>
                    <input type="password" class="form-control" id="signin-password" name="signin-password" placeholder="Password">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="rememberme">
                    <label class="form-check-label" for="rememberme">Remember me</label>
                  </div>
                  <button type="submit" class="btn btn-primary" name="signin">Sign In</button>
                </form>
              </div>
            </div>
        </div>
    </div>


<?php include_once("includes/footer.php"); ?>
