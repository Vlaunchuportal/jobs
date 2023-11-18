  <!-- start banner Area -->
  <section class="banner-area relative" id="home">	
                    <div class="overlay overlay-bg"></div>
                    <div class="container">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="about-content col-lg-12">
                                <h1 class="text-white">
                                    Newsletters		
                                </h1>	
                                <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html"> jobs</a></p>
                            </div>											
                        </div>
                    </div>
            </section>
                <!-- End banner Area -->

<?php
include('./header.php');

if(isset($_SESSION['is_login'])) {
    $canLogEmail = $_SESSION['remail'];
} else {
    echo "<script> location.href='../index.php';</script>";
}


?>


<!-- Start Jobs Listings post Area -->
<section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
							<ul class="cat-list">
								
								<li><a href="#">Featured jobs for you</a></li>
								
							</ul>
							<?php
                    
                            $sql = "SELECT * FROM candidate WHERE cskills = 'java' ";
							
							$result = $conn->query($sql);
							if($result->num_rows > 0)
							{
								while($row = $result -> fetch_assoc())

								{
							?>
							
							<div class="single-post d-flex flex-row">
								
								<div class="details">
									<div class="title d-flex flex-row justify-content-between">
									
									
										<div class="titles">
										
											<form action="" method="POST" class="d-inline">
											<input type="hidden" name="viewid" value="<?php echo $row['cid']; ?>">
											<button class="hidebtn" type="submit" name="view" value="view"><h4><?php echo $row['cname']; ?></h4></button>
											</form>
											<h6><?php echo $row['cskills']; ?></h6>					
										</div>
										<!-- <ul class="btns">
											<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
											<li><a href="#">Apply</a></li>
											<form action="single.php" method="POST" class="d-inline">
											<input type="hidden" name="viewid" value="">
											<li><a name="view" value="view" type="submit" href="single.php">View</a></li>
											</form>
										</ul> -->
										
									</div>
									<p>
									<?php echo $row['cexperience']; ?>
									</p>
									
									
                                    <ul class="btns">
                                        <form action="" method="POST" class="d-inline">
										<input type="hidden" name="id" value="<?php echo $row['cid']; ?>">
										<button type="submit" class="btn job-view bt btn-danger" name="delete" value="delete">Clear</button>
										</form>

										<form action="single.php" method="POST" class="d-inline">
										<input type="hidden" name="viewid" value="<?php echo $row['cid']; ?>">
										<button type="submit" class="btn job-view  btn-secondary" name="view" value="view">View</button>
										</form>
										</ul>
                                </div>
							</div>
							
							<?php
                			}
                			}
                            else {
                                echo "0 result";
        
                            		}

                                   
                            

                			?>
                        </div>
                    </div>
                </div>
</section> 




<?php
include('./footer.php');
?>