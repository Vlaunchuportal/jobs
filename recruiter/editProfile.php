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
    $recLogEmail = $_SESSION['remail'];
} else {
    echo "<script> location.href='../home.php';</script>";
}

$sql = "SELECT * FROM recruiter WHERE remail = '$recLogEmail'";
$result = $conn->query($sql);
if($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    
}

if(isset($_REQUEST['requpdate'])){
{
    $recLogEmail = $_SESSION['remail'];

    $rname = $_REQUEST['rname'];
    $rnum = $_REQUEST['rnum'];
    $raddress = $_REQUEST['raddress'];
    $remail = $_REQUEST['remail'];
    $reducation = $_REQUEST['reducation'];
    $rskills = $_REQUEST['rskills'];
    $rexperience = $_REQUEST['rexperience'];
    $rcity = $_REQUEST['rcity'];
    $rimage = $_FILES['rimage']['name'];
    $rimage_temp = $_FILES['rimage']['tmp_name'];
    $img_folder = '../img/'.$rimage;
    move_uploaded_file($rimage_temp, $img_folder);      

    $sql = "UPDATE recruiter SET rname = '$rname' , rnum = '$rnum' , raddress = '$raddress' , remail = '$remail' , reducation = '$reducation' , rskills = '$rskills' , rexperience = '$rexperience' , rcity = '$rcity', rimage = '$rimage' WHERE remail = '$recLogEmail'";

    if($conn->query($sql) == TRUE) {
        //msg on display form submiy success
        $Msg ='<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated successfully </div>';
    } else {
        $Msg ='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Updation failed </div>';
    }

}
}


?>

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
										<img src="../img/<?php echo $row['rimage']; ?>" style="border-radius: 250px; margin-left: 0px; margin-bottom: 20px;"  width="200px" height="200px">
									</div>
									<div class="mb-5">
										<label for="rimage">Upload Profile picture :</label>
            							<input type="file" class="form-control-file" id="rimage" name="rimage">
									</div>
                                    
									<div class="mt-10">
										<input type="text" name="rname" id="rname" value="<?php echo $row['rname'];?>" placeholder="Full Name"  required class="single-input">
									</div>
									<div class="mt-10">
										<input type="number" name="rnum" id="rnum" value="<?php echo $row['rnum'];?>" placeholder="phone number"  required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="raddress" id="raddress" value="<?php echo $row['raddress'];?>" placeholder="Enter address"  required class="single-input">
									</div>
									<div class="mt-10">
										<input type="email" name="remail" id="remail" value="<?php echo $row['remail'];?>" placeholder="Email address"  required class="single-input">
									</div>
                                    <div class="mt-10">
										<input type="text" name="reducation" id="reducation" value="<?php echo $row['reducation'];?>" placeholder="Education"  required class="single-input">
									</div>
                                    <div class="mt-10">
										<input type="text" name="rskills" id="rskills" value="<?php echo $row['rskills'];?>" placeholder="Skills"  required class="single-input">
									</div>
                                    <div class="mt-10">
										<input type="text" name="rexperience" id="rexperience" value="<?php echo $row['rexperience'];?>" placeholder="Experience"  required class="single-input">
									</div>
									<div class="mt-10">
										<!-- <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div> -->
										<input type="text" name="rcity" id="rcity" placeholder="state/city" required class="single-input" value="<?php echo $row['rcity'];?>" >
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

