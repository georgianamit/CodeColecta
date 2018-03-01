<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" src="/css/style.css"/>
    <script src="/js/main.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light "style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#">CodeColecta</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Post</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo("Username");?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Score:<?="1234"?></a>
            <a class="dropdown-item" href="#">Settings</a>

            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Logout</a>
            </div>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
    <div class="container">
        <div class="row">

        </div>
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
                    <div class="form-group">
                      <label for="repassword">Re-Write Password</label>
                      <input type="password" class="form-control" id="repassword" placeholder="Re-Write Password">
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
                  <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
              </div>
            </div>
            <div class="col-sm-2">
                <div class="vl">
                </div>
            </div>
            <div class="col-sm-5">
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
    <nav class="navbar fixed-bottom navbar-expand-sm navbar-light bg-light">
        Copyright &copy; 2018
    </nav>
</body>
</html>
