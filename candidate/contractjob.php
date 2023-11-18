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

                        $sql = "SELECT * FROM jobs where jType = 'contract'" ;

                        $result = $conn->query($sql);
                        if($result->num_rows > 0)
                        {
                            while($row = $result -> fetch_assoc())

                            {

                        ?>

                        <div class="single-post d-flex flex-row">
                            <div class="thumb">
                                <img src="../img/<?php if(($row['jImage'] != '0')){ echo $row['jImage'];} else{ echo 'user.png';}?>" style="width:70px; height:70px; border-radius: 190px;" alt="">
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
                                    <form action="applyjob.php" method="POST" class="d-inline">
                                    <input type="hidden" name="applyid" value="<?php echo $row['jid']; ?>">
                                    <button type="submit" class="btn job-view btn-info" name="apply" value="apply">Apply</button>
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
                                <h5>Job Nature: <?php echo $row['jNature']; ?></h5>
                                <p class="address"><span class="lnr lnr-apartment"></span>  <?php echo $row['jCompany']; ?></p>
                                <p class="address"><span class="lnr lnr-map"></span>  <?php echo $row['jLocation']; ?></p>
                                <p class="address"><span class="lnr lnr-database"></span>  <?php echo $row['jSalary']; ?></p>
                                <p class="address"><span class="lnr lnr-enter"></span>  <?php echo $row['jOpenings']; ?> Openings</p>
                                <p class="address"  ><span class="lnr lnr-star"></span>  <?php echo $row['rateno']; ?><div class="ratbtn"  style=" border: 20px; color: aquamarine; text-align: center;  border-radius:3px; width:43px; background-color: darkgreen ;  " ><?php if($row['ratings'] != '') {echo  round($row['ratings'],1); echo '/5';} else {echo 'Rate';} ?>
                                
                                
                                </div></p>
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
			<!-- End post Area -->

			


<?php

include('./footer.php');

?>

