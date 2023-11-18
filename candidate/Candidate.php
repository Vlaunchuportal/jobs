<?php
include('./header.php');


 
            

if(isset($_SESSION['is_login'])) {
    $cemail = $_SESSION['lemail'];
 
	



}

$sql = "SELECT * FROM candidate WHERE cemail = '$cemail'";
$result = $conn->query($sql);
if($result->num_rows == 1) {
    $row = $result->fetch_assoc();
	
	$skills = $row['cskills'];
    
}    
?>



	
<style>

	 
	 
	 .profbox{
		 border-radius: 750px !important;
	 }
	 
	 .yt
	{
		display: flex;
		
		justify-content: center;
		align-items: center;
		gap:20px;
		
		
		
	}
	.yt1 {
		display:flex;
		
	}
	.yt2 {
		display: flex;
		flex-direction: column;
		
	}
	
	.im {
		display: flex;
		margin-bottom: 0px !important;
		padding-bottom: 0px !important;
	}
	
	.profilec
	{
		display: flex;

		
		
	}
	.met
	{
		display: flex;
		padding-top: 0px !important;
		margin-top: 0px !important;
		width: 150px;
		height: 29px;
		
	} 
	
	#meter {
  
	margin: 0 5px 5px 0px;
	width: 1950px;
	height: 200px;
	display: block;
	}

</style>


<style>
@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');




/* body {
	
	font-family: 'Muli', sans-serif;
	
} */

.courses-container {
	
}

.course {
	background-color: #fff;
	border-radius: 10px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	display: flex;
	
	mas-width:100%;
	margin: 20px;
	overflow: hidden;
	width: 900px;
}

.course h6 {
	opacity: 0.6;
	margin: 0;
	letter-spacing: 1px;
	text-transform: uppercase;
}

.course h2 {
	letter-spacing: 1px;
	margin: 10px 0;
}

.course-preview {
	background-color: #00ae87;
	color: #fff;
	padding: 30px;
	max-width: 250px;
	flex: 1;
}

.course-preview a {
	color: #fff;
	display: inline-block;
	font-size: 12px;
	opacity: 0.6;
	margin-top: 120px;
	text-decoration: none;
}

.course-info {
	padding: 30px;
	position: relative;
	width: 100%;
}

.progress-container {
	position: absolute;
	top: 30px;
	right: 30px;
	text-align: right;
	width: 150px;
}

.progress {
	background-color: #ddd;
	border-radius: 3px;
	height: 5px;
	width: 100%;
}

.progress::after {
	border-radius: 3px;
	background-color: #2A265F;
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	height: 5px;
	width: 66%;
}

.progress-text {
	font-size: 10px;
	opacity: 0.6;
	letter-spacing: 1px;
}

.btnJob {
	background-color: #00ae87;
	border: 0;
	border-radius: 50px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	color: #fff;
	font-size: 16px;
	padding: 12px 25px;
	position: absolute;
	bottom: 30px;
	right: 30px;
	letter-spacing: 1px;
}

/* SOCIAL PANEL CSS */
.social-panel-container {
	position: fixed;
	right: 0;
	bottom: 80px;
	transform: translateX(100%);
	transition: transform 0.4s ease-in-out;
}

.social-panel-container.visible {
	transform: translateX(-10px);
}

.social-panel {	
	background-color: #fff;
	border-radius: 16px;
	box-shadow: 0 16px 31px -17px rgba(0,31,97,0.6);
	border: 5px solid #001F61;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	font-family: 'Muli';
	position: relative;
	height: 169px;	
	width: 370px;
	max-width: calc(100% - 10px);
}

.social-panel button.close-btn {
	border: 0;
	color: #00ae87;
	cursor: pointer;
	font-size: 20px;
	position: absolute;
	top: 5px;
	right: 5px;
}

.social-panel button.close-btn:focus {
	outline: none;
}

.social-panel p {
	background-color: #00ae87;
	border-radius: 0 0 10px 10px;
	color: #fff;
	font-size: 14px;
	line-height: 18px;
	padding: 2px 17px 6px;
	position: absolute;
	top: 0;
	left: 50%;
	margin: 0;
	transform: translateX(-50%);
	text-align: center;
	width: 235px;
}

