<?php
include('./header.php');




						
						


if(isset($_REQUEST['view'])){
    $sql = "SELECT * FROM jobs WHERE jid = {$_REQUEST['viewid']} ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
	
    }         
                    
         
	
	

?>

			<style>
				.heading {
				  font-size: 25px;
				  margin-right: 25px;
				}
				
				.fa {
				  font-size: 25px;
				}
				
				.checked {
				  color: orange;
				}
				
				/* Three column layout */
				.side {
				  float: left;
				  width: 15%;
				  margin-top:10px;
				}
				
				.middle {
				  margin-top:10px;
				  float: left;
				  width: 70%;
				}
				
				/* Place text to the right */
				.right {
				  text-align: right;
				}
				
				/* Clear floats after the columns */
				.row:after {
				  content: "";
				  display: table;
				  clear: both;
				}
				
				/* The bar container */
				.bar-container {
				  width: 100%;
				  background-color: #f1f1f1;
				  text-align: center;
				  color: white;
				}
				
				/* Individual bars */
				.bar-5 {width: 60%; height: 18px; background-color: #04AA6D;}
				.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
				.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
				.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
				.bar-1 {width: 15%; height: 18px; background-color: #f44336;}
				
				/* Responsive layout - make the columns stack on top of each other instead of next to each other */
				@media (max-width: 400px) {
				  .side, .middle {
					width: 100%;
				  }
				  .right {
					display: none;
				  }
				}


				/* ratings */
				

				.rating {
				margin-top: 40px;
				border: none;
				float: left;
				}

				.rating > label {
				color: #90A0A3;
				float: right;
				}

				.rating > label:before {
				margin: 5px;
				font-size: 2em;
				font-family: FontAwesome;
				content: "\f005";
				display: inline-block;
				}

				.rating > input {
				display: none;
				}

				.rating > input:checked ~ label,
				.rating:not(:checked) > label:hover,
				.rating:not(:checked) > label:hover ~ label {
				color: #F79426;
				}

				.rating > input:checked + label:hover,
				.rating > input:checked ~ label:hover,
				.rating > label:hover ~ input:checked ~ label,
				.rating > input:checked ~ label:hover ~ label {
				color: #FECE31;
				}
				</style>
		

			 


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Job Details				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="single.html"> Job Details</a></p>
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
							<div class="single-post d-flex flex-row">
								<div class="thumb">
									<img src="../img/<?php if(isset($row['jImage'])){ echo $row['jImage'];}?>   " style="width:70px; height:70px; border-radius: 190px;" alt="">
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
											<a href="#"><h4><?php if(isset($row['jTitle'])){ echo $row['jTitle'];}?></h4></a>
											<h6><?php if(isset($row['jSkills'])){ echo $row['jSkills'];}?></h6>					
										</div>
										<ul class="btns">
											<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
											<form action="applyjob.php" method="POST" class="d-inline">
											<input type="hidden" name="applyid" value="<?php echo $row['jid']; ?>">
											<button type="submit" class="btn job-view btn-info" name="apply" value="apply">Apply</button>
											</form>
										</ul>
									</div>
									<p>
									<?php if(isset($row['jDescription'])){ echo $row['jDescription'];}?>
									</p>
									<h5>Job Nature: Full time</h5>
									<p class="address"><span class="lnr lnr-map"></span>  <?php if(isset($row['jLocation'])){ echo $row['jLocation'];}?></p>
									<p class="address"><span class="lnr lnr-database"></span>  <?php if(isset($row['jSalary'])){ echo $row['jSalary'];}?></p>
								</div>
							</div>	
							<div class="single-post job-details">
								<h4 class="single-title">Whom we are looking for</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.
								</p>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
								</p>
							</div>
							<div class="single-post job-experience">
								<h4 class="single-title">Experience Requirements</h4>
								<ul>
									<li>
										<img src="../img/pages/list.jpg" alt="">
										<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
									</li>
									<li>
										<img src="../img/pages/list.jpg" alt="">
										<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
									</li>
									<li>
										<img src="../img/pages/list.jpg" alt="">
										<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
									</li>	
									<li>
										<img src="../img/pages/list.jpg" alt="">
										<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
									</li>
									<li>
										<img src="../img/pages/list.jpg" alt="">
										<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
									</li>
									<li>
										<img src="../img/pages/list.jpg" alt="">
										<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
									</li>																											
								</ul>
							</div>
							<div class="single-post job-experience">
								<h4 class="single-title">Job Features & Overviews</h4>
								<ul>
									<li>
										<img src="../img/pages/list.jpg" alt="">
										<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
									</li>
									<li>
										<img src="../img/pages/list.jpg" alt="">
										<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
									</li>
									<li>
										<img src="../img/pages/list.jpg" alt="">
										<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
									</li>	
									<li>
										<img src="../img/pages/list.jpg" alt="">
										<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
									</li>													
								</ul>
							</div>	
							<div class="single-post job-experience">
								<h4 class="single-title">Education Requirements</h4>
								<ul>
									<li>
										<img src="../img/pages/list.jpg" alt="">
										<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
									</li>
									<li>
										<img src="../img/pages/list.jpg" alt="">
										<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
									</li>
									<li>
										<img src="../img/pages/list.jpg" alt="">
										<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
									</li>																										
								</ul>
							</div>														
						</div>
						<div class="col-lg-4 sidebar">


							<!--start Ratings -->

							<div class="single-slidebar">
								<h4>Ratings</h4>
								<ul class="cat-list">
									

									<span class="heading">User Rating</span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<p><?php if($row['ratings'] != '') {echo  round($row['ratings'],1); echo '/5';} else {echo 'Rate';} ?> average based on <?php echo $row['rateno']; ?> reviews.</p>
									<!-- <hr style="border:3px solid #f1f1f1"> -->

									<!-- <div class="row">
									<div class="side">
										<div>5 star</div>
									</div>
									<div class="middle">
										<div class="bar-container">
										<div class="bar-5"></div>
										</div>
									</div>
									<div class="side right">
										<div>150</div>
									</div>
									<div class="side">
										<div>4 star</div>
									</div>
									<div class="middle">
										<div class="bar-container">
										<div class="bar-4"></div>
										</div>
									</div>
									<div class="side right">
										<div>63</div>
									</div>
									<div class="side">
										<div>3 star</div>
									</div>
									<div class="middle">
										<div class="bar-container">
										<div class="bar-3"></div>
										</div>
									</div>
									<div class="side right">
										<div>15</div>
									</div>
									<div class="side">
										<div>2 star</div>
									</div>
									<div class="middle">
										<div class="bar-container">
										<div class="bar-2"></div>
										</div>
									</div>
									<div class="side right">
										<div>6</div>
									</div>
									<div class="side">
										<div>1 star</div>
									</div>
									<div class="middle">
										<div class="bar-container">
										<div class="bar-1"></div>
										</div>
									</div>
									<div class="side right">
										<div>20</div>
									</div>
									</div> -->
								</ul><br>
								
							</div>

							<form action="rating.php" method="POST" class="d-inline">
                            <input type="hidden" name="rateid" value="<?php echo $row['jid']; ?> ">
                            <button type="submit" class="btn btn-info" name="rate" value="Rate">Rate this job</button>
                            </form>
							



						
							<!--end Ratings -->
										
							
							<!-- start ratings module -->
							<!-- Button trigger modal -->
							<!-- Button trigger modal -->
							
							<!-- end ratings module -->
						








							<!--start Reportings -->
							
							
							<form action="reporting.php" method="POST" class="d-inline">
                            <input type="hidden" name="reportid" value="<?php echo $row['jid']; ?> ">
                            <button type="submit" class="btn btn-info" name="report" value="report">Report this job</button>
                            </form>

							<!--end reportings -->
														
							<br><br>
							<form action="message.php" method="POST" class="d-inline">
                            <input type="hidden" name="connectid" value="<?php echo $row['jid']; ?> ">
                            <button type="submit" class="btn btn-info" name="connect" value="connect">Message the Recruiter regarding this Job</button>
                            </form>


						</div>
					</div>
				</div>	
			</section>
			<!-- End post Area -->


			<!-- Start callto-action Area -->
			<section class="callto-action-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10 text-white">Join us today without any hesitation</h1>
								<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
								<a class="primary-btn" href="#">I am a Candidate</a>
								<a class="primary-btn" href="#">We are an Employer</a>
							</div>
						</div>
					</div>	
				</div>	
			</section>
			<!-- End calto-action Area -->



<?php
include('./footer.php');
?>


