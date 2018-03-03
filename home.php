<?php
  include_once("includes/header.php");
  include_once("includes/navigation.php")
?>

<div class="container" style="padding-top: 20px;">
  <div class="row">
    <div class="col-sm-8">
      <?php for($i=1;$i <= 5;$i++){ ?>
        <?php require("includes/postupdates.php") ?>
      <?php } ?>
    </div>
    <div class="col-sm-4">
      <?php for($j=0;$j <= 10; $j++) {
        require("includes/trending.php");
      } ?>
    </div>
  </div>
</div>

<?php include_once("includes/footer.php");?>
