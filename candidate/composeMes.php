<!-- start banner Area -->
<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Contact Recruiter
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html">Applied jobs</a></p>
						</div>											
					</div>
				</div>
</section>



<?php
include('./header.php');

// if you face an error don't open multiple website of the same page or login in same account
if(isset($_SESSION['is_login'])) {
    $recLogEmail = $_SESSION['lemail'];
    
}

       

if(isset($_REQUEST['submitmail'])) {
        // checking of emptly field
            $recLogEmail = $_SESSION['lemail'];
    
            
            
            $remail = $_REQUEST['remail'];
            $cemail = $_REQUEST['cemail'];
            $message = $_REQUEST['message'];
            
    
            $sql= "INSERT INTO mail(email, cemail, canmessage, posted) VALUES('$cemail', '$remail', '$message', 'candidate')";
    
            if($conn -> query($sql) == TRUE) {
                $Msg ='<div class="alert alert-success col-sm-6 ml-5 mt-2">send email successfull </div>';
            } else {
                $Msg ='<div class="alert alert-danger col-sm-6 ml-5 mt-2">failed to add </div>';
            }
    
    
        
    
}



    

?>

<style>

 
 .home3 {
   position: relative;
   margin-left: 17%;
 }


 .card123 {
  position: relative;
  
  width: 75%;
  
}
</style>
<br><br><br>
<div class=" " style=" text-align: center;"><h2>Vlaunchu Email</h2><br> </div>
<section class="home3">

    <div class="card card123 mb-4">
        <div class="container mt-4" style="backdrop-filter: blur(10px);"><h2>Email</h2>
            <div class="col-sm-10 mt-2">
                <div class="row mx-7 text-center">  
                    <div class="col-sm-9 mt-5 text-center ">
                                
                                <form action="" method="POST" >
                                    
                                    
                                    <div class="form-group" style="text-align: left;">
                                        <label for="job_title">From :</label>
                                        <input type="text" class="form-control" id="remail" name="remail" value="<?php echo $recLogEmail; ?>" readonly><br>
                                    </div>
                                    <div class="form-group" style="text-align: left;">
                                        <label for="job_skills">To :</label>
                                        <input type="text" class="form-control" id="cemail" name="cemail" value=""><br>
                                    </div>
                                    <?php

                                    ?>
                                    <div class="form-group" style="text-align: left;">
                                        <label for="jSalary">Message :</label>
                                        <textarea class="form-control" id="message" name="message"  rows=8></textarea><br>
                                    </div>
                                    <input type="hidden" name="contact" value="">
                                    <button type="submit" class="btn jobviewemail btn-primary" style="margin-bottom: 40px;" id="submitmail" name="submitmail">SEND MAIL</button><br>
                                    <a href="#" class="btn closemail btn-danger">Close</a> <br> <br>

                                    <?php
                                    

                                    if(isset($Msg)) {
                                        echo $Msg;
                                    }
                                    
                                    ?>
                                </form>
                                
                                </div>
                
                </div>
            </div>
        </div>
  </div>
</div>

</section>
<br><br><br>

<?php
include('./footer.php');
?>