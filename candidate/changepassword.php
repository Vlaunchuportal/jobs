<?php

include('./header.php');



// the code is for not to go directly to the specified file in typing in URL! 

if(isset($_SESSION['is_login'])) {
    $lemail = $_SESSION['lemail'];


} else {
    echo "<script> location.href='../index.php'; </script>";
}
$lemail = $_SESSION['lemail'];
if(isset($_REQUEST['cpasswordButton'])){
    if($_REQUEST['lnewpassword'] == ""){
        $Msg ='<div class="alert alert-warning col-sm-6 ml-5 mt-2">FIll all the fields </div>';
    } else {
        $sql = "SELECT * FROM candidate where cemail = '$lemail'";
        $result = $conn->query($sql);
        if($result->num_rows == 1) {
            $cpassword = $_REQUEST['lnewpassword'];
            $sql = "UPDATE candidate SET cpassword = '$cpassword' where cemail = '$lemail'";
            if($conn->query($sql) == TRUE) {
                $Msg ='<div class="alert alert-success col-sm-6 ml-5 mt-2">Password changed successfully </div>';
            } else {
                $Msg ='<div class="alert alert-warning col-sm-6 ml-5 mt-2">failed Password to change </div>';
            }
        }
    }
}

?>

 <!-- start banner Area -->
 <section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Change password		
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html"> password</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	




    <div class="container mt-5" style="backdrop-filter: blur(10px);"><h2>Change Password</h2>
        
            <div class="row mx-7 text-center">
                <div class="col-sm-9 mt-5 text-center ">
                    
                    <form class="mt-5 mx-5">
                    <?php
                        if(isset($Msg)) {
                            echo $Msg;
                        }
                        
                        ?>
                        <div class="form-group" style="text-align: left;>
                            <label for="input_email" >Email :</label>
                            <input type="email" class="form-control" id="inputEmail" value="<?php echo $lemail ?>" readonly><br>
                        </div>
                        <div class="form-group " style="text-align: left;">
                            <label for="new password">New Password :</label>
                            <input type="text" class="form-control" id="inputnewpassword" placeholder="new password" name="lnewpassword"><br>
                        </div>
                        <div class="form-group " style="text-align: left;">
                            <label for="new password"> Confirm New Password :</label>
                            <input type="text" class="form-control" id="cinputnewpassword" placeholder=" Retype new password" name="clnewpassword"><br>
                        </div><br>
                        
                        <div class="text-center">
                        <br><button type="submit" class="btn btn-primary" name="cpasswordButton">Submit</button>
                            
                            <a type="reset" href="Candidate.php" class="btn btn-danger">Close</a>
                            <br><br><br>
                        </div>
                        
                    </form>
                </div>
                
            </div>
        
    </div>





<?php
include('./footer.php');
?>






