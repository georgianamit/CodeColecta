<?php
  include_once("includes/header.php");
  include_once("includes/navigation.php");
?>


    <div class="container" style="padding-top: 50px;">
        <div class="row">
            <div class="col-sm-5">
              <div class="alert alert-success">
                <form>
                    <h3>Sign Up</h3>
                    <hr>
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" id="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    Birthday
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <select id="day" class="form-control">
                          <option selected>DD</option>
                          <?php for($i=1;$i<=31;$i++){ ?>
                          <option><?php echo($i);?></option>
                        <?php } ?>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <select id="month" class="form-control">
                          <option selected>MM</option>
                          <?php for($i=1;$i<=12;$i++){ ?>
                          <option><?php echo($i);?></option>
                        <?php } ?>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <select id="inputState" class="form-control">
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
                          <input type="radio" checked="checked" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                          <label class="custom-control-label" for="customRadioInline1">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                          <label class="custom-control-label" for="customRadioInline2">Female</label>
                        </div>
                      </div>
                    </div>
                  <button type="submit" class="btn btn-primary">Sign Up</button>
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
                    <label for="signinemail">Email address</label>
                    <input type="email" class="form-control" id="signinemail" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="signinpassword">Password</label>
                    <input type="password" class="form-control" id="signinpassword" placeholder="Password">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="rememberme">
                    <label class="form-check-label" for="rememberme">Remember me</label>
                  </div>
                  <button type="submit" class="btn btn-primary">Sign In</button>
                </form>
              </div>
            </div>
        </div>
    </div>


<?php include_once("includes/footer.php"); ?>
