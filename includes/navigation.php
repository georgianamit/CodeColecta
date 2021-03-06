<?php
  if(isset($_POST['post'])){
    include_once('class.ManagePost.php');
    include_once('class.ManageUsers.php');
    $post = new ManagePosts();
    $user = new ManageUsers();

    $post_title = $_POST['post-title'];
    $post_content = "<div>".$_POST['txtarea1']."</div>";
    $upload_time = date('Y-m-d h:i:s a', time());
    $userid = $_SESSION['u_id'];

    if(empty($post_title) || empty($post_content)){
      $post_error = "You have to fill all the fields.";
    }else{
      $post_status=$post->uploadPost($post_title,$post_content,$userid,$upload_time);
      unset($_POST);
      header("Refresh:0");
    }
  }
 ?>
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e6ffff;">
<a class="navbar-brand" href="#">Code<span style="color:"red";">/</span>Colecta<span style="color:"red";">/</span></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <form class="form-inline my-2 my-lg-0" style="float: right;">
  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
<?php if(isset($_SESSION['u_id'])){
  include_once('class.ManageUsers.php');
  $user = new ManageUsers();
?>
    <ul class="navbar-nav justify-content-end">
      <li class="nav-item active">
          <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#post">Post</button>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $user->getUsername($_SESSION['u_id']);?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Score:<?="1234"?></a>
          <a class="dropdown-item" href="settings.php">Settings</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="includes/logout.php">Logout</a>
          </div>
      </li>
    </ul>
<?php } ?>

  </div>
</nav>

<div class="modal fade bd-example-modal-l" id="post" tabindex="-1" role="dialog" aria-labelledby="post-popup" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <?php if(isset($post_error)){
        echo "<div class='alert alert-danger'>$post_error</div>";
      }
      ?>
     <div class="modal-header">
        <h5 class="modal-title" id="post">New Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="form-group">
            <input type="text" name="post-title" class="form-control" id="recipient-name" placeholder="Title">
          </div>
          <div>
            <textarea class="ckeditor" name='txtarea1'></textarea>
          </div>
          <br>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" name="post">Post</button>
        </form>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
