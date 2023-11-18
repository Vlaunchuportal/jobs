<?php
include('./header.php');



if(isset($_SESSION['is_login'])) {
    $remail = $_SESSION['remail'];
 
	



}

$sql = "SELECT * FROM recruiter WHERE remail = '$remail'";
$result = $conn->query($sql);
if($result->num_rows == 1) {
    $row = $result->fetch_assoc();
	
	$rskills = $row['rskills'];
    
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
	
	

			<!-- start banner Area -->
			<section class="banner-area relative" style="height:750px;"  id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12">
							<h1 class="text-white">
								<span></span> Vlaunchu Candidates Ready to get Hired!				
							</h1>	
							<form action="search.html" class="serach-form-area">
								<div class="row justify-content-center form-wrap">
									<div class="col-lg-4 form-cols">
										<input type="text" class="form-control" style=" border-radius: 20px; " name="search" placeholder="Search Candidates">
									</div>
									<div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects">
											<select>
												<option value="1">Select area</option>
												<option value="2">Dhaka</option>
												<option value="3">Rajshahi</option>
												<option value="4">Barishal</option>
												<option value="5">Noakhali</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects2">
											<select>
												<option value="1">All Category</option>
												<option value="2">Medical</option>
												<option value="3">Technology</option>
												<option value="4">Goverment</option>
												<option value="5">Development</option>
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
									<h4 class="im" ><?php echo $remail;?></h4>
								
										
										
										<?php
										$jj = 25;
										$ff = 50;
										$ee = 100;
										if(!$rskills == "") {
											echo '<meter class="met" value="1"></meter>';
											echo '<h6 class="profilec">';
											echo $ee;
											
										} else if($rskills == "") {
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
			<!-- End features Area -->
			
			<!-- Start popular-post Area -->
			
			<!-- End popular-post Area -->
			
			<!-- Start feature-cat Area -->
			
			<!-- End feature-cat Area -->
			
			<!-- Start Jobs Listings post Area -->
			<section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
							<ul class="cat-list">
								<li><a href="#">All</a></li>
								<li><a href="#">Permanent</a></li>
								<li><a href="contractjob.php">Contract</a></li>
							</ul>
							<?php
                    
							$sql = "SELECT * FROM candidate" ;
							
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
									<p class="address"  ><span class="lnr lnr-star"></span>  <?php echo $row['rateno']; ?><div class="ratbtn"  style=" border: 20px; color: aquamarine; text-align: center;  border-radius:3px; width:43px; background-color: darkgreen ;  " ><?php if($row['ratings'] != '') {echo  round($row['ratings'],1); echo '/5';} else {echo 'Rate';} ?></div></p>
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
							
							<a class="text-uppercase loadmore-btn mx-auto d-block" href="category.html">Load More job Posts</a>

						</div>
						<div class="col-lg-4 sidebar">
							<div class="single-slidebar">
								<h4>Candidates by Location</h4>
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
								<h4>Top rated job Candidates</h4>
								<div class="active-relatedjob-carusel">
									<div class="single-rated">
										<img class="img-fluid" src="img/r1.jpg" alt="">
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
										<img class="img-fluid" src="img/r1.jpg" alt="">
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
										<img class="img-fluid" src="img/r1.jpg" alt="">
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
									<div class="single-blog " style="background:#000 url(img/blog1.jpg);">
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
									<div class="single-blog " style="background:#000 url(img/blog2.jpg);">
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
									<div class="single-blog " style="background:#000 url(img/blog1.jpg);">
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
							</div>							

						</div>
					</div>
				</div>	
			</section>
			<!-- End post Area -->
				

			<!-- Start callto-action Area -->
			<section class="callto-action-area section-gap" id="join">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10 text-white">Join us today without any hesitation</h1>
								<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
								<a class="primary-btn" href="#">I am a Candidate</a>
								<a class="primary-btn" href="#">Request Free Demo</a>
							</div>
						</div>
					</div>	
				</div>	
			</section>
			<!-- End calto-action Area -->

			
		
			

<?php
include('./footer.php');
?>