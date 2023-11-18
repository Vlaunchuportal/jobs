<!-- start banner Area -->
<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container " style=" height: 13%; " >
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




if(isset($_REQUEST['report'])) {
    $sql = "SELECT * FROM candidate WHERE cid = {$_REQUEST['reportid']} ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
    $jj = $row['cid'];
    
	}





?>
<style>
    /* ratings */
				


                .hey
                {
                    
                    
                   margin-top: 5%;
                   margin-bottom: 10%;
                    position: relative;
                    padding-left: 40%;
                }
                .hrr {
                    padding-top: -20px;
                    width: 50%;
                    position: relative;
                    right: 30%

                }
</style>

<div class="hey">
                            

                           
						<form action="" method="post" >
                        
						<input type="hidden" id="jobid" name="jobid" value="<?php echo $jj; ?>">

						<?php
						if(isset($_SESSION['is_login'])) {
							$recEmail = $_SESSION['remail'];
						} else {
							echo "<script> location.href='../home.php';</script>";
						}
						
						$sql = "SELECT * FROM recruiter WHERE remail = '$recEmail'";
						$result = $conn->query($sql);
						if($result->num_rows == 1) {
							$row = $result->fetch_assoc();
							$rid = $row['rid'];
						}
						
						
						
						
							
						
						
						
						
						
						
						if(isset($_REQUEST['submits']))
						{
						
							$reason = $_REQUEST['reason'];
							$comment = $_REQUEST['rev'];
							$jjj = $_REQUEST['jobid'];
						
							$sql= "INSERT INTO canreporting (canid, recid, reason, comment) VALUES ('$jjj', '$rid', '$reason', '$comment')";
							if($conn -> query($sql) == TRUE) {
								$Msg ='<div class="alert alert-success col-sm-6 ml-5 mt-2">Job Reported to the admin </div>';
							} else {
								$Msg ='<div class="alert alert-danger col-sm-6 ml-5 mt-2">you have already reported this job </div>';
							}
						}
						 
						
						

                        ?>
                        
							
							<h4>Report this Job</h4><br>
                            <label for="reason">Reason:</label><br>
							<textarea name="reason" id="reason" cols="50" rows="1"></textarea>
							
							
							
							<hr class="hrr" >
							<label for="rat">Comment:</label><br>
							<textarea name="rev" id="rev" cols="50" rows="4"></textarea><br><br>
							
							<button class="btn primary-info" type="submit" name="submits"  >report</button>
                            <a href="./Recruiter.php" class="btn btn-danger">Close</a>
						</form>
						<?php
                        if(isset($Msg)) {
                            echo $Msg;
                        }
                        


						?>
</div>


<?php
include('./footer.php')
?>