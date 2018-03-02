<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CodeColecta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script src="js/main.js"></script>
</head>
<body style="bg-color:blues">

    <?php include_once("includes/header.php"); ?>
    <div class="container">
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
                          <option>...</option>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <select id="month" class="form-control">
                          <option selected>MM</option>
                          <option>...</option>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <select id="inputState" class="form-control">
                          <option selected>YYYY</option>
                          <option>...</option>
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
</body>
</html>
