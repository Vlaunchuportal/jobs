<?php 
include('./header.php');
?>



			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container" style=" height: 500px;  "  >
					<div class="row search-page-top d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12">
							<h1 class="text-white">
								Contract Jobs			
							</h1>
							<p class="text-white link-nav">
								<a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="search.html"> Job details page</a>
							</p>	
							
							
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<!-- Start post Area -->
			<section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
                        <?php
                    
							$sql = "SELECT * FROM candidate where cType = 'contract'" ;
							
							$result = $conn->query($sql);
							if($result->num_rows > 0)
							{
								while($row = $result -> fetch_assoc())

								{
							?>
							<form action="single.php" method="POST" class="d-inline">
							<div class="single-post d-flex flex-row">
								<div class="thumb">
									<img src="../img/<?php if((!$row['cimage'] == "")){ echo $row['cimage'];} else {echo "user.png";}  ?>" style=" width: 70px; height: 70px; border-radius: 150px; " alt="">
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
											<input type="hidden" name="viewid" value="<?php echo $row['cid']; ?>">
											<button class="hidebtn" type="submit" name="view" value="view"><h4><?php echo $row['cname']; ?></h4></button>
											</form>
											<h6><?php echo $row['cskills']; ?></h6>					
										
                                       
										</div>
										<ul class="btns">
										<form action="message1.php" method="POST" class="d-inline">
										<input type="hidden" name="connectid" value="<?php echo $row['cid']; ?>">
										<button type="submit" class="btn job-view btn-info" name="connect" value="connect">Connect</button>
										</form>
											
										</ul>
									</div>
									<p>
									<?php echo $row['cexperience']; ?>
									</p>
									<h5>Job Nature: <?php echo $row['cNature']; ?></h5>
									<p class="address"><span class="lnr lnr-map"></span> <?php echo $row['caddress']; ?></p>
									<p class="address"><span class="lnr lnr-database"></span> <?php echo $row['ceducation']; ?></p>
									<p class="address"><span class="lnr lnr-star"></span><?php echo $row['cnum']; ?></p>
									<p class="address"  ><span class="lnr lnr-star"></span>  <?php echo $row['rateno']; ?><div class="ratbtn"  style=" border: 20px; color: aquamarine; text-align: center;  border-radius:3px; width:43px; background-color: darkgreen ;  " ><?php if($row['hideprofile'] != 'hide') { if($row['ratings'] != '') {echo  round($row['ratings'],1); echo '/5';} else {echo 'Rate';}} else { echo ' ';} ?></div></p>
								</div>
							</div>
							</form>
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
			<!-- End post Area -->

			


<?php

include('./footer.php');

?>

