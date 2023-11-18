<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Update jobs
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html">Jobs</a></p>
						</div>											
					</div>
				</div>
</section>

<?php
include('./header.php');


if(isset($_REQUEST['jobSubmit'])) {
    // checking of emptly field
    if(($_REQUEST['jTitle'] == "") || ($_REQUEST['jOpenings'] == "") || ($_REQUEST['jLocation'] == "") || ($_REQUEST['jSalary'] == "") || ($_REQUEST['jDescription'] == "") || ($_REQUEST['jCompany'] == "")
    ) {
        $Msg ='<div class="alert alert-warning col-sm-6 ml-5 mt-2">FIll all the fields </div>';
    } else {
        $remail = $_SESSION['remail'];

        $jTitle = $_REQUEST['jTitle'];
        $jOpenings = $_REQUEST['jOpenings'];
        $jSkills = $_REQUEST['jSkills'];
        $jtime = $_REQUEST['jtime'];
        $q1 = $_REQUEST['q1'];
        $q2 = $_REQUEST['q2'];
        $q3 = $_REQUEST['q3'];
        $jType = $_REQUEST['jtype'];
        $jLocation = $_REQUEST['jLocation'];
        $jSalary = $_REQUEST['jSalary'];
        $jDescription = $_REQUEST['jDescription'];
        $jCompany = $_REQUEST['jCompany'];
        $jImage = $_FILES['jImage']['name'];
        $jImage_temp = $_FILES['jImage']['tmp_name'];
        $img_folder = '../img/'.$jImage;
        move_uploaded_file($jImage_temp, $img_folder);

        $sql= "INSERT INTO jobs (jTitle, jOpenings, jLocation, jSalary, jDescription, jCompany, jImage, jSkills, jNature, jType, q1, q2, q3, posted) VALUES ('$jTitle', '$jOpenings', '$jLocation', '$jSalary', '$jDescription', '$jCompany', '$jImage', '$jSkills', '$jtime', '$jType', '$q1', '$q2', '$q3', '$remail')";

        if($conn -> query($sql) == TRUE) {
            $Msg ='<div class="alert alert-success col-sm-6 ml-5 mt-2">Job added successfull </div>';
        } else {
            $Msg ='<div class="alert alert-danger col-sm-6 ml-5 mt-2">job didnt added successfull </div>';
        }


    }

}
?>

<section class="home">
    <div class="container mt-5" style="backdrop-filter: blur(10px);"><h2>Post New Jobs</h2>
        <div class="col-sm-10 mt-3">
            <div class="row mx-7 text-center">
                <div class="col-sm-9 mt-5 text-center ">
                    
                    <form action="" method="POST" enctype="multipart/form-data">
                        <?php
                        if(isset($Msg)) {
                            echo $Msg;
                        }
                        
                        ?>
                        <div class="form-group" style="text-align: left;">
                            <label for="job_title">Job Title :</label>
                            <input type="text" class="form-control" id="jTitle" name="jTitle"><br>
                        </div>
                        <div class="form-group" style="text-align: left;">
                            <label for="job_skills">Job Skills :</label>
                            <input type="text" class="form-control" id="jSkills" name="jSkills"><br>
                        </div>
                        <div class="form-group" style="text-align: left;">
                            <label for="job_skills">Job time : (Full time/Part time)</label>
                            <input type="text" class="form-control" id="jtime" name="jtime"><br>
                        </div>
                        <div class="form-group " style="text-align: left;">
                            <label for="jOpenings">Job Openings :</label>
                            <input type="text" class="form-control" id="jOpenings" name="jOpenings"><br>
                        </div>
                        <div class="form-group" style="text-align: left;">
                            <label for="jLocation">Job Location : </label>
                            <input type="text" class="form-control" id="jLocation" name="jLocation"><br>
                        </div>
                        <div class="form-group" style="text-align: left;">
                            <label for="jSalary">Salary :</label>
                            <input type="text" class="form-control" id="jSalary" name="jSalary"><br>
                        </div>
                        <div class="form-group" style="text-align: left;">
                            <label for="jSalary">Job Description :</label>
                            <textarea class="form-control" id="jDescription" name="jDescription" row=2></textarea><br>
                        </div>
                        <div class="form-group" style="text-align: left;">
                            <label for="jSalary">Company :</label>
                            <input type="text" class="form-control" id="jCompany" name="jCompany"><br>
                        </div><br>
                        <div class="form-group" style="text-align: left;">
                            <label for="job_skills">Job type : (permanent/contract)</label>
                            <input type="text" class="form-control" id="jtype" name="jtype"><br>
                        </div>
                        <hr>
                        <h5> Additional Questions:</h5><br><br>
                        <div class="form-group" style="text-align: left;">
                            <label for="job_skills">Question 1 : (optional)</label>
                            <input type="text" class="form-control" id="q1" name="q1"><br>
                        </div>
                        <div class="form-group" style="text-align: left;">
                            <label for="job_skills">Question 2 : (optional)</label>
                            <input type="text" class="form-control" id="q2" name="q2"><br>
                        </div>
                        <div class="form-group" style="text-align: left;">
                            <label for="job_skills">Question 3 : (optional)</label>
                            <input type="text" class="form-control" id="q3" name="q3"><br>
                        </div>
                        <div class="form-group">
                            <label for="jSalary">Upload Image :</label><br><br>
                            <input type="file" class="form-control-file" id="jImage" name="jImage"><br>
                        </div>
                        <div class="text-center">
                        <br><button type="submit" class="btn btn-primary" id="jobSubmit" name="jobSubmit">Submit</button>
                            
                            <a href="cor.php" class="btn btn-danger">Close</a> <br><br><br>
                        </div>
                        
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</section>




<?php
include('./footer.php');
?>