.social-panel p i {
	margin: 0 5px;
}

.social-panel p a {
	color: #FF7500;
	text-decoration: none;
}

.social-panel h4 {
	margin: 20px 0;
	color: #97A5CE;	
	font-family: 'Muli';	
	font-size: 14px;	
	line-height: 18px;
	text-transform: uppercase;
}

.social-panel ul {
	display: flex;
	list-style-type: none;
	padding: 0;
	margin: 0;
}

.social-panel ul li {
	margin: 0 10px;
}

.social-panel ul li a {
	border: 1px solid #DCE1F2;
	border-radius: 50%;
	color: #001F61;
	font-size: 20px;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 50px;
	width: 50px;
	text-decoration: none;
}

.social-panel ul li a:hover {
	border-color: #FF6A00;
	box-shadow: 0 9px 12px -9px #FF6A00;
}

.floating-btn {
	border-radius: 26.5px;
	background-color: #00ae87;
	border: 1px solid #001F61;
	box-shadow: 0 16px 22px -17px #03153B;
	color: #fff;
	cursor: pointer;
	font-size: 16px;
	line-height: 20px;
	padding: 12px 20px;
	position: fixed;
	bottom: 20px;
	right: 20px;
	z-index: 999;
}

.floating-btn:hover {
	background-color: #ffffff;
	color: #001F61;
}

.floating-btn:focus {
	outline: none;
}

.floating-text {
	background-color: #001F61;
	border-radius: 10px 10px 0 0;
	color: #fff;
	font-family: 'Muli';
	padding: 7px 15px;
	position: fixed;
	bottom: 0;
	left: 50%;
	transform: translateX(-50%);
	text-align: center;
	z-index: 998;
}

.floating-text a {
	color: #FF7500;
	text-decoration: none;
}

