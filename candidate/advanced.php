<?php 
include('./header.php');
?>



			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12">
							<h1 class="text-white">
								<span></span>Advanced Search			
							</h1>	
							<form action="" class="serach-form-area">
								<div class="row justify-content-center form-wrap">
									<div class="col-lg-10 form-cols">
										<input type="text" class="form-control" name="idd" id="idd" placeholder="Job Title">
									</div>
                                     <br><br><br>
									<div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects">
											<select  name="default-selects" id="default-selects" >
												<option value="1">Select Location</option>
												<option value="bangalore">bangalore</option>
												<option value="mumbai">mumbai</option>
												<option value="pune">pune</option>
												<option value="delhi">delhi</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects3" >
											<select name="default-selects3" id="default-selects3" >
												<option value="1">Salary</option>
												<option value="10">10000 - 20000</option>
												<option value="20">20000 - 30000</option>
												<option value="30">30000 - 40000</option>
												<option value="40">40000 - 50000</option>
                                                <option value="50">50000 - 100000</option>
											</select>
										</div>										
									</div>
                                    <br><br><br>
                                    <div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects2" >
											<select name="default-selects2" id="default-selects2" >
												<option value="1">Job Company</option>
												<option value="microsoft">microsoft</option>
												<option value="solution pvt lmt">solution pvt lmt</option>
												<option value="vlaunchu pvt">vlaunchu pvt</option>
												<option value="amazon">amazon</option>
											</select>
										</div>										
									</div>
                                    <div class="col-lg-4 form-cols">
										<div class="default-select" id="default-selects4" >
											<select name="default-selects4" id="default-selects4" >
												<option value="1"> Job Nature</option>
												<option value="full time">Full Time</option>
												<option value="part time">Part Time</option>
												
											</select>
										</div>										
									</div>
                                    
                                    <div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects5" >
											<select name="default-selects5" id="default-selects5" >
												<option value="1">Job Openings</option>
												<option value="50">1 - 50</option>
												<option value="500">50 - 500</option>
												<option value="1000">500 - 1000</option>
												
											</select>
										</div>										
									</div>
                                    <br><br><br>
                                    <div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects6" >
											<select name="default-selects6" id="default-selects6" >
												<option value="1">Job Type</option>
												<option value="permanent">Permanent</option>
												<option value="contract">Contract</option>
												
											</select>
										</div>										
									</div>
                                    <br><br><br><br>
									<div class="col-lg-5 form-cols"  style="  height: 45px; " >
									    <button type="submit" name="search" value="search" class="btn btn-info">
									      <span class="lnr lnr-magnifier"></span> Search
									    </button>
									</div>								
								</div>
							</form>	
							<p class="text-white"> <span></span> Tecnology, Business, Consulting, IT Company, Design, Development</p>
							
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
							
							
							if(isset($_REQUEST['search'])){
								
								
								 $idd = $_REQUEST['idd'];
								
								 $idd1 = $_REQUEST['default-selects'];
								 $idd2 = $_REQUEST['default-selects2'];
                                 $idd3 = $_REQUEST['default-selects3'];  // salary
                                 $idd4 = $_REQUEST['default-selects4'];  // job nature full/part
                                 $idd5 = $_REQUEST['default-selects5'];  // job openings
                                 $idd6 = $_REQUEST['default-selects6']; // job type perm/cont
                                 $r1 = 0;
                                 $r2 = 0;
                                 $o1 = 0;
                                 $o2 = 0;

                                 if(isset($idd3)) {
                                    if($idd3 == 10) {
                                        $r1 = 10000;
                                        $r2 = 20000;
                                    } else if($idd3 == 20) {
                                        $r1 = 20000;
                                        $r2 = 30000;
                                    } else if($idd3 == 30) {
                                        $r1 = 30000;
                                        $r2 = 40000;
                                    } else if($idd3 == 40) {
                                        $r1 = 40000;
                                        $r2 = 50000;
                                    } else if($idd3 == 50) {
                                        $r1 = 50000;
                                        $r2 = 200000;
                                    }

                                 }

                                 if(isset($idd5)) {
                                    if($idd5 == 50) {
                                        $o1 = 1;
                                        $o2 = 50;
                                    } else if($idd5 == 500) {
                                        $o1 = 50;
                                        $o2 = 500;
                                    } else if($idd5 == 1000) {
                                        $o1 = 500;
                                        $o2 = 1000;
                                    }
                                }

							$sql = "SELECT * FROM jobs where jTitle = '$idd' OR jLocation = '$idd1' OR jCompany = '$idd2' OR jSalary  BETWEEN '$r1' AND '$r2' OR jNature = '$idd4' OR jOpenings BETWEEN '$o1' AND '$o2' OR jType = '$idd6'  ";
							
							$result = $conn->query($sql);
							if($result->num_rows > 0)
							{
								while($row = $result -> fetch_assoc())

								{
							?>
							<p></p>
							<div class="single-post d-flex flex-row">
								<div class="thumb">
									<img src="../img/<?php if(isset($row['jImage'])){ echo $row['jImage'];}?>" style="width:70px; height:70px; border-radius: 190px;" alt="">
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
									<p class="address"  ><span class="lnr lnr-star"></span>  7<div class="ratbtn" style=" border: 20px; color: aquamarine ;  border-radius:3px; width:43px; padding-left:3px; background-color: darkgreen ;  " ><?php  ?>  4.5/5</div></p>
								</div>
							</div>
									
							<?php
                			}
                			}
                            else {
                                echo "0 result found";
        
                            	}
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

