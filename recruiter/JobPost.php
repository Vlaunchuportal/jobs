<?php
include('./header.php');
include('../DBConnect.php');


 if(isset($_SESSION['is_login'])) {
     $remail = $_SESSION['remail'];
    

    } else {
     echo "<script> location.href='../home.php'; </script>";
    }


if(isset($_REQUEST['jobsubmit'])) {
    // checking of emptly field
    if(($_REQUEST['jTitle'] == "") || ($_REQUEST['jOpenings'] == "") || ($_REQUEST['jLocation'] == "") || ($_REQUEST['jSalary'] == "") || ($_REQUEST['jDescription'] == "") || ($_REQUEST['jCompany'] == "")
    ) {
        $Msg ='<div class="alert alert-warning col-sm-6 ml-5 mt-2">FIll all the fields </div>';
    } else {
        $remail = $_SESSION['remail'];

        $jTitle = $_REQUEST['jTitle'];
        $jOpenings = $_REQUEST['jOpenings'];
        $jSkills = $_REQUEST['jSkills'];
        $jLocation = $_REQUEST['jLocation'];
        $jSalary = $_REQUEST['jSalary'];
        $jDescription = $_REQUEST['jDescription'];
        $jCompany = $_REQUEST['jCompany'];
        $jBrief = $_REQUEST['jBrief'];
        $jImage = $_FILES['jImage']['name'];
        $jImage_temp = $_FILES['jImage']['tmp_name'];
        $img_folder = '../img/'.$jImage;
        move_uploaded_file($jImage_temp, $img_folder);

        $sql= "INSERT INTO jobs (jTitle, jOpenings, jLocation, jSalary, jDescription, jCompany, jImage, jSkills, jBrief, posted) VALUES ('$jTitle', '$jOpenings', '$jLocation', '$jSalary', '$jDescription', '$jCompany', '$jImage', '$jSkills', '$jBrief', '$remail')";

        if($conn -> query($sql) == TRUE) {
            $Msg ='<div class="alert alert-success col-sm-6 ml-5 mt-2">Job added successfull </div>';
        } else {
            $Msg ='<div class="alert alert-danger col-sm-6 ml-5 mt-2">job didnt added successfull </div>';
        }


    }

}
?>


?>
            
            
            <!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Job Postings			
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html"> post jobs</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
            
            
            <!-- Start Align Area -->
                <div class="whole-wrap">
				<div class="container">
					
					
					
					<div class="section-top-border">
						<div class="row">
							<div class="col-lg-8 col-md-8">
								<h3 class="mb-30">Post the Job</h3>
								<form action="" method="POST" enctype="multipart/form-data" >
                                <?php
                                    if(isset($Msg)) {
                                        echo $Msg;
                                    }
                                    
                                    ?>
									<div class="mb-5">
										<label for="cimage">Upload Image of the company:</label>
            							<input type="file" class="form-control-file" id="jImage" name="jImage">
									</div>
									<div class="mt-10">
										<input type="text" name="jTitle" id="jTitle" placeholder="Job Title" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Job Title'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="jSkills" id="jSkills" placeholder="Skills Needed" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Skills Needed'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="jDescription" id="jDescription" placeholder="Job Descriiption" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Job Descriiption'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="jCompany" id="jCompany" placeholder="Company Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Company Name'" required class="single-input">
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
										<input type="text" name="jLocation" id="jLocation" placeholder="Job Location" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Job Location'" required class="single-input">
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
									
									<div class="mt-10">
										<textarea class="single-textarea" name="jBrief" id="jBrief" placeholder="Brief details about the job" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required></textarea>
									</div>
									<!-- For Gradient Border Use -->
									<!-- <div class="mt-10">
										<div class="primary-input">
											<input id="primary-input" type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'">
											<label for="primary-input"></label>
										</div>
									</div> -->
									
									<div class="mt-10">
										<input type="number" name="jOpenings" id="jOpenings" placeholder="Job Openings" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required class="single-input-accent">
									</div>
									
                                    <div class="mt-10">
										<input type="text" name="jSalary" id="jSalary" placeholder="Job Salary" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required class="single-input-accent">
									</div>

									<div class="mt-5">
										<button class="btn btn-primary profile-button" style="border-radius: 200px; margin-left: 35%; width: 30%;" type="submit" id="jobsubmit" name="jobsubmit">Register Job</button>
                                        <a href="Recruiter.php" class="btn btn-danger" style=" border-radius: 50px; " >Close</a>
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
