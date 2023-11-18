<!-- start banner Area -->
<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Candidates Details
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html">Applied jobs</a></p>
						</div>											
					</div>
				</div>
</section>
			<!-- End banner Area -->	
<style>
 
.home3 {
  position: relative;
  margin-left: 17%;
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

<?php
include('./header.php');




if(isset($_REQUEST['viewapp'])){
    $sql = "SELECT * FROM applyjob WHERE aid = {$_REQUEST['jobid']} ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    

    }         
                    
                    


?>
<br><br>
<h2 style=" text-align: center; " >Job Details</h2><br>
<div class="home3">


<div class="card card123 mb-2">
  <img class="card-img-top viewimage ml-2 " style="height: 150px; width: 150px; align-items: center;;" src="../img/<?php if(!isset($row['aimage'])){ echo $row['aimage'];} else {echo "user.png";} ?>" alt="Card image cap">
  <h2 class="viewtitle"><?php if(isset($row['aname'])){ echo $row['aname'];}?></h2> <br>
  <h4 class="viewdesc"><?php if(isset($row['aeducation'])){ echo $row['aeducation'];}?></h4>
  <div class="card-body">
  <h5 class="card-title" ><b> Job applied to :</b></h5>
    <h5 class="card-title" ><?php if(isset($row['jobname'])){ echo ' jobid :'; echo $row['jobid']; }?></h5><br><br>
    <h5 class="card-title" ><b> Job Name :</b></h5>
    <h5 class="card-title" ><?php if(isset($row['jobname'])){  echo $row['jobname'];}?></h5><br><br>
    <h5 class="card-title" ><b> SKILLS :</b></h5>
    <h5 class="card-title" ><?php if(isset($row['askills'])){ echo $row['askills'];}?></h5><br>
    <h5 class="card-title" ><b> Email :</b></h5>
    <h5 class="card-title" ><?php if(isset($row['aemail'])){ echo $row['aemail'];}?></h5><br>
    <h5 class="card-title" ><b> Phone Number :</b></h5>
    <h5 class="card-title" ><?php if(isset($row['anum'])){ echo $row['anum'];}?></h5><br>
    <h5 class="card-title" ><b> LOCATION :</b></h5>
    <h5 class="card-title" ><?php if(isset($row['acity'])){ echo $row['acity'];}?></h5><br>
    <h5 class="card-title" ><b>EXPERIENCE : </b></h5>
    <h5 class="card-title" ><?php if(isset($row['aexperience'])){ echo $row['aexperience'];}?></h5><br>
    <hr>
    <h5> questions Answered! :</h5>

    <h5 class="card-title" ><b><?php if(isset($row['q1'])){ echo $row['q1'];}?> </b></h5>
    <h5 class="card-title" ><?php if(isset($row['a1'])){ echo $row['a1'];}?></h5><br>

    <h5 class="card-title" ><b><?php if(isset($row['q2'])){ echo $row['q2'];}?> </b></h5>
    <h5 class="card-title" ><?php if(isset($row['a2'])){ echo $row['a2'];}?></h5><br>

    <h5 class="card-title" ><b><?php if(isset($row['q3'])){ echo $row['q3'];}?> </b></h5>
    <h5 class="card-title" ><?php if(isset($row['a3'])){ echo $row['a3'];}?></h5><br>

    <h5 class="card-title" ><b> Candidates Resume : </b></h5><br>
    <a href="../resume/<?php if(isset($row['aresume'])){ echo $row['aresume'];}?>">
    <h5 class="card-title" ><a href="" ><?php if(isset($row['aresume'])){ echo $row['aresume'];}?></a></h5><br>
    </a>

    <form action="message.php" method="POST" class="d-inline">
    <input type="hidden" name="contact" value="<?php echo $row['aid']; ?>">
    <button type="submit" class="btn jobview-apply btn-primary" name="contactdetails" value="contact">Contact this Candidate</button><br>
    </form>

    <!-- <form action="#" method="POST" class="d-inline">
    <input type="hidden" name="applyid" value="<?php echo $row['jid']; ?>">
    <button type="submit" class="btn jobview-Ratings btn-secondary" name="apply" value="View">Rate this Job</button><br>
    </form>

    <form action="#" method="POST" class="d-inline">
    <input type="hidden" name="applyid" value="<?php echo $row['jid']; ?>">
    <button type="submit" class="btn jobview-Report btn-danger" name="apply" value="View">Report this Job</button><br>
    </form> -->

    <br>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    
  </div>
  </div>
<br><br><br>
</div>


<?php
include('./footer.php');
?>

