        <!-- start banner Area -->
        <section class="banner-area relative" id="home">	
                    <div class="overlay overlay-bg"></div>
                    <div class="container" style="height: 220px;" >
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="about-content col-lg-12">
                                <h1 class="text-white">
                                    Recruiters
                                </h1>	
        
                            </div>											
                        </div>
                    </div>
            </section>
                <!-- End banner Area -->
                <?php   
include('./header.php');


?>
<style>
     .btnsss{
        position: absolute;
        margin-left: 45%;
    }

    @media screen and (max-width: 600px){
        
        .btnsss{
            margin-left:45%;
        }
    }

    .btnssss{
        position: absolute;
        margin-left: 58%;
    }

    @media screen and (max-width: 600px){
        
        .btnssss{
            margin-left:55%;
        }
    }
</style>

<!-- Start Jobs Listings post Area -->
<section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
							<ul class="cat-list">
								<li><a href="#">All</a></li>
								<li><a href="#">Full Time</a></li>
								<li><a href="#">part Time</a></li>
							</ul>
							<?php
                    
							$sql = "SELECT * FROM recruiter" ;
							
							$result = $conn->query($sql);
							if($result->num_rows > 0)
							{
								while($row = $result -> fetch_assoc())

								{
							?>
							
							<div class="single-post d-flex flex-row">
								
								<div class="details">
									<div class="title d-flex flex-row justify-content-between">
									
									
										<div class="titles">
										
											<form action="" method="POST" class="d-inline">
											<input type="hidden" name="viewid" value="<?php echo $row['rid']; ?>">
											<button class="hidebtn" type="submit" name="view" value="view"><h4><?php echo $row['rname']; ?></h4></button>
											</form>
											<h6><?php echo $row['raddress']; ?></h6>					
										</div>
										<!-- <ul class="btns">
											<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
											<li><a href="#">Apply</a></li>
											<form action="single.php" method="POST" class="d-inline">
											<input type="hidden" name="viewid" value="">
											<li><a name="view" value="view" type="submit" href="single.php">View</a></li>
											</form>
										</ul> -->
										
									</div>
									<p>
									<?php echo $row['rexperience']; ?>
									</p>
									
									<p class="address"> <?php echo $row['rskills']; ?> </p>
									<p class="address"> <?php echo $row['remail']; ?></p>
									<p class="address"><?php echo $row['rnum']; ?> </p>
                                    <ul class="btns">
                                        <form action="" method="POST" class="d-inline">
										<input type="hidden" name="id" value="<?php echo $row['rid']; ?>">
										<button type="submit" class="btn job-view bt btn-danger" name="delete" value="delete">Delete this account</button>
										</form>

										<form action="" method="POST" class="d-inline">
										<input type="hidden" name="viewid" value="<?php echo $row['rid']; ?>">
										<button type="submit" class="btn job-view  btn-secondary" name="view" value="view">View</button>
										</form>


										<form action="passrecruiter.php" method="POST" class="d-inline">
										<input type="hidden" name="id" value="<?php echo $row['rid']; ?>">
										<button type="submit" class="btn job-view btn-info" name="change" value="change">change password</button>
										</form>

										</ul>
                                </div>
							</div>
							
							<?php
                			}
                			}
                            else {
                                echo "0 result";
        
                            		}

                                    if(isset($_REQUEST['delete'])) {
                                        $sql = "DELETE FROM recruiter where rid = {$_REQUEST['id']}";
                                        if($conn->query($sql) == TRUE){
                                            echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
                                        } else {
                                            echo "unable to delete data";
                                        }
                                    }

                            

                			?>
                        </div>
                    </div>
                </div>
</section> 


<?php   
include('./footer.php');


?>