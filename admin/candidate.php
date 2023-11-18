        <!-- start banner Area -->
        <section class="banner-area relative" id="home">	
                    <div class="overlay overlay-bg"></div>
                    <div class="container" style="height: 220px;" >
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="about-content col-lg-12">
                                <h1 class="text-white">
                                    Admin section	
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
                    
							$sql = "SELECT * FROM candidate" ;
							
							$result = $conn->query($sql);
							if($result->num_rows > 0)
							{
								while($row = $result -> fetch_assoc())

								{
							?>
							<form action="single.php" method="POST" class="d-inline">
							<div class="single-post d-flex flex-row">
								<div class="thumb">
									<img src="../img/<?php if((!$row['cimage'] == "")){ echo $row['cimage'];} else {echo "user.png";}  ?>" style=" width: 70px; height: 70px; border-radius: 150px; " alt="">
									<ul class="tags">
										<li>
											<a href="#">Art</a>
										</li>
										<li>
											<a href="#">Media</a>
										</li>
										<li>
											<a href="#">Design</a>					
										</li>
									</ul>
								</div>
								<div class="details">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
										
										
										
											<form action="single1.php" method="POST" class="d-inline">
											<input type="hidden" name="viewid" value="<?php echo $row['cid']; ?>">
											<button class="hidebtn" type="submit" name="view" value="view"><h4><?php echo $row['cname']; ?></h4></button>
											</form>
											<h6><?php echo $row['cskills']; ?></h6>					
										
                                				 -->
										</div>
										
									</div>
									<p>
									<?php echo $row['cexperience']; ?>
									</p>
									<h5>Job Nature: Full time</h5>
									<p class="address"><span class="lnr lnr-map"></span> <?php echo $row['caddress']; ?></p>
									<p class="address"><span class="lnr lnr-database"></span> <?php echo $row['ceducation']; ?></p>
									<p class="address"><span class="lnr lnr-star"></span><?php echo $row['cnum']; ?></p>


									<ul class="btns">
										<form action="" method="POST" class="d-inline">
										<input type="hidden" name="id" value="<?php echo $row['cid']; ?>">
										<button type="submit" class="btn job-view btn-danger" name="delete" value="delete">Delete this account</button>
										</form>
										
										<form action="passcandidate.php" method="POST" class="d-inline">
										<input type="hidden" name="id" value="<?php echo $row['cid']; ?>">
										<button type="submit" class="btn job-view btn-info" name="change" value="change">change password</button>
										</form>
									</ul>
								</div>
							</div>
							</form>
							<?php
                			}
                			}
                            else {
                                echo "0 result";
        
                            		}
									if(isset($_REQUEST['delete'])) {
										$sql = "DELETE FROM candidate where cid = {$_REQUEST['id']}";
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