@media screen and (max-width: 480px) {

	.social-panel-container.visible {
		transform: translateX(0px);
	}
	
	.floating-btn {
		right: 10px;
	}
}
</style>

			<!-- start banner Area -->
			<section class="banner-area relative" style="height:750px;" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12">
							<h1 class="text-white">
								<span></span> Vlaunchu Jobs Ready to Hire!				
							</h1>	
							<form action="search.php" class="serach-form-area">
								<div class="row justify-content-center form-wrap">
									<div class="col-lg-4 form-cols">
										<input type="text" class="form-control" style=" border-radius: 20px; " name="idd" id="idd" placeholder="Job Title">
									</div>
									<div class="col-lg-3 form-cols"  >
										<div class="default-select"  id="default-selects">
											<select  name="default-selects"  id="default-selects" >
												<option value="1">Select Location</option>
												<option value="bangalore">bangalore</option>
												<option value="mumbai">mumbai</option>
												<option value="pune">pune</option>
												<option value="delhi">delhi</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects2" >
											<select name="default-selects2" id="default-selects2" >
												<option value="1">Company</option>
												<option value="microsoft">microsoft</option>
												<option value="solution pvt lmt">solution pvt lmt</option>
												<option value="vlaunchu pvt">vlaunchu pvt</option>
												<option value="amazon">amazon</option>
											</select>
										</div>										
									</div>
									<div class="col-lg-2 form-cols">
									    <button type="submit" name="search" style=" border-radius: 20px; " value="search" class="btn btn-info">
									      <span class="lnr lnr-magnifier"></span> Search
									    </button>
									    
									    
									</div>
								</div>
								
							</form>	
							
							
							<div class="  form-wrap">
							
									    <button type="button" name="search" value="search" style=" width: 380px;  border-radius: 40px;   height: 50px; "  class="btn btn-success">
									      <span class="lnr lnr-magnifier"></span> <a href="advanced.php"  style="    color: white; " >Advanced Search</a>
									    </button>
							
							</div>
							
							<p class="text-white"> <span></span> Tecnology, Business, Consulting, IT Company, Design, Development</p>
							
						</div>		
															
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start features Area -->
			<section class="features-area">
				<div class="container"  style=" margin-left: 690px; ">
					<div class="row">
						
						
						
						<div class="col-lg-5 col-md-2 profbox"   >
							<div class="single-feature" style=" border-radius: 490px; ">
								<div class="yt">
									<div class="yt1">
									<img class="imm" src="<?php echo '../img/user.png'; ?>" style="width:70px; height:70px; border-radius: 190px;" alt="">
									</div>
									<div class="yt2">
									<h4 class="im" ><?php echo $cemail;?></h4>
								
										
										
										<?php
										$jj = 25;
										$ff = 50;
										$ee = 100;
										if(!$skills == "") {
											echo '<meter class="met" value="1"></meter>';
											echo '<h6 class="profilec">';
											echo $ee;
											
										} else if($skills == "") {
											echo '<meter class="met" value=".49" low=".5"></meter>';
											echo '<h6 class="profilec">';
											echo $ff;
										} 



										?>% Profile Complete</h6>
										
									</div>
								</div>
								
									<a href="editProfile.php" class="btn btn-primary" style="margin-left:81px; border-radius:30px; margin-top:10px;" >Update Profile </a>
								
							</div>
							</div>
						</div>	
																						
					</div>
				</div>	
			</section>
			<!-- End features Area -->
			
			

					
			
			<!-- Start feature-cat Area -->
			<section class="feature-cat-area pt-100" id="category">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Browse from various Job Categories</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="../img/o1.png" alt="">
								</a>
								<p>Accounting</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="../img/o2.png" alt="">
								</a>
								<p>Development</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="../img/o3.png" alt="">
								</a>
								<p>Technology</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="../img/o4.png" alt="">
								</a>
								<p>Media & News</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="../img/o5.png" alt="">
								</a>
								<p>Medical</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="../img/o6.png" alt="">
								</a>
								<p>Goverment</p>
							</div>			
						</div>																											
					</div>
				</div>	
			</section>
			<!-- End feature-cat Area -->
			
			<!-- Start Jobs Listings post Area -->
			<section class="post-area section-gap">
				<div class="container">
				<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">All Jobs</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>	
					<div class="row justify-content-center d-flex">
						<div class="col-lg-10 post-list">
							<ul class="cat-list">
								<li><a href="#">All</a></li>
								<li><a href="#">Permanent</a></li>
								<li><a href="contractjob.php">Contract</a></li>
							</ul>
							<?php

							$sql = "SELECT * FROM jobs" ;
							
							$result = $conn->query($sql);
							if($result->num_rows > 0)
							{
								while($row = $result -> fetch_assoc())

								{

							?>

							<div class="courses-container">
								<div class="course">
									<div class="course-preview">
										<h6>Job</h6>
										<h2 style="color:#fff;" ><?php echo $row['jTitle']; ?></h2>
										<a href="#"><?php echo $row['jNature']; ?> <i class="fas fa-chevron-right"></i></a>
									</div>
									<div class="course-info">
										<div class="progress-container">
											
											<span class="progress-text">
												2 hours ago
											</span>
										</div>
										<h2><?php echo $row['jSkills']; ?></h2>
										<p>
									<?php echo $row['jDescription']; ?>
									</p>
										
										
										<h6>Company : <?php echo $row['jCompany']; ?></h6>
										
										<h6>Location : <?php echo $row['jLocation']; ?></h6>
										
										<h6>Salary : <?php echo $row['jSalary']; ?></h6>
										
										<h6>Openings : <?php echo $row['jOpenings']; ?></h6>
										<br>
										
										
										<form action="single.php" method="POST" class="d-inline">
										<input type="hidden" name="viewid" value="<?php echo $row['jid']; ?>">
										<button type="submit" class="btnJob" name="view" value="view">Apply</button>
										</form>
										<!-- <button class="btnJob">Apply</button> -->
									</div>
								</div>
							</div>
							
						
							
							<?php
                			}
                			}
                            else {
                                echo "0 result";
        
                            		}
                            

                			?>	
							
							<a class="text-uppercase loadmore-btn mx-auto d-block" href="category.html">Load More job Posts</a>

						</div>
						<!-- <div class="col-lg-4 sidebar">
							<div class="single-slidebar">
								<h4>Jobs by Location</h4>
								<ul class="cat-list">
									<li><a class="justify-content-between d-flex" href="category.html"><p>bangalore</p><span>37</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>mumbai</p><span>57</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>chennai</p><span>33</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>sudan</p><span>36</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Florida</p><span>47</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Rocky Beach</p><span>27</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Chicago</p><span>17</span></a></li>
								</ul>
							</div>

							<div class="single-slidebar">
								<h4>Top rated job posts</h4>
								<div class="active-relatedjob-carusel">
									<div class="single-rated">
										<img class="img-fluid" src="../img/r1.jpg" alt="">
										<a href="single.html"><h4>Creative Art Designer</h4></a>
										<h6>Premium Labels Limited</h6>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
										</p>
										<h5>Job Nature: Full time</h5>
										<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
										<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
										<a href="#" class="btns text-uppercase">Apply job</a>
									</div>
									<div class="single-rated">
										<img class="img-fluid" src="../img/r1.jpg" alt="">
										<a href="single.html"><h4>Creative Art Designer</h4></a>
										<h6>Premium Labels Limited</h6>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
										</p>
										<h5>Job Nature: Full time</h5>
										<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
										<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
										<a href="#" class="btns text-uppercase">Apply job</a>
									</div>
									<div class="single-rated">
										<img class="img-fluid" src="../img/r1.jpg" alt="">
										<a href="single.html"><h4>Creative Art Designer</h4></a>
										<h6>Premium Labels Limited</h6>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
										</p>
										<h5>Job Nature: Full time</h5>
										<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
										<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
										<a href="#" class="btns text-uppercase">Apply job</a>
									</div>																		
								</div>
							</div>							

							<div class="single-slidebar">
								<h4>Jobs by Category</h4>
								<ul class="cat-list">
									<li><a class="justify-content-between d-flex" href="category.html"><p>Technology</p><span>37</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Media & News</p><span>57</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Goverment</p><span>33</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Medical</p><span>36</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Restaurants</p><span>47</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Developer</p><span>27</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Accounting</p><span>17</span></a></li>
								</ul>
							</div>

							<div class="single-slidebar">
								<h4>Carrer Advice Blog</h4>
								<div class="blog-list">
									<div class="single-blog " style="background:#000 url(../img/blog1.jpg);">
										<a href="single.html"><h4>Home Audio Recording <br>
										For Everyone</h4></a>
										<div class="meta justify-content-between d-flex">
											<p>
												02 Hours ago
											</p>
											<p>
												<span class="lnr lnr-heart"></span>
												06
												 <span class="lnr lnr-bubble"></span>
												02
											</p>
										</div>
									</div>
									<div class="single-blog " style="background:#000 url(../img/blog2.jpg);">
										<a href="single.html"><h4>Home Audio Recording <br>
										For Everyone</h4></a>
										<div class="meta justify-content-between d-flex">
											<p>
												02 Hours ago
											</p>
											<p>
												<span class="lnr lnr-heart"></span>
												06
												 <span class="lnr lnr-bubble"></span>
												02
											</p>
										</div>
									</div>
									<div class="single-blog " style="background:#000 url(../img/blog1.jpg);">
										<a href="single.html"><h4>Home Audio Recording <br>
										For Everyone</h4></a>
										<div class="meta justify-content-between d-flex">
											<p>
												02 Hours ago
											</p>
											<p>
												<span class="lnr lnr-heart"></span>
												06
												 <span class="lnr lnr-bubble"></span>
												02
											</p>
										</div>
									</div>																		
								</div>
							</div>							 -->

						</div>
					</div>
				</div>	
			</section>
			<!-- End post Area -->
				

			

			
		
	
			<!-- End footer Area -->		
			
			<!-- <script type="text/javascript" src="../js/jquery.min.js"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/cjs/popper.min.js"></script> -->

		


<?php
include('./footer.php');
?>