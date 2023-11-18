

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								My Profile			
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html"> Edit Profile</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	



<?php
include('./header.php');

if(isset($_SESSION['is_login'])) {
    $canLogEmail = $_SESSION['lemail'];
} else {
    echo "<script> location.href='../home.php';</script>";
}

$sql = "SELECT * FROM candidate WHERE cemail = '$canLogEmail'";
$result = $conn->query($sql);
if($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    
}

if(isset($_REQUEST['requpdate'])){
{
    $canLogEmail = $_SESSION['lemail'];

	$hidep = $_REQUEST['hidep'];
    $cname = $_REQUEST['cname'];
    $cnum = $_REQUEST['cnum'];
    $caddress = $_REQUEST['caddress'];
    $cemail = $_REQUEST['cemail'];
    $ceducation = $_REQUEST['ceducation'];
    $cskills = $_REQUEST['cskills'];
    $cexperience = $_REQUEST['cexperience'];
    $ccity = $_REQUEST['ccity'];
    $cimage = $_FILES['cimage']['name'];
    $cimage_temp = $_FILES['cimage']['tmp_name'];
    $img_folder = '../img/'.$cimage;
    move_uploaded_file($cimage_temp, $img_folder); 
    
    $cresume = $_FILES['cresume']['name'];
    $cresume_temp = $_FILES['cresume']['tmp_name'];
    $resume_folder = '../resume/'.$cresume;
    move_uploaded_file($cresume_temp, $resume_folder); 

    $sql = "UPDATE candidate SET cname = '$cname' , cnum = '$cnum' , caddress = '$caddress' , cemail = '$cemail' , ceducation = '$ceducation' , cskills = '$cskills' , cexperience = '$cexperience' , ccity = '$ccity', cimage = '$cimage', cresume = '$cresume', hideprofile = '$hidep' WHERE cemail = '$canLogEmail'";

    if($conn->query($sql) == TRUE) {
        //msg on display form submiy success
        $Msg ='<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated successfully </div>';
    } else {
        $Msg ='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Updation failed </div>';
    }

}
}


?>
			
			
			<!-- End Button    ;;;;;;;;;;;;;;;;;;;;;;;;;-->
			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
					
					
					
					<div class="section-top-border">
						<div class="row">
							<div class="col-lg-8 col-md-8">
								<h3 class="mb-30">Update Profile</h3>
								<form action="" method="POST" enctype="multipart/form-data">
                                <?php
                                if(isset($Msg)) {
                                echo $Msg;
                                }
                                ?>
									<div class="mt-10">
										<img src="../img/<?php echo $row['cimage']; ?>" style="border-radius: 250px; margin-left: 0px; margin-bottom: 20px;"  width="200px" height="200px">
									</div>
									<div class="mb-5">
										<label for="cimage">Upload Profile picture :</label>
            							<input type="file" class="form-control-file" id="cimage" name="cimage">
									</div>
                                    <div class="mb-5">
										<label for="cresume">Upload your Resume :</label>
            							<input type="file" class="form-control-file" id="cresume" name="cresume">
									</div>
									<div class="mb-5">
										<label for="hiden">Keep profile Ratings hidden from Recruiter:</label>
										<select id="hidep" name="hidep">
										<option value="show">no</option>
										<option value="hide">yes</option>
										
										</select>
									</div>
									<div class="mt-10">
										<input type="text" name="cname" id="cname" value="<?php echo $row['cname'];?>" placeholder="Full Name"  required class="single-input">
									</div>
									<div class="mt-10">
										<input type="number" name="cnum" id="cnum" value="<?php echo $row['cnum'];?>" placeholder="phone number"  required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="caddress" id="caddress" value="<?php echo $row['caddress'];?>" placeholder="Enter address"  required class="single-input">
									</div>
									<div class="mt-10">
										<input type="email" name="cemail" id="cemail" value="<?php echo $row['cemail'];?>" placeholder="Email address"  required class="single-input">
									</div>
                                    <div class="mt-10">
										<input type="text" name="ceducation" id="ceducation" value="<?php echo $row['ceducation'];?>" placeholder="Education"  required class="single-input">
									</div>
                                    <div class="mt-10">
										<input type="text" name="cskills" id="cskills" value="<?php echo $row['cskills'];?>" placeholder="Skills"  required class="single-input">
									</div>
                                    <div class="mt-10">
										<input type="text" name="cexperience" id="cexperience" value="<?php echo $row['cexperience'];?>" placeholder="Experience"  required class="single-input">
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
										<input type="text" name="ccity" id="ccity" placeholder="state/city" required class="single-input" value="<?php echo $row['ccity'];?>" >
									</div>
									<!-- <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select"">
											<select>
												<option value="1">City</option>
												<option value="1">Dhaka</option>
												<option value="1">Dilli</option>
												<option value="1">Newyork</option>
												<option value="1">Islamabad</option>
											</select>
										</div>
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select"">
											<select>
												<option value="1">Country</option>
												<option value="1">Bangladesh</option>
												<option value="1">India</option>
												<option value="1">England</option>
												<option value="1">Srilanka</option>
											</select>
										</div>
									</div> -->
									
									
									<!-- For Gradient Border Use -->
									<!-- <div class="mt-10">
										<div class="primary-input">
											<input id="primary-input" type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'">
											<label for="primary-input"></label>
										</div>
									</div> -->
									
									<div class="mt-5">
										<button class="btn btn-primary profile-button" style="border-radius: 200px; margin-left: 35%; width: 30%;" type="submit" id="requpdate" name="requpdate">Save Profile</button>
									</div>
											
								</form>
							</div>
							<div class="col-lg-3 col-md-4 mt-sm-30">
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Align Area -->

<?php
include('./footer.php');
?>