<?php
session_start();
include_once("includes/header.php");
include_once("includes/navigation.php");
include_once("includes/class.ManageUsers.php");
include_once("includes/update.settings.php");
$user = new ManageUsers();
 ?>
<div class="container" style="padding-top:20px;">
  <div class="row">
    <div class="col-sm-3 text-center">
      <div>
          <img src="images/pic.png" height="180px" width="180px" alt="...">
          <br><br>
          <form method="post" action="">
            <div class="form-group text-center">
              <input type="file" class="form-control-file" ><br>
              <input class="btn btn-success btn-md"type="submit" value="Upload Image" name="upload-pic">
            </div>
          </form>
          <hr>
      </div>
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <span><h3>Personal</h3></span>
        <a class="nav-link in active" id="nav-profile-settings" data-toggle="pill" href="#profile-settings" role="tab" aria-controls="profile-settings" aria-selected="true">Profile</a>
        <a class="nav-link" id="nav-bio-settings" data-toggle="pill" href="#bio-settings" role="tab" aria-controls="bio-settings" aria-selected="false">Bio</a>
        <hr>
        <h3>Account</h3>
        <a class="nav-link" id="nav-setting-settings" data-toggle="pill" href="#setting-settings" role="tab" aria-controls="setting-settings">Setting</a>
        <a class="nav-link" id="nav-password-settings" data-toggle="pill" href="#password-settings" role="tab" aria-controls="bio-settings" aria-selected="false">Password</a>
      </div>

    </div>
    <div class="col-sm-9">

      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane active" id="profile-settings" role="tabpanel" aria-labelledby="personal-settings">
          <h3>Profile</h3>
          <hr>
          <form method="post" action="">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="first-name">First Name</label>
                <input type="text" class="form-control" id="first-name" name="first-name" placeholder="First Name">
              </div>
              <div class="form-group col-md-6">
                <label for="last-name">Password</label>
                <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Last Name">
              </div>
            </div>
            <div class="form-group">
              <label for="university">University</label>
              <input type="text" class="form-control" id="university" name="university" placeholder="ABC SCHOOL XYZ CITY">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="branch">Branch</label>
                <input type="text" class="form-control" id="branch" name="branch" placeholder="Branch">
              </div>
              <div class="form-group col-md-2">
                <label for="course">Course</label>
                <input type="text" class="form-control" id="course" name="course" placeholder="Course">
              </div>
              <div class="form-group col-md-2">
                <label for="from">From</label>
                <input type="text" class="form-control" id="from" name="from" placeholder="From">
              </div>
              <div class="form-group col-md-2">
                <label for="till">Till</label>
                <input type="text" class="form-control" id="till" name="till" placeholder="Till">
              </div>
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city">
              </div>
              <div class="form-group col-md-3">
                <label for="state">State</label>
                <input type="text" class="form-control" id="state" name="state" placeholder="State">
              </div>
              <div class="form-group col-md-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" name="zip" placeholder="zip">
              </div>
              <div class="form-group col-md-3">
                <label for="country">country</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="country">
              </div>
            </div>
            <button type="submit" class="btn btn-primary" name="update-profile">Update Profile</button>
          </form>
        </div>
        <div class="tab-pane fade" id="bio-settings" role="tabpanel" aria-labelledby="personal-settings">
          <h3>Bio</h3>
          <hr>
          <form method="post" action="">
            <div class="form-group">
              <label for="motto">Motto</label>
              <input type="text" class="form-control" id="motto" placeholder="CODING IS MY LIFE">
            </div>
            <div class="form-group">
              <label for="website">Website</label>
              <input type="text" class="form-control" id="website" placeholder="http://www.spiderlabweb.com">
            </div>
            <div class="form-group">
              <label for="about">Describe yourself</label>
              <textarea class="form-control" id="about" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="update-bio">Update Bio</button>
          </form>
        </div>
        <div class="tab-pane fade" id="setting-settings" role="tabpanel" aria-labelledby="personal-settings">
          <h3>Account Setting</h3>
          <hr>
          <form method="post" action="">
            <div class="form-group">
              <label for="username">Your Username</label>
              <small id="username-define" class="form-text text-muted">(This is how users will see you on CodeColecta.)</small>
              <input type="text" class="form-control" id="username" placeholder="Username">
            </div>
            <div class="form-group col-md-3">
              <label for="language">Language</label>
              <select id="language" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <input class="btn btn-primary"type="submit" value="Update" name="update-username-language">
          </form>
            <hr>
            <div class="form-group">
              <label>Connected Accounts</label><br>
              <button type="button" class="btn btn-primary">Connect to Facebook</button><br><br>
              <button type="button" class="btn btn-secondary">Connect to Github</button><br><br>
              <button type="button" class="btn btn-danger">Connect to Google+</button><br><br>
              <button type="button" class="btn btn-info">Connect to LinkedIn</button><br><hr>
            </div>
            <form method="post" action="">
              <div class="form-group">
                <label for="delete-account">Delete Account</label>
                <small id="username-define" class="form-text text-muted">Delete your account and all information related to your account such as your profile page, badges earned and leaderboard positions. Please be aware that all data will be permanently lost if you delete your account.</small>
                <br>
                <button type="button" class="btn btn-danger">Delete My Account</button><br><hr>
              </div>
            </form>
        </div>
        <div class="tab-pane fade" id="password-settings" role="tabpanel" aria-labelledby="personal-settings">
          <h3>Password Setting</h3>
          <hr>
          <form action="" method="post">
            <div class="form-group">
              <label for="current-password">Current Password</label>
              <input type="password" class="form-control" id="current-password" placeholder="Current Password">
              <label for="new-password">New Password</label>
              <input type="password" class="form-control" id="new-password" placeholder="New Password">
              <label for="re-new-password">Rewrite New Password</label>
              <input type="password" class="form-control" id="re-new-password" placeholder="Rewrite New Password">
              <br>
              <input class="btn btn-primary" type="submit" name="update-password" value="Update Password">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once("includes/footer.php"); ?>
