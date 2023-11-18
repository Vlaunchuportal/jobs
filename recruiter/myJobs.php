<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								My jobs
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html">Jobs</a></p>
						</div>											
					</div>
				</div>
</section>

<?php
include('./header.php');

if(isset($_SESSION['is_login'])) {
    $remail = $_SESSION['remail'];


} 
?>

<section class="home">
    <div class="container text-center mt-5 " style="backdrop-filter: blur(10px);"><h2>Jobs</h2></div>
        <div class="col-sm-12 mt-3">
            <div class="row mx-5 text-center">
                <div class="col-sm-12 mt-5 text-center">
                    <p class="bg-dark text-white p-2">All Jobs</p>
                    <?php
                    $remail = $_SESSION['remail'];
                    $sql = "SELECT * FROM jobs WHERE posted ='$remail'" ;
                    $result = $conn->query($sql);
                    if($result->num_rows > 0){

                    
                    
                    
                    ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Job Id</th>
                                <th scope="col">Job</th>
                                <th scope="col">Job skills</th>
                                <th scope="col">No Of Openings</th>
                                <th scope="col">Job Location</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Description</th>
                                <th scope="col">action</th>
                                <th scope="col">Applied Candidates</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($row = $result -> fetch_assoc())
                            {
                        
                            echo '<tr>';
                                echo '<th scope="row">'.$row['jid'].'</th>';
                                echo '<td>'.$row['jTitle'].'</td>';
                                echo '<td>'.$row['jSkills'].'</td>';
                                echo '<td>'.$row['jOpenings'].'</td>';
                                echo '<td>'.$row['jLocation'].'</td>';

                                echo '<td>'.$row['jSalary'].'</td>';
                                echo '<td>'.$row['jDescription'].'</td>';
                                echo '<td>
                                <form action="editJob.php" method="POST" class="d-inline">
                                <input type="hidden" name="id" value='.$row["jid"].'>
                                <button type="submit" class="btn btn-info mr-3" name="update" value="Update"><i class="fa-solid fa-pen-nib"></i>Update</button>
                                </form> <br><br>
                                
                                <form action="" method="POST" class="d-inline">
                                <input type="hidden" name="id" value='.$row["jid"].'>
                                <button type="submit" class="btn btn-danger" name="delete" value="Delete"><i class="far fa-trash-alt"></i>Delete</button>
                                </form>
                                </td>';

                                echo '<td>
                                <form action="appliedCandidates.php" method="POST" class="d-inline">
                                <input type="hidden" name="id" value='.$row["jid"].'>
                                <button type="submit" class="btn btn-primary mr-3" name="view" value="view"><i class="fa-solid fa-pen-nib"></i>View</button>
                                </form> <br><br>
                                </td>
                            </tr>';

                            }
                            ?>
                        </tbody>
                    </table>
                    <?php
                    }
                    else {
                        echo "0 result";

                    }

                    //detete job
                    if(isset($_REQUEST['delete'])) {
                        $sql = "DELETE FROM jobs where jId = {$_REQUEST['id']}";
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
    </div>
</section>
   

<?php
include('./footer.php');
?>

