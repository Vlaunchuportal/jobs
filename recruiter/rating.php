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




if(isset($_REQUEST['rate'])) {
    $sql = "SELECT * FROM candidate WHERE cid = {$_REQUEST['rateid']} ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
    $jj = $row['cid'];
    
	}





?>
<style>
    /* ratings */
				

    .rating {
				margin-top: 40px;
				border: none;
				float: left;
				}

				.rating > label {
				color: #90A0A3;
				float: right;
				}

				.rating > label:before {
				margin: 5px;
				font-size: 2em;
				font-family: FontAwesome;
				content: "\f005";
				display: inline-block;
				}

				.rating > input {
				display: none;
				}

				.rating > input:checked ~ label,
				.rating:not(:checked) > label:hover,
				.rating:not(:checked) > label:hover ~ label {
				color: #F79426;
				}

				.rating > input:checked + label:hover,
				.rating > input:checked ~ label:hover,
				.rating > label:hover ~ input:checked ~ label,
				.rating > input:checked ~ label:hover ~ label {
				color: #FECE31;
				}


                .hey
                {
                    
                    
                   margin-top: 5%;
                   margin-bottom: 10%;
                    position: relative;
                    padding-left: 40%;
                }
                .hrr {
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
							if(!empty($_REQUEST['rating'])) 
						
							$rating = $_REQUEST['rating'];
							$rev = $_REQUEST['rev'];
							$jjj = $_REQUEST['jobid'];
						
							$sql= "INSERT INTO canrating1 (canid, recid, rating, review) VALUES ('$jjj', '$rid', '$rating', '$rev')";
							if($conn -> query($sql) == TRUE) 
							{
								$Msg ='<div class="alert alert-success col-sm-6 ml-5 mt-2">Job Rated successfull </div>';

								$wall=0;
								$poll=0;

								$sql="SELECT * FROM canrating1 where canid = '$jjj' ";
								$result = $conn->query($sql);
								$bb = $result->num_rows;



								if($result->num_rows > 0)
								{
								while($row = $result -> fetch_assoc())

								{

								$wall+= $row['rating'];
									
								}
								$poll = $wall/$bb;	
									
								$sql = "UPDATE candidate SET ratings = '$poll', rateno = '$bb' WHERE cid = '$jjj'";
								$result = $conn->query($sql);



								} 
							
								else 
								{
								$Msg ='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Right now you cant rate this job </div>';
								}
							}
						}
						 
						
						

                        ?>
                        
							<div class="rating">
							<h4>Ratings</h4><br>
							<input type="radio" id="star5" name="rating" value="5" />
							<label class="star" for="star5" title="Awesome" aria-hidden="true"></label>
							<input type="radio" id="star4" name="rating" value="4" />
							<label class="star" for="star4" title="Great" aria-hidden="true"></label>
							<input type="radio" id="star3" name="rating" value="3" />
							<label class="star" for="star3" title="Very good" aria-hidden="true"></label>
							<input type="radio" id="star2" name="rating" value="2" />
							<label class="star" for="star2" title="Good" aria-hidden="true"></label>
							<input type="radio" id="star1" name="rating" value="1" />
							<label class="star" for="star1" title="Bad" aria-hidden="true"></label>
							
							</div>
							<br><br><br><br><br>
							<hr class="hrr" >
							<label for="rat">Review:</label><br>
							<textarea name="rev" id="rev" cols="50" rows="4"></textarea><br><br>
							
							<button class="btn primary-info" type="submit" name="submits"  >Rate</button>
                            <a href="./Candidate.php" class="btn btn-danger">Close</a>
						</form>
						<?php
                        if(isset($Msg)) {
                            echo $Msg;
                        }
                        


						?>
</div>


<?php
include('./footer.php');
?>