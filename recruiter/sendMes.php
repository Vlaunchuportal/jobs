<!-- start banner Area -->
<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Send Messages
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html">Messages</a></p>
						</div>											
					</div>
				</div>
</section>
			<!-- End banner Area -->	
<style>
    .btnsss{
        position: absolute;
        margin-left: 65%;
    }

    @media screen and (max-width: 600px){
        
        .btnsss{
            margin-left:55%;
        }
    }
</style>

<?php
include('./header.php');

?>

<!-- Start Jobs Listings post Area --> <br><br><br>
							<h1 class="" style="  text-align: center; " >
								Send Messages
							</h1>	
							
<section class="post-area section-gap">

				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
                        	
							<ul class="cat-list">
								
								<li><a href="#">read</a></li>
								
							</ul>
							<?php
                    
							$sql = "SELECT * FROM mail where posted = 'recruiter'" ;
							
							$result = $conn->query($sql);
							if($result->num_rows > 0)
							{
								while($row = $result -> fetch_assoc())

								{
							?>
							<form action="single.php" method="POST" class="d-inline">
							<div class="single-post d-flex flex-row">
								<div class="thumb">
									<img src="../img/<?php echo "user.png";  ?>" style=" width: 70px; height: 70px; border-radius: 150px; " alt="">
									
								</div>
								<div class="details">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
										
										
										
											<form action="sendmessageview.php" method="POST" class="d-inline">
											<input type="hidden" name="viewid" value="<?php echo $row['mid']; ?>">
											<button class="hidebtn" type="submit" name="view" value="view"><h4><?php echo $row['cemail']; ?></h4></button>
											</form>
											<h6><?php echo $row['jobname']; ?></h6>					
										
                                        <!-- <input type="hidden" name="applyid" value="<?php// echo $row['cid']; ?>">
											<a href="single.php" ><h4><?php// echo $row['cname']; ?></h4></a>
											<h6><?php// echo $row['cskills']; ?></h6>					 -->
										</div>
										<ul class="btnsss">
										<form action="#" method="POST" class="d-inline">
										<input type="hidden" name="connectid" value="<?php echo $row['mid']; ?>">
										<button type="submit" class="btn job-view btn-danger" name="connect" value="connect">Delete</button><br><br>
										</form>
											
                                        <form action="#" method="POST" class="d-inline">
										<input type="hidden" name="connectid" value="<?php echo $row['mid']; ?>">
										<button type="submit" class="btn job-view btn-info" name="connect" value="connect">Reply</button>
										</form>
										</ul>
									</div>
									<p>
									<?php echo $row['jobid']; ?>
									</p>
									<?php echo $row['messages']; ?>
								</div>
                                
							</div>
							</form>
							<?php
                			}
                			}
                            else {
                                echo "0 Messages";
        
                            		}
                            

                			?>	
							
							

						</div>
                    </div>
                </div>
</section>


<?php
include('./footer.php');
?>