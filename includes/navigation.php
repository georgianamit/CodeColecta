<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #99bbff;">
<a class="navbar-brand" href="#">CodeColecta</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
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
