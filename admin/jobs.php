        <!-- start banner Area -->
        <section class="banner-area relative" id="home">	
                    <div class="overlay overlay-bg"></div>
                    <div class="container" style="height: 220px;" >
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="about-content col-lg-12">
                                <h1 class="text-white">
                                    Admin section	
                                </h1>	
        
                            </div>											
                        </div>
                    </div>
            </section>
                <!-- End banner Area -->
<?php   
include('./header.php');
if(isset($_SESSION['is_login'])) {
    $aemail = $_SESSION['aemail'];
    $sql = "SELECT * FROM jobs";
    $result = $conn->query($sql);
    $bb = $result->num_rows;
     
} else {
    echo "<script> location.href='../home.php'; </script>";
}




?>


<!-- Start Jobs Listings post Area -->
<section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
							<ul class="cat-list">
								<li><a href="#">All</a></li>
								<li><a href="#">Full Time</a></li>
								<li><a href="#">part Time</a></li>
							</ul>
							<?php
                    
							$sql = "SELECT * FROM jobs" ;
							
							$result = $conn->query($sql);
							if($result->num_rows > 0)
							{
								while($row = $result -> fetch_assoc())

								{
							?>
							
							<div class="single-post d-flex flex-row">
								<div class="thumb">
									<img src="../img/o2.png" alt="">
									<ul class="tags">
										<li>
											<a href="#">Art</a>
										</li>
										<li>
											<a href="#">Media</a>
										</li>
										<li>
											<a href="#">Design</a>					
										</li>
									</ul>
								</div>
								<div class="details">
									<div class="title d-flex flex-row justify-content-between">
									
									
										<div class="titles">
										
											<form action="single.php" method="POST" class="d-inline">
											<input type="hidden" name="viewid" value="<?php echo $row['jid']; ?>">
											<button class="hidebtn" type="submit" name="view" value="view"><h4><?php echo $row['jTitle']; ?></h4></button>
											</form>
											<h6><?php echo $row['jSkills']; ?></h6>					
										</div>
										<!-- <ul class="btns">
											<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
											<li><a href="#">Apply</a></li>
											<form action="single.php" method="POST" class="d-inline">
											<input type="hidden" name="viewid" value="">
											<li><a name="view" value="view" type="submit" href="single.php">View</a></li>
											</form>
										</ul> -->
										<ul class="btns">
										<form action="#" method="POST" class="d-inline">
										<input type="hidden" name="id" value="<?php echo $row['jid']; ?>">
										<button type="submit" class="btn job-view btn-danger" name="delete" value="delete">Delete this job</button>
										</form>

										<form action="single.php" method="POST" class="d-inline">
										<input type="hidden" name="viewid" value="<?php echo $row['jid']; ?>">
										<button type="submit" class="btn job-view btn-secondary" name="view" value="view">View</button>
										</form>
										</ul>
									</div>
									<p>
									<?php echo $row['jDescription']; ?>
									</p>
									<h5>Job Nature: Full time</h5>
									<p class="address"><span class="lnr lnr-map"></span> <?php echo $row['jLocation']; ?></p>
									<p class="address"><span class="lnr lnr-database"></span> <?php echo $row['jSalary']; ?></p>
									<p class="address"><span class="lnr lnr-star"></span><?php echo $row['jOpenings']; ?> 4.5</p>
								</div>
							</div>
							
							<?php
                			}
                			}
                            else {
                                echo "0 result";
        
                            		}
                                    if(isset($_REQUEST['delete'])) {
                                        $sql = "DELETE FROM jobs where jid = {$_REQUEST['id']}";
                                        if($conn->query($sql) == TRUE){
                                            echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
                                        } else {
                                            echo "unable to delete data";
                                        }
                                    }
                            

                			?>
                        </div>
                    </div>
                </div>
</section>                           

<?php   
include('./footer.php');


?>