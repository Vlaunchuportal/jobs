<!-- start banner Area -->
<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Candidates	
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html">Applied jobs</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

<?php
include('./header.php');

if(isset($_SESSION['is_login'])) {
    $remail = $_SESSION['remail'];
    $sql = "SELECT * FROM jobs WHERE posted = '$remail'";
    $result = $conn->query($sql);
     
} else {
    echo "<script> location.href='../home.php'; </script>";
}



?>
<style>
 
 .home3 {
   position: relative;
   margin-left: 5%;
   margin-right: 5%;
 }
 
 .card123 {
   position: relative;
   
   width: 75%;
   
 }
 
 .viewdesc {
     position: absolute;
     left: 20%;
     top: 188px;
 
 }
 
 .viewtitle {
     position: absolute;
     left: 20%;
     top: 88px;
 
 }
 
 .viewimage {
         border-radius: 100px;
         margin-top: 50px;
         margin-left: 50px;
     }
 
 </style>	
	 


<br><br>
<section class="home3">




<div class="container text-center mt-5" style="backdrop-filter: blur(10px);"><h2>Candidates Jobs applied</h2></div>

                <div class=" mt-5 text-center"><br>
                    <p class="bg-dark text-white p-2">Jobs Applications</p><br>

                    
                    <?php
                    if(isset($_REQUEST['view'])) {
                        
                    
                    $remail = $_SESSION['remail'];
                    $sql = "SELECT * FROM applyjob WHERE recemail = '$remail' AND jobid = {$_REQUEST['id']}";
                    $result = $conn->query($sql);
                    if($result->num_rows>0) {
                    ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Candidates Name</th>
                                <th scope="col">Candidates Email</th>
                                <th scope="col">Job Applied to</th>
                                <th scope="col">Candidates Skills</th>
                                <th scope="col">Resume</th>
                                <th scope="col">View candidate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo $row['aname']; ?></th>
                                <td><?php echo $row['aemail']; ?></td>
                                <td><?php echo $row['jobname']; ?></td>
                                <td><?php echo $row['askills']; ?></td>
                                <td><a href=""><?php echo $row['aresume']; ?></a></td>

                                
                                
                                
                                
                                <td>
                                <form action="viewapplication.php" method="POST" class="d-inline">
                                <input type="hidden" name="jobid" value="<?php echo $row['aid'];?>">
                                <button type="submit" class="btn btn-primary" name="viewapp" value="viewapp"><i class="fa-solid fa-users-viewfinder"></i>view</button><br>
                                </form>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php
                    } else {
                        echo "your Jobs havent applied by Anyone yet";
                    }
                    }
                
                    ?>
                </div>
            </div>
        </div>
    </div>
</section><br><br><br>



<?php
include('./footer.php');

?>
	
	