<?php
  session_start();
  include_once("includes/header.php");
  include_once("includes/navigation.php");
?>
<div class="container" style="padding-top: 20px;">
   <div class="row" st>
    <div class="col-sm-3 text-center" >
        <div class="">
            <img src="images/pic.jpg" height="180px" width="180px" alt="...">
        </div>
        <div class="">
            <h4>Amit Rawat<br>
            <span style="color:grey;"><font size="4">(@spider)</font></span>
        </h4>
        </div>
        <div class="alert alert-success">
              <h5>User Details</h5>
              <hr>
              <p>Data Analysts</p>
              <p>Data Scientist</p>
        </div>
		<div class="">
		    <button type="button" class="btn btn-success">Follow</button>
        <button type="button" class="btn btn-info">Message</button>
		</div>
    </div>
    	<div class="col-sm-9">
			<div class="row alert alert-warning">

					<div class="col-sm-4">
						<span class="glyphicon glyphicon-arrow-down">Followers</span><span class="budge"><?php echo "75467"; ?></span>
					</div>
					<div class="col-sm-4">
						  <span class="glyphicon glyphicon-arrow-down">Following</span><span class="budge"><?php echo "75657"; ?></span>
					</div>
					<div class="col-sm-4">
						  <span class="glyphicon glyphicon-arrow-down">Score</span><span class="budge"><?php echo "757564"; ?></span>
					</div>

			</div>
      <div>
        <textarea class="ckeditor" name='txtarea1'></textarea>
      </div>
				<?php for($i=0;$i<5;$i++){?>
				<div class="jumbotron">
					<div class="row">
						<div class="col-md-2">
						  <!-- Profile pic -->
						  <img class="thumbnail pic-thumbnail" src="images/pic.jpg" alt="profile pic" />
						</div>
						<div class="col-md-7">
						  <!-- title and time -->
						  <h5 id="post-title"><?php echo "how to make blue box in java"; ?></h5>
						  <h6 id="post-by"><?php echo "Spider"; ?></h6>
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
						  <?php echo "sdhfiksdhfik ed ehfoieswhf k eed iew iew iewiedujedsw iew eiwiwesdisd wiueswdg fd iei ewi ewie wiewrfiwedgsdiwbgfi dsdudguedse"; ?>
						</div>
					</div>
					<div class="row" style="border-bottom: 1px solid grey;">
						<div class="col-sm-6" style="border-left: 1px solid grey;">
						  <span class= "glyphicon glyphicon-arrow-up"></span><span class="badge"><?php echo "464"; ?></span>
					  </div>

						<div class="col-sm-6" style="border-left: 1px solid grey; border-right: 1px solid grey;">
						  <span class="glyphicon glyphicon-arrow-down"></span><span class="badge"><?php echo "757"; ?></span>
						</div>
					</div>
        </div>

				<?php }?>

        </div>
   	</div>

</div>



<?php include_once("includes/footer.php"); ?>
