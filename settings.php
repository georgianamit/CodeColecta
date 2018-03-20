<?php
include_once("includes/header.php");
include_once("includes/navigation.php");
 ?>
<div class="container" style="padding-top:20px;">
  <div class="row">
    <div class="col-sm-3 text-center">
      <div class="">
          <img src="images/pic.jpg" height="180px" width="180px" alt="...">
          <br><br>
          <button type="button" name="update-pic" class="button button-info">Upload Pic</button>
          <br>
      </div>
      <span><h3>Personal</h3></span>
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link in active" id="nav-profile-settings" data-toggle="pill" href="#profile-settings" role="tab" aria-controls="profile-settings" aria-selected="true">Profile</a>
        <a class="nav-link" id="nav-bio-settings" data-toggle="pill" href="#bio-settings" role="tab" aria-controls="bio-settings" aria-selected="false">Bio</a>
      </div>
    </div>
    <div class="col-sm-9">

      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane active" id="profile-settings" role="tabpanel" aria-labelledby="personal-settings">
          <h3>Profile</h3>
          <hr>
          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="first-name">First Name</label>
                <input type="text" class="form-control" id="first-name" placeholder="First Name">
              </div>
              <div class="form-group col-md-6">
                <label for="last-name">Password</label>
                <input type="text" class="form-control" id="last-name" placeholder="Last Name">
              </div>
            </div>
            <div class="form-group">
              <label for="school-university">School/University</label>
              <input type="text" class="form-control" id="school-university" placeholder="ABC SCHOOL XYZ CITY">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="branch">Branch</label>
                <input type="text" class="form-control" id="branch" placeholder="Branch">
              </div>
              <div class="form-group col-md-2">
                <label for="course">Course</label>
                <input type="text" class="form-control" id="course" placeholder="Course">
              </div>
              <div class="form-group col-md-2">
                <label for="from">From</label>
                <input type="text" class="form-control" id="from" placeholder="From">
              </div>
              <div class="form-group col-md-2">
                <label for="till">Till</label>
                <input type="text" class="form-control" id="till" placeholder="Till">
              </div>
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city">
              </div>
              <div class="form-group col-md-3">
                <label for="state">State</label>
                <select id="state" class="form-control">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip">
              </div>
              <div class="form-group col-md-3">
                <label for="country">country</label>
                <select id="country" class="form-control">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" name="update-profile">Update</button>
          </form>
        </div>
        <div class="tab-pane fade" id="bio-settings" role="tabpanel" aria-labelledby="personal-settings">
          <h3>Bio</h3>
          <hr>
          <form>
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
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once("includes/footer.php"); ?>
