<?php
  session_start();
  include_once("includes/header.php");
  include_once("includes/navigation.php");
  include_once('includes/class.ManagePost.php');
  include_once('includes/class.ManageUsers.php');
  $post = new ManagePosts();
  $user = new ManageUsers();
?>
<?php if(isset($_SESSION['username'])){ ?>
<?php
$userid = $user->getUserInfo($_SESSION['username']);
$userid = $userid[0]['id'];
$posts = $post->getPostContent($userid);
$trending = $post->getTrendingPost();
?>
<div class="container" style="padding-top: 20px;">
  <div class="row">
    <div class="col-sm-8">
      <?php foreach ($posts as $p){ ?>
        <div class="jumbotron">
          <div class="row">
              <div class="row">
                <div class="col-md-2">
                  <!-- Profile pic -->
                  <img class="thumbnail pic-thumbnail" src="images/pic.jpg" alt="profile pic" />
                </div>
                <div class="col-md-7">
                  <!-- title and time -->
                  <h5 id="post-title"><?php echo $p['post_title']; ?></h5>
                  <h6 id="post-by"><?php echo $_SESSION['username']; ?></h6>
                </div>
                <div class="col-md-2 text-center">
                  <!-- language -->
                  <p class="text-center">Java</p>
                </div>
                <div class="col-md-1 text-center">
                  <!-- show menu (...) -->
                  <p class="text-center">...</p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12" id="post-content">
                  <!-- content -->
                  <?php echo $p['post_content']; ?>
                </div>
              </div>
              <div class="row" style="border-bottom: 1px solid grey;">
                <div class="col-sm-6">
                  <span class= "glyphicon glyphicon-arrow-up"></span><span class="budge"><?php echo $p['upvote']; ?></span>
                </div>
                <div class="col-sm-6" style="border-left: 1px solid grey; border-right: 1px solid grey;">
                  <span class="glyphicon glyphicon-arrow-down"></span><span class="budge"><?php echo $p['downvote']; ?></span>
                </div>
              </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="col-sm-4">
      <?php foreach ($trending as $tp) { ?>
        <div class="jumbotron">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-4">
                  <!-- pic -->
                </div>
                <div class="col-sm-4">
                  <!-- username -->
                  <?php echo $_SESSION['username']; ?>
                </div>
                <div class="col-sm-4">
                  <!-- time ago -->
                </div>
              </div>
              <div class="row" id="trending-title">
                <!-- content(less) -->

              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
<?php }else{
  header("location: index.php");
} ?>

<?php include_once("includes/footer.php"); ?>
